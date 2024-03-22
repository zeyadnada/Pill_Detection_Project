<?php

namespace App\Http\Controllers;

use App\Http\Requests\SelectionRequest;
use App\Models\SideEffectsSelection;

class SideEffectsSelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sideEffects = SideEffectsSelection::paginate(20);
        return view('admin.settings.sideEffects',compact('sideEffects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( SelectionRequest $request)
    {
        $sideEffect= $request->all();
        SideEffectsSelection::create($sideEffect);
        return back()->with('success', 'You added a new SideEffect successfully!');    
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sideEffect =SideEffectsSelection::findOrFail($id);
        $sideEffect->delete();
        return redirect()->route('sideEffectsSelection.index')->with('success', 'You Delete Side Effect successfully!');
    }
}