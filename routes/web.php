<?php

use Illuminate\Support\Facades\Route;

//THEME İNDEX
Route::get('/', function () {
    return view('theme.front.index');
});

//THEME ADMİN
Route::get('/admin', function (){ return view('theme.admin.index');
})->name('admin');

//THEME ADMİN REGİSTER
Route::get('/admin/kayit-ol', function (){ return view('theme.admin.admin_page.auth.register');
})->name('admin_register');

Route::post('/admin/kayit-ol', [App\Http\Controllers\User_Controller::class, 'User_controller'])
    ->name('user_register');
