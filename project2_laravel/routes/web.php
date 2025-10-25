<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        'nama' => 'Muna Fatinah Atiqoh',
        'hobbies' => ['Main Genshin Impact', 'Mendengarkan Lagu', 'Membaca Webtoon']
    ]);
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/profile/{name?}', function ($name = null) {
    return view('profile', ['name' => $name]);
});
