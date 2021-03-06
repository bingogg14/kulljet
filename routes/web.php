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


Route::get('/', function () {return view('pages.index.index');})->name('home');
Route::get('/about', function () {return view('pages.about.index');})->name('about');
Route::get('/contacts', function () {return view('pages.contacts.index');})->name('contacts');
Route::get('/charters', function () {return view('pages.charters.index');})->name('charters');


//Route::get('/sales/aircraft/p-750-xstol', function () {return view('pages.charters.index');})->name('p750');
//Todo: change on var in cnc item in database
Route::get('/sales/aircraft/p-750-xstol', function () {return view('pages.aircrafts.p750.index');})->name('p750');
