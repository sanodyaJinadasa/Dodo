<?php

namespace App\Http\Controllers;

use App\Models\Teaching;
use Illuminate\Http\Request;

class TeachingController extends Controller
{
     public function index()
    {
        $teachings = Teaching::all();
        return view('admin.teachings_index', compact('teachings'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'level' => 'required',
            'course_name' => 'required',
        ]);

        Teaching::create($request->all());
        return redirect()->route('teachings.index')->with('success','Course Added Successfully');
    }



    public function destroy(Teaching $teaching)
    {
        $teaching->delete();
        return redirect()->route('teachings.index')->with('success','Course Deleted Successfully');
    }
}
