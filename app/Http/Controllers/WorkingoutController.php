<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\V1\Workouts;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class WorkingoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workouts = Workouts::latest()->paginate(5);
        
        return view('Workouts.index',compact('workouts'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('workouts.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {

        dd($request->all());
        $request->validate([
            'name' => 'required',
            // 'detail' => 'required',
        ]);
        
        Workouts::create($request->all());
         
        return redirect()->route('workouts.index')
                        ->with('success','Workout created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workouts $workout): View
    {
        
        return view('workouts.edit',compact('workout'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workouts $workouts):RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            // 'detail' => 'required',
        ]);
        
        $workouts->update($request->all());
        
        return redirect()->route('workouts.index')
                        ->with('success','Workouts updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workouts $workouts): RedirectResponse
    {
        $workouts->delete();
        return redirect()->route('workouts.index')->with('sucess' , 'workouts deleted sucessfully');
    }
}
