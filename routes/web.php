<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Mycontroller;

Route::get('/', function () {
    return view('home');
});

Route::get('/home',fn()=> view('home'));
Route::get('/about/{name}',function($name){
    return view('about',compact('name'));// Here we use compact() to convert the $name variable (received from the URL parameter)
    // into an associative array ['name' => $name] and pass it to the view for rendering.
});
Route::view('/contactus','contactus');
// Route::get('/contact',fn()=>view('contact'));

Route::redirect('/error','/home');//redirect

//view shown by controller
Route::get('display',[Mycontroller::class,'Display']);

