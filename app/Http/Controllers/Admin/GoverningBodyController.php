<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\GoverningBody;
use App\Http\Controllers\Controller;

class GoverningBodyController extends Controller
{
    public function index()
    {
        $members = GoverningBody::latest()->paginate(10);
        return view('Admin.Governing_body.index', compact('members'));
    }

    public function create()
    {
        return view('Admin.Governing_body.from');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'designation' => 'nullable|string',
            'description' => 'nullable|string',
            'status'      => 'required|in:active,inactive',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('governing_bodies', 'public');
        }

        GoverningBody::create($data);

        return redirect()->route('admin.governing_body.index')->with('success', 'Member added successfully.');
    }

    public function edit($id)
    {
        $member = GoverningBody::findOrFail($id);
        return view('Admin.Governing_body.from', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = GoverningBody::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string',
            'designation' => 'nullable|string',
            'description' => 'nullable|string',
            'status'      => 'required|in:active,inactive',
            'image' => 'nullable|image|max:2048',
            'remove_image' => 'nullable|boolean',
        ]);

        // Handle image removal
        if ($request->input('remove_image')) {
            if ($member->image && file_exists(public_path('storage/' . $member->image))) {
                unlink(public_path('storage/' . $member->image));
            }
            $data['image'] = null;
        }

        // Handle new image upload
        if ($request->hasFile('image')) {
            if ($member->image && file_exists(public_path('storage/' . $member->image))) {
                unlink(public_path('storage/' . $member->image));
            }
            $data['image'] = $request->file('image')->store('governing_bodies', 'public');
        }

        $member->update($data);

        return redirect()->route('admin.governing_body.index')->with('success', 'Member updated successfully.');
    }

    public function destroy($id)
    {
        $member = GoverningBody::findOrFail($id);
        if ($member->image && file_exists(public_path('storage/' . $member->image))) {
            unlink(public_path('storage/' . $member->image));
        }
        $member->delete();

        return back()->with('success', 'Member deleted.');
    }
}
