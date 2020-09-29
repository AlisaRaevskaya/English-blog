<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function index(){
        return view('reg');
       }
}
