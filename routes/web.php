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
    return view('landing.index');
})->name('beranda');

Route::get('/apoteker', function () {
    return view('page.apoteker');
})->name('apoteker');

Route::get('/artikel', function () {
    return view('page.artikel');
})->name('artikel');

Route::get('/tentangkami', function () {
    return view('page.about');
})->name('tentangkami');

Route::get('/kontak', function () {
    return view('page.contact');
})->name('kontak');

Route::get('/kebijakanprivasi', function () {
    return view('page.privacy');
})->name('kebijakanprivasi');

Route::get('/syaratketentuan', function () {
    return view('page.terms');
})->name('syaratketentuan');
