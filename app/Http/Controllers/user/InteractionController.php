<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InteractionController extends Controller
{
    public function index()
    {
        return view('user.interaction.index');
    }


    public function makeInteraction()
    {
        return view('user.interaction.show');
    }
}
