<?php

namespace App\Http\Controllers;

use App\Http\Requests\PillRequest;
use App\Http\traits\media;
use App\Models\ContraindicationsSelection;
use App\Models\Pill;
use App\Models\SideEffectsSelection;
use Illuminate\Http\Request;

class PillController extends Controller
{
    use media;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pills = Pill::paginate(20);
        return view('admin.Pills.index', compact('pills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sideEffects = SideEffectsSelection::get();
        $contraindications = ContraindicationsSelection::get();
        return view('admin.Pills.create', compact('sideEffects', 'contraindications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PillRequest $request)
    {
        dd($request->all());
        $data = $request->except(['photo', 'contraindication', 'side_effect', 'dosage']);
        if ($request->has('photo')) {
            $imageName = $this->uploadImage($request->photo, '/pills');
            $data['photo'] = $imageName;
        }
        $pill = Pill::create($data);

        if ($request->has('contraindication')) {
            $contraindicationsData = [];
            foreach ($request->input('contraindication') as $contraindication) {
                $contraindicationsData[] = ['contraindication' => $contraindication];
            }
            $pill->contraindications()->createMany($contraindicationsData);
        }
        if ($request->has('side_effect')) {
            $sideEffectsData = [];
            foreach ($request->input('side_effect') as $sideEffect) {
                $sideEffectsData[] = ['side_effect' => $sideEffect];
            }
            $pill->sideEffects()->createMany($sideEffectsData);
        }

        if ($request->has('dosage')) {
            $dosages = explode(',', $request->input('dosage'));
            $dosagesData = [];
            foreach ($dosages as $dosage) {
                $dosagesData[] = ['dosage' => $dosage];
            }
            $pill->dosages()->createMany($dosagesData);
        }

        return redirect()->route('pill.index')->with('success', 'You add new Pill successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Pill $pill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pill = Pill::findOrFail($id);
        $sideEffects = SideEffectsSelection::get();
        $contraindications = ContraindicationsSelection::get();
        return view('admin.Pills.edit',compact('pill','sideEffects','contraindications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pill $pill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pill = Pill::findOrfail($id);
        $imageName = $pill->photo;
        if ($imageName) {
            $photoPath = public_path('images/pill/') . $imageName;
            $this->deletePhoto($photoPath);
        }
        $pill->delete();
        return redirect()->route('pill.index')->with('success', 'You Delete Pill successfully!');
    }
}