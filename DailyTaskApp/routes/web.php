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
    return view('welcome');
});

Route::get('/tasks', function () {
    $data=App\Task::all();
    return view('tasks')->with('tasks',$data);
});

Route::post('/saveTask',
 'TaskController@store'

);

Route::get('/markascompleted/{id}','TaskController@updateTaskAsCompleted');

Route::get('/markasnotcompleted/{id}','TaskController@updateTaskAsNotCompleted');

Route::get('/deletetask/{id}','TaskController@deletetask');

Route::get('/updatetask/{id}','TaskController@updatetaskview');