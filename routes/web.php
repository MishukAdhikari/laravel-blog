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

use App\Task;

Route::get('/', function () {

	$tasks = DB::table('tasks')->get();

    return view('welcome', compact('tasks'));

});


Route::get('/tasks', function(){

	$tasks = Task::all();

	return view('tasks.index', compact('tasks'));

});


Route::get('/tasks/{id}', function($id){

	$tasks = Task::all()->find($id);

	return view('tasks.show', compact('tasks'));

});