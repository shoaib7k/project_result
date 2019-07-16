<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/*Route::get('pdfview',array('as'=>'pdfview','uses'=>'MarkEntryController@pdfview'))->name('pdfview');*/

Route::get('pdfview',array('as'=>'pdfview','uses'=>'MarkEntryController@pdfview'));

Route::resource('student_reg','StudentRegController');

Route::get('table_add_column/{student_registrations}/{c}', 'DatabaseTableController@addColumn');

Route::resource('student_result','StudentResultController');

Route::resource('course','CourseController');
Route::resource('mark_entry','MarkEntryController');

//Route::get('/','PrintController@index');
//Route::get('/print','PrintController@printPreview');
//Route::get('product/printPreview','ProductController@printPreview');
Route::resource('/printm','MarkEntryController@printPreview');



