<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AUthController;

route::get('/', [AUthController::class, 'Landing'])->name('Landing.index');
route::get('/Travel/about', [AUthController::class, 'about'])->name('about.index');
route::get('/Travel/book', [AUthController::class, 'book'])->name('book.index');
route::post('/book', [AUthController::class, 'booking'])->name('book.store');
route::get('/Travel/package', [AUthController::class, 'package'])->name('package.index');
route::get('/Travel/login', [AUthController::class, 'Login'])->name('Login.index');
route::post('/login', [AUthController::class, 'LoginPost'])->name('Login.post');
route::get('/Travel/Signup', [AUthController::class, 'Signup'])->name('Signup.index');
route::post('/Signup', [AUthController::class, 'SignupPost'])->name('Signup.post');
route::get('/logout', [AUthController::class, 'logout'])->name('logout.index');
