<?php

// use Illuminate\Support\Facades\Route;


// use Illuminate\Routing\Route;

use App\Http\Controllers\CsvFile;
use App\textReg;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;


use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
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
// Route::get('/', '@index')->name('home');

Auth::routes();

// admin login
Route::get('/admin/login', 'AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'AdminLoginController@login')->name('admin.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashbord');




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

// Route::delete('/text/{id}','TextController@destroy');
Route::match(['get', 'delete'], '/text/{id}', 'TextController@destroy');



// import data from excel

// Route::get('/text' , 'TextsController@index');

// Route::get('/text/import' , 'TextsController@import');

// Route::post('/text/import' , 'TextsController@store');



// Route::get('/text_reg', 'text_regController@index');
// Route::post('/text_reg/import', 'text_regController@import');

// Route::get('csv_file','CsvFile@index');
Route::get('csv_file/export','CsvFile@csv_export')->name('export');
// Route::post('/import','CsvFile@csv_import')->name('import');

Route::match(['get', 'post'], '/import', 'CsvFile@csv_import')->name('import');

Route::get('/csv_file', function () {
	$data = textReg::paginate(500);
    return view('csv_pagi')->withData($data);
});


Route::any('/csv_file/search',function(){
	$q = (Input::get('q'));
	if($q != ''){
		$data =textReg::where('theme','like','%'.$q.'%')->orWhere('soustheme','like','%'.$q.'%')->paginate(500)->setpath('');
		$data->appends(array(
           'q' => Input::get('q'),
		));
		if(count($data)>0){
			return view('csv_pagi')->withData($data);
		}
		return view('csv_pagi')->withMessage("No Results Found!");
	}
});

// Route::get('/')
// gestion des alerts



Route::get('/alert' , 'AlertController@index');

Route::get('/alert/create' , 'AlertController@create');

Route::post('/alert' , 'AlertController@store');

Route::get('/alert/{id}/edit' , 'AlertController@edit');

Route::put('/alert/{id}','AlertController@update');

Route::delete('/alert/{id}','AlertController@destroy');


Route::get('/user' , 'UserController@index');

// Route::get('/user/{id}/edit' , 'UserController@edit');

Route::put('/user/{id}','UserController@update');

Route::delete('/user/{id}','UserController@destroy');

Route::match(['get', 'put'], '/user/{id}/edit', 'UserController@edit');
