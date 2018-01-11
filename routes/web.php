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
    return view('index');
});



Route::get('/adminme', function () {
    return view('admin.index');
});




Route::get('/adminme/product/', function () {
    return view('admin.products.index');
});

Route::post('/adminme/product/create', function () {
    return view('admin.products.create');
});


// Route::get('/adminme/pages/update', function () {
//     return view('admin.pages.update');
// });


Route::resource('/adminme/pages', 'PagesController');

// Route::get('/adminme/pages/{id}/edit', 'PagesController@edit');

//Route::post('/adminme/pages/create', 'PagesController@create');


