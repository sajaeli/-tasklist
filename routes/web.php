<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/about', function () {
//     $name = 'test';
//     $age  = '40';
//     return view('about', compact('name', 'age'));
// });

// Route::post('/send', function (Request $request) {
//     $name = $request->myname;
//     return view('about', compact('name'));
// });

// Route::get('/tasks', function () {
//     $tasks = [
//         'first-task'  => 'task 1',
//         'second-task' => 'task 2',
//         'third-task'  => 'task 3',
//     ];
//     return view('tasks', compact('tasks'));
// });

// Route::get('/show/{id}', function ($id) {
//     $tasks = [
//         'first-task'  => 'task 1',
//         'second-task' => 'task 2',
//         'third-task'  => 'task 3',
//     ];
//     $task = $tasks[$id];
//     return view('show', compact('task'));
// });


Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->get();
    // dd($tasks);
    return view('tasks', compact('tasks'));
});

Route::get('tasks/show/{id}', function ($id) {
    // $task = DB::table('tasks')->where('id',$id)->first();
    $task = DB::table('tasks')->find($id);
    // dd($task);
    return view('show', compact('task'));
});
