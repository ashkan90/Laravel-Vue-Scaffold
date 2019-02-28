<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DisplaySPAController extends Controller
{
    public function displaySpa(){
    	return view('layouts.admin');
    }
}
