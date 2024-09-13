<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trains;

class PageController extends Controller
{
    public function index(){
        $trains= trains::whereYear('departure_day',[2024])->orderby('id')->get();

        return view('home',compact('trains'));
    }

    public function treni($id){
        $train=trains::find($id);
        return view('Train',compact('train'));
    }

    public function treni_in_partenza(){
    $holiday_trains= trains::whereDate('departure_day', '>=' ,today())->get();
        return view('home',compact('holiday_trains'));
    }
}