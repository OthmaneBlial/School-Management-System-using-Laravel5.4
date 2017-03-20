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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');



/**
 * The Teacher routes
 */

Route::get('/teachers/create', 'TeacherController@create');
Route::get('/teachers', 'TeacherController@index');
Route::post('/teachers', 'TeacherController@store');
Route::get('/teachers/{teacher}', 'TeacherController@show');
Route::get('/teachers/edit/{teacher}', 'TeacherController@edit');
Route::post('/teachers/{teacher}', 'TeacherController@update');
Route::get('/teachers/delete/{teacher}', 'TeacherController@destroy');



Route::get('/teacherpage', 'TeacherPageController@index');
Route::get('/teacherpage/edit/{teacher}', 'TeacherPageController@edit');
Route::post('/teacherpage/{teacher}', 'TeacherPageController@update');




/**
 * The Student routes
 */

Route::get('/students/create', 'StudentController@create');
Route::get('/students', 'StudentController@index');
Route::post('/students', 'StudentController@store');
Route::get('/students/{student}', 'StudentController@show');
Route::get('/students/edit/{student}', 'StudentController@edit');
Route::post('/students/{student}', 'StudentController@update');
Route::get('/students/delete/{student}', 'StudentController@destroy');



Route::get('/studentpage', 'StudentPageController@index');
Route::get('/studentpage/edit/{student}', 'StudentPageController@edit');
Route::post('/studentpage/{student}', 'StudentPageController@update');



/**
 * The Classgroup routes
 */

Route::get('/classgroups/create', 'ClassgroupController@create');
Route::get('/classgroups', 'ClassgroupController@index');
Route::post('/classgroups', 'ClassgroupController@store');
Route::get('/classgroups/{classgroup}', 'ClassgroupController@show');
Route::get('/classgroups/edit/{classgroup}', 'ClassgroupController@edit');
Route::post('/classgroups/{classgroup}', 'ClassgroupController@update');
Route::get('/classgroups/delete/{classgroup}', 'ClassgroupController@destroy');



/**
 * The Classroom routes
 */

Route::get('/classrooms/create', 'ClassroomController@create');
Route::get('/classrooms', 'ClassroomController@index');
Route::post('/classrooms', 'ClassroomController@store');
Route::get('/classrooms/{classroom}', 'ClassroomController@show');
Route::get('/classrooms/edit/{classroom}', 'ClassroomController@edit');
Route::post('/classrooms/{classroom}', 'ClassroomController@update');
Route::get('/classrooms/delete/{classroom}', 'ClassroomController@destroy');

/**
 * The Level routes
 */

Route::get('/levels/create', 'LevelController@create');
Route::get('/levels', 'LevelController@index');
Route::post('/levels', 'LevelController@store');
Route::get('/levels/{level}', 'LevelController@show');
Route::get('/levels/edit/{level}', 'LevelController@edit');
Route::post('/levels/{level}', 'LevelController@update');
Route::get('/levels/delete/{level}', 'LevelController@destroy');

/**
 * The Subject routes
 */

Route::get('/subjects/create', 'SubjectController@create');
Route::get('/subjects', 'SubjectController@index');
Route::post('/subjects', 'SubjectController@store');
Route::get('/subjects/{subject}', 'SubjectController@show');
Route::get('/subjects/edit/{subject}', 'SubjectController@edit');
Route::post('/subjects/{subject}', 'SubjectController@update');
Route::get('/subjects/delete/{subject}', 'SubjectController@destroy');





