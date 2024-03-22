<?php

namespace App\Http\Controllers;

use App\Http\Requests\PillsInteractionRequest;
use App\Models\Pill;
use App\Models\PillsInteraction;
use Illuminate\Http\Request;

class PillsInteractionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interactions = PillsInteraction::paginate(15);
        return view('admin.interaction.index', compact('interactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pills = Pill::get();
        return view('admin.interaction.create', compact('pills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PillsInteractionRequest $request)
    {
        $pill_interaction = $request->all();
        PillsInteraction::create($pill_interaction);
        return redirect()->route('pillsInteraction.index')->with('success', 'You add new Pills interaction successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $interaction  = PillsInteraction::findOrFail($id);
        return view('admin.interaction.show', compact('interaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pills = Pill::get();
        $interaction = PillsInteraction::findOrFail($id);
        return view('admin.interaction.edit', compact('pills', 'interaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, PillsInteractionRequest $request)
    {

        $interaction = PillsInteraction::findOrFail($id);
        $interaction->update($request->all());
        return redirect()->route('pillsInteraction.index')->with('success', 'You Update The Interaction successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $interaction = PillsInteraction::findOrFail($id);
        $interaction->delete();
        return redirect()->route('pillsInteraction.index')->with('success', 'You Delete The Interaction successfully!');
    }
}
