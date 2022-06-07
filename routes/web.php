<?php

use App\Http\Livewire\Despesas;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Metas;
use App\Http\Livewire\Receitas;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/home', Home::class)->name('home');

Route::get('/receitas', Receitas::class)->name('receitas');

Route::get('/despesas', Despesas::class)->name('despesas');

Route::get('/login', Login::class)->name('login');

Route::get('/register', Register::class)->name('register');

// Route::get('/metas', Metas::class)->name('metas');