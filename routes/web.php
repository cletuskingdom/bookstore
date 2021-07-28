<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Illuminate\Support\Facades\Request;

=======
use Illuminate\Http\Request;
>>>>>>> 91d9d8df24415d20d2a587d50304d0e7fbfec9b1
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
Route::post('/home', function(Request $req){
    return $req->all();
=======
Route::post('/home', function(Request $request){
    $name = $request->input('name');
    $description = $request->input('description');
    return "The name of the Book is ".$name. "<br> The description of the Book is ".$description;
>>>>>>> 91d9d8df24415d20d2a587d50304d0e7fbfec9b1
})->name('upload_book');