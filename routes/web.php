<?php

use App\Livewire\App\Authentication\PageLogin;
use App\Livewire\App\Authentication\PageRegister;
use Illuminate\Support\Facades\Route;


Route::get("/login", PageLogin::class)->name("login");
Route::get("/register", PageRegister::class)->name("register");
