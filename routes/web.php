<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Rute ke homepage
Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

// Rute ke halaman about
Route::get('/about', function () {
    return view('about', [
        'name' => 'Hafiz Arul',
        'email' => 'hafizarul187@gmail.com',
        'title' => 'About Page'
    ]);
});

// Rute ke halaman /blog berisi 2 artikel, judul, dan isi
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

// Rute ke halaman /contact berisi email dan social media
Route::get('/contact', function () {
    return view('contact', [
        'name' => 'Hafiz Arul',
        'email' => 'hafizarul187@gmail.com',
        'socialMedia' => 'https://instagram.com/rul_zaky',
        'title' => 'Contact Page'
    ]);
});
