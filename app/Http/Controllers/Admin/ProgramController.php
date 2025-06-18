<?php

namespace App\Http\Controllers\Admin;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\ProgramGallery;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{

    public function index(Request $request)
    {
        $programs = DB::table('programs')
        ->join('programs_cata', 'programs.program_cata_id', '=', 'programs_cata.id')
        ->select('programs.*', 'programs_cata.name as category_name')
        ->paginate(10);
        return view('Admin.Programs.index', compact('programs'));
    }
    public function create()
    {
        $program_cata = DB::table('programs_cata')->get();
        return view('Admin.Programs.create',compact('program_cata'));
    }
    public function edit($id)
    {
        $program_cata = DB::table('programs_cata')->get();
        $program = Program::with('programgalleries')->findOrFail($id);
        return view('Admin.Programs.create', compact('program','program_cata'));
    }
    // public function show($id){
    //     return view('Admin.Programs.show');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'slug'        => 'required|unique:programs,slug',
            'description' => 'nullable',
            'featured_image' => 'image|mimes:jpg,jpeg,png|max:2048',
            'location'    => 'nullable',
            'date'        => 'nullable|date',
            'time'        => 'nullable',
            'status'      => 'required|in:draft,published',
            'image.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $featuredPath = null;
        if ($request->hasFile('featured_image')) {
            $featuredPath = $request->file('featured_image')->store('programs', 'public');
        }

        $program = Program::create([
            'program_cata_id' => $request->input('program_cata_id'),
            'title'         => $request->input('title'),
            'slug'          => $request->input('slug'),
            'description'   => $request->input('description'),
            'featured_image' => $featuredPath,
            'location'     => $request->input('location'),
            'date'         => $request->input('date'),
            'time'         => $request->input('time'),
            'status'       => $request->input('status'),
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $path = $image->store('programs/gallery', 'public');
                ProgramGallery::create(['program_id' => $program->id,'image' => $path]);
            }
    }

        return redirect()->route('admin.programs.index')->with('success', 'Program successfully added');
    }

    // public function edit(Program $program)
    // {
    //     return view('Admin.Programs.edit', compact('program')); // resources/views/programs/edit.blade.php
    // }

    public function update(Request $request, Program $program)
    {
        $request->validate([
            'title'       => 'required',
            'slug'        => 'required|unique:programs,slug,' . $program->id,
            'description' => 'nullable',
            'featured_image' => 'image|mimes:jpg,jpeg,png|max:2048',
            'location'    => 'nullable',
            'date'        => 'nullable|date',
            'time'        => 'nullable',
            'status'      => 'required|in:draft,published',
            'image.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('featured_image')) {
            if ($program->featured_image && Storage::exists('public/'.$program->featured_image)) {
                Storage::delete('public/'.$program->featured_image);
            }
            $featuredPath = $request->file('featured_image')->store('programs', 'public');
            $program->featured_image = $featuredPath;
        }

        $program->update([
            'program_cata_id' => $request->input('program_cata_id'),
            'title'       => $request->input('title'),
            'slug'        => $request->input('slug'),
            'description' => $request->input('description'),
            'location'    => $request->input('location'),
            'date'        => $request->input('date'),
            'time'        => $request->input('time'),
            'status'      => $request->input('status'),
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $path = $image->store('programs/gallery', 'public');
                ProgramGallery::create([
                    'program_id' => $program->id,
                    'image'      => $path,
                ]);
            }
        }

        if ($request->has('delete_gallery_images')) {
            $deleteIds = $request->input('delete_gallery_images', []);
            foreach ($deleteIds as $galleryId) {
                $gallery = ProgramGallery::where('program_id', $program->id)->where('id', $galleryId)->first();
                if ($gallery) {
                    if (Storage::exists('public/' . $gallery->image)) {
                        Storage::delete('public/' . $gallery->image);
                    }
                    $gallery->delete();
                }
            }
        }

        return redirect()->route('admin.programs.index')->with('success', 'Program successfully updated');
    }

    public function destroy(Program $program)
    {
        if ($program->featured_image && Storage::exists('public/'.$program->featured_image)) {
            Storage::delete('public/'.$program->featured_image);
        }
        $galleryImages = $program->programgalleries ?? [];
        foreach ($galleryImages as $item) {
            if (Storage::exists('public/'.$item->image)) {
                Storage::delete('public/'.$item->image);
            }
            $item->delete();
        }
        $program->delete();

        return redirect()->route('admin.programs.index')->with('success', 'Program successfully removed');
    }
}
