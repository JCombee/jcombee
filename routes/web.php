<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home.index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    $article = \AloiaCms\Models\Article::find($slug);
    if (!$article) {
        return response('', 404);
    }
    return view('post', compact(['article']));
})->name('blog.show');

Route::get('/contact', function () {
    return view('contact');
})->name('contact.index');
