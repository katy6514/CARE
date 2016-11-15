<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/animals', 'AnimalController@getIndex')->name('animals.index');
Route::get('/animals/create', 'AnimalController@getCreate')->name('animals.create');
Route::post('/animals', 'AnimalController@postStore')->name('animals.store');
Route::get('/animals/{id}', 'AnimalController@getShow')->name('animals.show');
Route::get('/animals/{id}/edit', 'AnimalController@getEdit')->name('animals.edit');
Route::put('/animals/{id}', 'AnimalController@putUpdate')->name('animals.update');
Route::delete('/animal/{id}', 'AnimalController@destroy')->name('animals.destroy');

Route::get('/debugbar', function() {
   $data = Array('foo' => 'bar');
   Debugbar::info($data);
   Debugbar::info('Current environment: '.App::environment());
   Debugbar::error('Error!');
   Debugbar::warning('Watch out…');
   Debugbar::addMessage('Another message', 'mylabel');

   return 'Just demoing some of the features of Debugbar';
});

# View Error Logs, only locally.
if(App::environment() == 'local'){
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

// if(App::environment('local')){
//
// }
