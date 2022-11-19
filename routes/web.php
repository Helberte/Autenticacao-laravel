<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Autenticacao;



Route::get('/', [Autenticacao::class, 'index'])->name('homelogin');
Route::post('/login', [Autenticacao::class, 'authUser'])->name('login');
Route::get('/home', [Autenticacao::class, 'home'])->middleware('auth');
Route::get('/register', [Autenticacao::class, 'register'])->name('register');
Route::post('/registro', [Autenticacao::class, 'createUser'])->name('registerUser');