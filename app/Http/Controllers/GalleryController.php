<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
   public function index()
    {
        $images = Gallery::all();
        return view('admin.gallery_index', compact('images'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
                $path = $image->store('gallery', 'public'); // saves in storage/app/public/gallery
                Gallery::create(['image_path' => $path]);
            }
        }

        return redirect()->route('gallery.index')->with('success','Images Uploaded Successfully');
    }

    public function destroy(Gallery $gallery)
    {
        if(Storage::disk('public')->exists($gallery->image_path)) {
            Storage::disk('public')->delete($gallery->image_path);
        }
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success','Image Deleted Successfully');
    }
}
