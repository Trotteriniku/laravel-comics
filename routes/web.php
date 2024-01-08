<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

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
    // $smallicons = config('smallicondb.smallicons');
    // $comics = config('comicsdb.comics');
    // return view('home', compact('comics', 'smallicons'));
    return to_route('comics.index');
})->name('home');


// Route::get('/comicshow/{id}', function ($id) {

//     $comics = config('comicsdb.comics');
//     $smallicons = config('smallicondb.smallicons');
//     return view('comics.show')
//         ->with('smallicons', $smallicons)
//         ->with('comics', $comics)
//         ->with('id', $id);
// })->name('comics.show');

Route::resource('comics', ComicController::class);

