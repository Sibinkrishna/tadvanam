<?php namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller {

    // Show registration form
    public function register() {
        $roles=Role::all();
        return view('Admin.Auth.register', compact('roles'));
    }

    public function index() {
        // $admins = DB::table('admins')->paginate(10);
        $admins=Admin::paginate(10);
        return view('Admin.Auth.list', compact('admins'));
    }

    public function store(Request $request) {
        $request->validate([ 'name'=> 'required',
            'email'=> 'required|email|unique:admins',
            'password'=> 'required|confirmed',
            'role_id'=> 'required|exists:roles,id'
            ]);

        Admin::create([ 'name'=> $request->name,
                'email'=> $request->email,
                'password'=> Hash::make($request->password),
                'role_id'=> $request->role_id,
                ]);

        return redirect()->back();
    }

    public function edit($id) {
        $admin=Admin::findOrFail($id);
        $roles=Role::all();
        return view('Admin.Auth.edit', compact('admin', 'roles'));
    }

    public function update(Request $request, $id) {
        $request->validate([ 'name'=> 'required|string|max:255',
            'email'=> 'required|string|email|max:255|unique:admins,email,'. $id,
            'password'=> 'nullable|string|min:5|confirmed',
            'role_id'=> 'required|exists:roles,id',
            // 'status' => 'required|in:1,0',
            ]);

        try {
            $admin=Admin::findOrFail($id);
            $admin->name=$request->name;
            $admin->email=$request->email;

            if ($request->filled('password')) {
                $admin->password=Hash::make($request->password);
            }

            $admin->role_id=$request->role_id;
            $admin->status=$request->status ?? 1;
            $admin->save();

            // If the currently logged-in admin is being set to inactive, log them out
            if (Auth::guard('admin')->id()==$admin->id && $admin->status !='Active') {
                Auth::guard('admin')->logout();
                session()->flash('error', 'Your account has been deactivated.');
                return redirect()->route('admin.login');
            }

            session()->flash('success', 'Admin updated successfully!');
            return redirect()->route('admin.register.list');
        }

        catch (\Exception $e) {
            session()->flash('error', 'Failed to update admin. Please try again.');
            return redirect()->back();
        }
    }

    public function loginIndex() {
        return view('Admin.Auth.login');
    }

    public function destroy($id) {
        $admin=Admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('admin.register.list')->with('success', 'Admin moved to trash successfully.');

    }

    public function login(Request $request) {
        $credentials=$request->validate([ 'email'=> 'required|email',
            'password'=> 'required',
            ]);

        // Add status to credentials to allow only active admins
        $credentials['status']='Active';

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email'=> 'Invalid credentials or inactive account.']);
    }


    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }

}
