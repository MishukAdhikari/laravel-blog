<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index () {

    	$mishuk = "Testing";

    	return view('about', compact('mishuk'));
    }
}
