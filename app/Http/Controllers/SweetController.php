<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SweetController extends Controller
{
    public function getIndex() {
    	$sweets = \App\Sweet::all();

    	return view('home', ['sweets' => $sweets]);
    }

}
