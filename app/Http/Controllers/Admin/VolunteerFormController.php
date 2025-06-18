<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\VolunteerForm;
use App\Http\Controllers\Controller;

class VolunteerFormController extends Controller
{
    public function index()
    {
        $volunteers = VolunteerForm::paginate(10);
        return view('Admin.Volunteers.index',compact('volunteers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string'
        ]);

        $volunteer = VolunteerForm::findOrFail($id);
        $volunteer->status = $request->input('status');
        $volunteer->save();

        return redirect()->back()->with('success', 'Volunteer status updated successfully.');
    }
}
