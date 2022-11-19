<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Autenticacao;



Route::get('/', [Autenticacao::class, 'index'])->name('homelogin');
Route::post('/login', [Autenticacao::class, 'authUser'])->name('login');
Route::get('/home', [Autenticacao::class, 'home'])->middleware('auth')->name('paginahome');
Route::get('/register', [Autenticacao::class, 'register'])->name('register');
Route::post('/registro', [Autenticacao::class, 'createUser'])->name('registerUser');

// Parte de middleware - OK
// Parte de verificação do email
// Parte de sessão
// https://laravel.com/docs/9.x/session

// Parte de lembrar do usuário
// redefinição de senha
// https://laravel.com/docs/9.x/authentication#login-throttling