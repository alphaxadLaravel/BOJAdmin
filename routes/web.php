<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficialWordController;


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

// Create official Words
Route::post('/add_official_word', [OfficialWordController::class, 'addOfficialWord']);

// View all Official words
Route::get('/all_official_words', [OfficialWordController::class, 'allOfficialWords']);

// Delete the official word here
Route::get('/delete_official_word/{}', [OfficialWordController::class, 'deleteOfficialWord']);

// Login Route here
Route::get('/', function () {
    return view('index');
});

// Dashboard Route here
Route::get('/dashboard', function () {
    return view('dashboard');
});

// add Announcement
Route::get('/add_announcement', function () {
    return view('add_announcement');
});

// All Announcements
Route::get('/all_announcements', function () {
    return view('announcement');
});

// Add banner
Route::get('/add_banner', function () {
    return view('add_banner');
});

// Banners
Route::get('/banners', function () {
    return view('banners');
});

// summary
Route::get('/summary', function () {
    return view('summary');
});

//add_summary
Route::get('/add_summary', function () {
    return view('add_summary');
});

// Special word
Route::get('/special_word', function () {
    return view('special_word');
});

// Offiial word
Route::get('/official_word', function () {
    return view('official_word');
});

// add special word
Route::get('/add_special_word', function () {
    return view('add_special_word');
});

// add official word
Route::get('/add_official_word', function () {
    return view('add_official_word');
});