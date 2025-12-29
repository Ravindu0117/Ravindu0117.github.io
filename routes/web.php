<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::view('/', 'index')->name('index');

Route::view('/about', 'about')->name('about');

Route::view('/portfolio', 'portfolio')->name('portfolio');

Route::view('/services', 'services')->name('services');

Route::view('/blog', 'blog')->name(name: 'blog');

Route::view('/blog-details', 'blog-details')->name('blog.details');

Route::view('/contact', 'contact')->name(name: 'contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');



