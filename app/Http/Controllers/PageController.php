<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trains;

class PageController extends Controller
{
    public function index(){
        $trains= trains::whereYear('giorno_di_partenza',[2024])->orderby('giorno_di_partenza')->get();
        $train=[];
        return view('home',compact('trains','train'));
    }

    public function treni($id){
        $train=trains::find($id);
        return view('Train',compact('train'));
    }

    public function treni_in_partenza(){
    $train= trains::whereDate('giorno_di_partenza',today())->first();

        return view('home',compact('train'));
    }
}