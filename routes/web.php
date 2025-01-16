<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin/dashboard',['title'=>'Dashboard']);
});
Route::get('/siswa', function () {
    return view('admin/siswa',['title'=>'Siswa']);
});
Route::get('/about', function () {
    return view('about');
});
