<?php

namespace App\Http\Controllers;

use App\Http\Requests\SelectionRequest;
use App\Models\ContraindicationsSelection;

class ContraindicationsSelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contraindications = ContraindicationsSelection::paginate(20);
        return view('admin.settings.contraindications', compact('contraindications'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(SelectionRequest $request)
    {
        $contraindication = $request->all();
        ContraindicationsSelection::create($contraindication);
        return back()->with('success', 'You added a new contraindication successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contraindication = ContraindicationsSelection::findOrFail($id);
        $contraindication->delete();
        return redirect()->route('contraindicationsSelection.index')->with('success', 'You Delete Contraindication successfully!');
    }
}