<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function(){
    $blogs = [
        [
            'title' => 'Blog Title 1',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'status' => 'active'
        ],
        [
            'title' => 'Blog Title 2',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'status' => 'completed'
        ],
        [
            'title' => 'Blog Title 3',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
            'status' => 'active'
        ]
    ];
    return view('home', compact('blogs'));
});

Route::get('about', function(){
    return view('about');
})->name('about');

Route::get('contact', function(){
    return view('contact');
});

