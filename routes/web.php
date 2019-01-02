<?php

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
  if(Auth::check())
    return view('home');
  else
    return view('welcome');
});

Route::get('/myList', 'listController@getListFromUser')->middleware('auth');
Route::post('/createForm', 'listController@createForm')->middleware('auth');
Route::post('/list/remove', 'listController@removeAnime')->name('list.remove')->middleware('auth');
Route::post('/list/complete', 'listController@completeAnime')->name('list.complete')->middleware('auth');

Route::post('/list/setRecNum', 'AnimeRecommendationController@setRecNum')->name('list.setRecNum')->middleware('auth');
Route::post('/list/submit', 'listController@addAnime')->middleware('auth');
Route::post('/search/search', 'listController@getListFromAnotherUser')->name('search.search')->middleware('auth');

Route::get('/search', function () {
    return view('search');
});

Route::get('/search/user/{user}', function ($user) {
  $animes=session('animes');
  $user=session('user');
  if(Session::has('alert2')){
  $alert2=session('alert2');
  Session::reflash();
    return view('search')->with(['animes'=>$animes, 'alert2'=>$alert2, 'user'=>$user]);
  }else {
    Session::reflash();
    return view('searchUserList')->with(['animes'=>$animes, 'user'=>$user]);

  }

})->name('search.user');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
