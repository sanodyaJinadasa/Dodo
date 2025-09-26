<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
   public function index()
    {
        $publications = Publication::all();
        return view('admin.publication_index', compact('publications'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'authors' => 'required',
            'year' => 'required',
            'title' => 'required',
        ]);

        Publication::create($request->all());
        return redirect()->route('Apublications.index')->with('success','Publication Added Successfully');
    }


    public function destroy(Publication $publication, $id)
    {
         $publication = Publication::findOrFail($id);
        $publication->delete();
        return redirect()->route('Apublications.index')->with('success','Publication Deleted Successfully');
    }
}
