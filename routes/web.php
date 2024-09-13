<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    $title = 'Layout base - HOME';
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo modi, iusto dolore eaque laudantium optio, adipisci perspiciatis voluptate obcaecati sit perferendis natus velit ut! Tempora voluptatum ipsam modi rem voluptas.';
    return view('home', compact('text', 'title'));
})->name('home'); */

Route::get('/',[PageController::class,'index'])->name('home');
Route::get('/treni/{id}',[PageController::class,'treni'])->name('train');
Route::get('/partenze',[PageController::class,'treni_in_partenza'])->name('partenze');