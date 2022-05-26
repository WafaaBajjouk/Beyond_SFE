<?php

// use Illuminate\Support\Facades\Route;


// use Illuminate\Routing\Route;

use App\Http\Controllers\CsvFile;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('/client/create');
});

// // premier param : nom de la route
// // 2eme param : callback = fct anonyme ou controller
// Route::get('/contact', function(){
//     echo "contact";
// });

// //pour un segement dynamique :

// Route::get('/contact/{name}', function($name){
//     echo "contact du " . $name;
// }) -> where ('name','[a-zA-Z]+');
// // In case name is not a String we should generate a NOT FOUND PAGE
// // [a-z]+ " expression regulaire qui presente tt les alphabets miniscules
// //[a-zA-Z]+ Miniscule et majuscule


// NB: We link a function(HOME) in the controoler(HomeController) with the root /home

// Route::get('/home', 'HomeController@home');

//pour utiliser les segements dynamique avec le route linker avec le controller
// Route::get('/home/{name}', 'HomeController@home');


//added autom

Route::get('/home', 'HomeController@index')->name('home');


// admin login
Route::get('/admin/login', [App\Http\Controllers\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashbord');




Route::get('/client' , 'ClientController@index');

Route::get('/client/create' , 'ClientController@create');

Route::post('/client' , 'ClientController@store');

Route::get('/client/{id}/edit' , 'ClientController@edit');

Route::put('/client/{id}','ClientController@update');

Route::delete('/client/{id}','ClientController@destroy');

// text routes

Route::get('/text','TextController@index');

Route::get('/text/create' , 'TextController@create')->name('upload.file');

Route::post('/text/create' , 'TextController@store');

Route::delete('/text/{id}','TextController@destroy');



// import data from excel

// Route::get('/text' , 'TextsController@index');

// Route::get('/text/import' , 'TextsController@import');

// Route::post('/text/import' , 'TextsController@store');



// Route::get('/text_reg', 'text_regController@index');
// Route::post('/text_reg/import', 'text_regController@import');

Route::get('csv_file','CsvFile@index');
Route::get('csv_file/export','CsvFile@csv_export')->name('export');
Route::post('csv_file/import','CsvFile@csv_import')->name('import');



// Route::get('/')
