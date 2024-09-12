<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trains;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function treni(){
        return view('Train');
    }
}