<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard-page', function () {
    return view('admin.beranda');
});
Route::get('/school-page', function () {
    return view('admin.school');
});
Route::get('/industri-page', function () {
    return view('admin.industri');
});
Route::get('/teacher-page', function () {
    return view('admin.teacher');
});
Route::get('/advisor-page', function () {
    return view('admin.advisor');
});
Route::get('/student-page', function () {
    return view('admin.student');
});
Route::get('/add-school', function () {
    return view('admin.add-school');
});

// Route::get('/admin-page',[Controller::class,'admin']);
