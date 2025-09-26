<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function index()
    {
        $research = Research::all();
        return view('admin.research_index', compact('research'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'organization' => 'required',
        ]);

        Research::create($request->all());
        return redirect()->route('Aresearches.index')->with('success', 'Research Added Successfully');
    }



    public function destroy(Research $research, $id)
    {
        $research = Research::findOrFail($id);
        $research->delete();

        return redirect()->route('Aresearches.index')->with('success', 'Research Deleted Successfully');
    }
}
