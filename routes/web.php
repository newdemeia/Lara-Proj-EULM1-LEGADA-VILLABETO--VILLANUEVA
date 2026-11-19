<?php

use Illuminate\Support\Facades\Route;

// Member 3 - Villanueva (Contact)
Route::get('/contact', function () {
    return view('contact');
});