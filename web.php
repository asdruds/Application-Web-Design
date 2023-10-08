<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return ('Welcome :)');
});

//http://localhost/actividad7/public/courses
Route::get('/courses', function () {
    return ("Welcome to the courses.");
});

//http://localhost/actividad7/public/courses/Infraestructura
Route::get('/courses/course', function ($course) {
    return ("Welcome to the course: $course.");
});

//http://localhost/actividad7/public/courses/Infraestructura/Data
Route::get('/courses/course/category', function ($course,$category) {
    return ("Welcome to the course: $course, of the category: $category. ");
});
