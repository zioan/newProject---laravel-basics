<?php

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

//route that sends back a view
Route::get('/', function () {
    return view('welcome');
});

//route to users - string
Route::get('users', function () {
    return "Welcome to the users page";
});

//route to users - Array (convertet automated to json)
Route::get("/users", function(){
    return ["PHP", "HTML", "Laravel"];
});

//route to users - JSON object
Route::get("/users", function(){
    return response()->json([
        'name' => 'Ioan',
        'age' => 35,
    ]);
});

//route to users - function
Route::get("/users", function(){
    return redirect('/');
});

//site.com == /
//site.com/users == /users
