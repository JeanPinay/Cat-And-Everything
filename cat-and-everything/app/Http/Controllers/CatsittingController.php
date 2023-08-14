<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatsittingController extends Controller
{
    public function showCatsitting(){
        return view('catsitting.cat');
    }
}
