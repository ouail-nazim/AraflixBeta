<?php

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

Route::get('/', 'HomeController@index');
Route::get('/movies', 'HomeController@movies');
Route::get('/movies/{name}', 'HomeController@watcheMovies');

Route::get('/tvShow', 'HomeController@tvShow');
Route::get('/tvShow/{name}', 'HomeController@getTvShow');
Route::get('/tvShow/{name}/season{s}/episode{ep}', 'HomeController@watcheTvShow');

Route::get('/anime', function () {

    return view('Lyouts.anime.anime');
});


Route::get('/test', function () {

    $shows=factory(App\Show::class, 10)->make();
    foreach ($shows as $show){
        $show->save();
    }
    $episodes=factory(App\Episode::class, 10)->make();
    foreach ($episodes as $episode){
        $episode->save();
    }
    dump('done');
});
