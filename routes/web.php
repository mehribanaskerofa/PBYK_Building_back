<?php


use App\Http\Controllers\Front\CardController;
use App\Http\Controllers\Front\ContactFrontController;
use Illuminate\Support\Facades\Route;

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

Route::get('/a', function () {
    return view('front.index');
})->name('home-index');


Route::post('contact-send',[ContactFrontController::class,'store'])->name('contact-send');
Route::get('cards',[CardController::class,'index'])->name('cards');
