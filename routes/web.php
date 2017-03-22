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
    return view('index');
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

# Local Tools
if(App::environment('local')){
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('/drop', function(){
        DB::statement('DROP database CARE');
        DB::statement('CREATE database CARE');

        return 'Dropped CARE; created CARE';
    });
    Route::get('/debug', function() {

       echo '<pre>';

       echo '<h1>Environment</h1>';
       echo App::environment().'</h1>';

       echo '<h1>Debugging?</h1>';
       if(config('app.debug')) echo "Yes"; else echo "No";

       echo '<h1>Database Config</h1>';
       /*
       The following line will output your MySQL credentials.
       Uncomment it only if you're having a hard time connecting to the database and you
       need to confirm your credentials.
       When you're done debugging, comment it back out so you don't accidentally leave it
       running on your live server, making your credentials public.
       */
       //print_r(config('database.connections.mysql'));

       echo '<h1>Test Database Connection</h1>';
       try {
           $results = DB::select('SHOW DATABASES;');
           echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
           echo "<br><br>Your Databases:<br><br>";
           print_r($results);
       }
       catch (Exception $e) {
           echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
       }

       echo '</pre>';

    });
}
