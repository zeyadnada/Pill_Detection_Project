<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetectionController extends Controller
{
    public function index()
    {
        return view('user.detection.showUploadImage');
    }


    public function makeDetection()
    {
        //rest of code
        return view('user.detection.show');
    }

    public function contraindications()
    {
        //rest of code
        return view('user.detection.contraindications');
    }

    public function sideEffects()
    {
        //rest of code
        return view('user.detection.sideEffects');
    }

    public function dosage()
    {
        //rest of code
        return view('user.detection.dosage');
    }
}
