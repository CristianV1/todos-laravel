<?php

use App\Http\Controllers\TodosController;
use \Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
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
    return view('app');
});

Route::get("/todos-show/{id}",["uses"=>"TodosController@show"])->name("todos-show");

Route::post("/todos-edit/{id}",["uses"=>"TodosController@update"])->name("todos-edit");

Route::delete("/todos-destroy/{id}",["uses"=>"TodosController@destroy"]
)->name("todos-destroy");

Route::get('/todos', ["uses"=>"TodosController@index"])->name("todos");

Route::get('/todone', function () {
    return view("todos.todone");
});


Route::resource("categories","CategoriesController");

/*
Route::get('/categories', function () {
    return view('categories.index');
});*/

Route::post("/todos",["uses"=>"TodosController@store"])->name('todoes');

