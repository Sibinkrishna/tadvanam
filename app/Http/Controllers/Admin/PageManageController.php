<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PageManageController extends Controller
{
    public function index() {
        $pages = DB::table('page_manages')->paginate();
        return view('Admin.PageManage.index', compact('pages'));
    }

    public function create() {
        return view('Admin.PageManage.create');
    }

       public function store(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status'   => 'required|in:active,inactive',
            ]);

            $images = [];

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('images', 'public');
                    $images[] = $path;
                }
            }

            $pageId = DB::table('page_manages')->insertGetId([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'images' => json_encode($images),
                'status' => $request->input('status'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('admin.page-manage.edit', $pageId)->with('success', 'Page successfully created!');
        }
         public function edit($id) {
            $page = DB::table('page_manages')->where('id', $id)->first();
            if (!$page) {
                abort(404);
            }
            return view('Admin.PageManage.edit', compact('page'));
        }
        public function update(Request $request, $id)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'nullable|string',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status'   => 'required|in:active,inactive',
            ]);

            $page = DB::table('page_manages')->where('id', $id)->first();
            $images = [];

            if ($page && $page->images) {
                $images = json_decode($page->images, true);
            }

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('images', 'public');
                    $images[] = $path;
                }
            }
            DB::table('page_manages')->where('id', $id)->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'images' => json_encode($images),
                'status' => $request->input('status'),
                'updated_at' => now()
            ]);

            return redirect()->back()->with('success', 'Page updated successfully!');
        }
        public function removeImage(Request $request, $id)
        {
            $imagePath = $request->input('image'); // The path you want to delete

            $page = DB::table('page_manages')->where('id', $id)->first();

            if ($page && $page->images) {
                $images = json_decode($page->images, true);
                $images = array_filter($images, function ($img) use ($imagePath) {
                    return $img !== $imagePath;
                });

                DB::table('page_manages')->where('id', $id)->update([
                    'images' => json_encode(array_values($images)),
                    'updated_at' => now()
                ]);
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->back()->with('success', 'Image removed successfully!');
        }

        public function destroy($id) {
            $page = DB::table('page_manages')->where('id', $id)->first();
            if ($page && $page->images) {
                $images = json_decode($page->images, true);
                if (is_array($images)) {
                    foreach ($images as $imagePath) {
                        Storage::disk('public')->delete($imagePath);
                    }
                }
            }
            DB::table('page_manages')->where('id', $id)->delete();
            return redirect()->route('admin.page-manage.index')->with('success', 'Page deleted successfully.');
        }
}
