<?php

namespace App\Http\Controllers\Admin;

use App\Models\Album;
use App\Models\AlbumImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::where('status', 'active')->paginate(10);
        return view('Admin.Albums.index', compact('albums'));
    }

    public function create(){
        return view('Admin.Albums.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $album = Album::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('albums', 'public');

               AlbumImage::create([
                    'album_id' => $album->id,
                    'image_path' => $path,
                ]);
            }
        }

        // dd($request);

        return redirect()->back()->with('success', 'Album created!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $album = Album::findOrFail($id);
        $album->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Handle new images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('albums', 'public');

                AlbumImage::create([
                    'album_id' => $album->id,
                    'image_path' => $path,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Album updated!');
    }


    public function updateImage(Request $request, $imageId)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        // dd($request);
        $albumImage = AlbumImage::findOrFail($imageId);
//
        // dd($albumImage);
        // Delete old image file
        if ($albumImage->image_path && Storage::disk('public')->exists($albumImage->image_path)) {
            Storage::disk('public')->delete($albumImage->image_path);
        }

        // Store new image
        $path = $request->file('image')->store('albums', 'public');
        $albumImage->update([
            'image_path' => $path,
        ]);

        return redirect()->back()->with('success', 'Image updated!');
    }
    public function edit($id){
        $album = Album::with('images')->findOrFail($id);
        return view('Admin.Albums.edit',compact('album'));
    }
    public function deleteImage($id)
{
    $image = AlbumImage::findOrFail($id);

    // Delete from storage
    Storage::disk('public')->delete($image->image_path);

    $image->delete();

    return back()->with('success', 'Image deleted.');
}
public function destroy($id){
    $album = Album::with('images')->findOrFail($id);

    // Delete all images from storage and database
    foreach ($album->images as $image) {
        if ($image->image_path && Storage::disk('public')->exists($image->image_path)) {
            Storage::disk('public')->delete($image->image_path);
        }
        $image->delete();
    }

    // Delete the album itself
    $album->delete();

    return redirect()->back()->with('success', 'Album deleted!');
}

}
