<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pest\Support\View;

class Mycontroller extends Controller
{
    public function Display(){
        return view('raj');
    }
}
