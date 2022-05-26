<?php

use App\Http\Livewire\Despesas\Index as IndexDespesas;
use App\Http\Livewire\Home\Index as Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Receitas\Index as IndexReceitas;
use App\Http\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::get('/home', Home::class)->name('dashboard.home');

Route::get('/despesas/index', IndexDespesas::class)->name('despesas.index');

Route::get('/receitas/index', IndexReceitas::class)->name('dashboard.receitas');

Route::get('/login', Login::class)->name('dashboard.login');

Route::get('/register', Register::class)->name('dashboard.register');
