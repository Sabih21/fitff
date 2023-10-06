<?php

namespace App\Http\Controllers;

use App\Models\V1\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::all();
        return view('classes.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required|max:255',
            'duration' => 'required',
            'description' => 'required',
            'price' => 'required',
            'rating' ,
          ]);
          Classes::create($request->all());
          return redirect()->route('classes.index')
            ->with('success', 'Classes created successfully.');
        }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $classes = Classes::find($id);
        return view('classes.edit' ,compact($classes));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'duration' => 'required',
            'description' => 'required',
            'price' => 'required',
          ]);
          $classes = Classes::find($id);
          $classes->update($request->all());
          return redirect()->route('classes.index')
            ->with('success', 'Classes updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classes = Classes::find($id);
        $classes->delete();
        return redirect()->route('classes.index')
        ->with('success','Class deleted Sucessfully');
    }
}
