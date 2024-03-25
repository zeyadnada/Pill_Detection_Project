<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetectionController extends Controller
{
    public function index()
    {
        return view('user.detection.showUploadImage');
    }


    // if($request->hasFile('pillImage')){
    //     $pillImage=$request->file('pillImage');
    //     $response=Http::asForm()->post(
    //         'http://127.0.0.1:5000/detect',
    //         [
    //             'img'=>$pillImage,
    //         ]
    //         );
    //     $data=$response->json();
    //     dd($data);
    //     return view('user.detection.show');
    //}
    // public function makeDetection(Request $request)
    // {
    //     // dd($request->all());
    //     if ($request->hasFile('img')) {
    //         $img = $request->file('img');
    //         // dd($img);
    //         $imageContents = file_get_contents($img->path());
    //         $response = Http::asMultipart()->post('http://127.0.0.1:5000/detect', [
    //             'img' => $imageContents,
    //         ]);
    //         $data = $response->json();
    //         dd($data);
    //         return view('user.detection.show', ['data' => $data]);
    //     }
    // }
    public function makeDetection(Request $request)
    {
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $response = Http::attach(
                'img',
                file_get_contents($img->path()),
                $img->getClientOriginalName()
            )->post('http://127.0.0.1:5000/detect');
            if ($response->successful()) {
                $data = $response->json();
                dd($data);
                // return view('user.detection.show', ['data' => $data]);
            } else {
                // return response()->json(['error' => 'Error processing the request'], $response->status());
            }
        }
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
