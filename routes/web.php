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
use Illuminate\Support\Facades\DB;

Route::get('/', 'HomeController\HomeController@index');
Route::get('/kontakt', 'HomeController\HomeController@kontakt');
Route::get('/admin', 'HomeController\HomeController@admin')->middleware('auth');

Route::get('/user/upgrade/{id}', function ($id) {
    DB::table('users')->where('id','=', $id)->update(['role'=>'admin']);
    return redirect('/admin');
})->middleware('auth');
Route::get('/user/downgrade/{id}', function ($id) {
    DB::table('users')->where('id', $id)->update(['role'=> 'user']);
    return redirect('/admin');
})->middleware('auth');

Route::get('consultants', 'ConsultantController\ConsultantController@index');
Route::get('consultant/{id}', 'ConsultantController\ConsultantController@details');
Route::get('consultants/create', 'ConsultantController\ConsultantController@create')->middleware('auth');
Route::get('consultants/edit/{id}','ConsultantController\ConsultantController@edit')->middleware('auth');
Route::post('consultants/post', 'ConsultantController\ConsultantController@post')->middleware('auth');
Route::put('consultants/update/{id}', 'ConsultantController\ConsultantController@update')->middleware('auth');
Route::delete('consultants/delete/{id}', 'ConsultantController\ConsultantController@delete')->middleware('auth');

Route::get('clients/create','ClientsController\ClientsController@create')->middleware('auth');;
Route::get('clients','ClientsController\ClientsController@index');
Route::get('clients/edit/{id}','ClientsController\ClientsController@edit')->middleware('auth');
Route::post('clients/post', 'ClientsController\ClientsController@post')->middleware('auth');
Route::put('clients/update/{id}', 'ClientsController\ClientsController@update')->middleware('auth');
Route::delete('clients/delete/{id}', 'ClientsController\ClientsController@delete')->middleware('auth');

Route::get('career', 'JobController\JobController@index');
Route::get('career/job', 'JobController\JobController@job');
Route::get('career/intership', 'JobController\JobController@intership');
Route::get('career/practice', 'JobController\JobController@practice');
Route::get('career/create', 'JobController\JobController@create')->middleware('auth');
Route::get('career/edit/{id}','JobController\JobController@edit')->middleware('auth');
Route::post('career/post', 'JobController\JobController@post')->middleware('auth');
Route::put('career/update/{id}', 'JobController\JobController@update')->middleware('auth');
Route::delete('career/delete/{id}', 'JobController\JobController@delete')->middleware('auth');

Route::get('news', 'NewsController\NewsController@index');
Route::get('news/news', 'NewsController\NewsController@news');
Route::get('news/prawne', 'NewsController\NewsController@prawne');
Route::get('news/prasa', 'NewsController\NewsController@prasa');
Route::get('news/media', 'NewsController\NewsController@media');
Route::get('news/gadzety', 'NewsController\NewsController@gadzety');
Route::get('news/uslugi', 'NewsController\NewsController@uslugi');
Route::get('news/doradztwo', 'NewsController\NewsController@doradztwo');
Route::get('news/strategia', 'NewsController\NewsController@strategia');
Route::get('news/bezpieczenstwo', 'NewsController\NewsController@bezpieczenstwo');
Route::get('news/szkolenia', 'NewsController\NewsController@szkolenia');
Route::get('news/pozostale', 'NewsController\NewsController@pozostale');
Route::get('news/create', 'NewsController\NewsController@create')->middleware('auth');
Route::get('news/edit/{id}','NewsController\NewsController@edit')->middleware('auth');
Route::post('news/post', 'NewsController\NewsController@post')->middleware('auth');
Route::put('news/update/{id}', 'NewsController\NewsController@update')->middleware('auth');
Route::get('news/delete/{id}', 'NewsController\NewsController@delete')->middleware('auth');

Route::get('ref','RefController@index');
Route::get('ref/create','RefController@create')->middleware('auth');
Route::get('ref/edit','RefController@edit')->middleware('auth');
Route::post('ref/post', 'RefController@post')->middleware('auth');
Route::put('ref/update/{id}', 'RefController@update')->middleware('auth');
Route::delete('ref/delete/{id}', 'RefController@delete')->middleware('auth');

/*
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});

<form method="POST" action="/profile">
    @csrf
    ...
</form>
*/
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'HomeController\HomeController@switchLang']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
