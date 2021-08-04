<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::post('/home', function(Request $request){
    $book_cover_path = $request->file('book_cover')->store('book_covers');

    DB::table('books')->insert([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'user_id' => Auth::id(),
        'book_cover' => $book_cover_path
    ]);
    
    return redirect()->back()->with('status', 'Book uploaded successfully!');;
})->name('upload_book');
