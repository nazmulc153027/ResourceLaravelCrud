<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItenController extends Controller
{
    public function additem(){
        return view('add-item');
    }
}
