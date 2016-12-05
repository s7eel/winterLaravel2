<?php

use App\Task;
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
    $tasks = Task::orderBy('created_at', 'asc')->get();
    
   return view('main', [
    'tasks' => $tasks
  ]);
});

Route::get('/news/{id}', function ($id) {
    $tasks = Task::where('id', '=', $id)->get();
//    var_dump($tasks);
//    exit();
   return view('main', [
    'tasks' => $tasks
  ]);
});