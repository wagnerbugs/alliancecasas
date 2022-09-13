<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SiteController;

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('site.index');
    Route::get('/sobre', 'sobre')->name('site.sobre');
    Route::get('/obras', 'obras')->name('site.obras');
    Route::get('/duvidas', 'duvidas')->name('site.duvidas');
    Route::get('/contato', 'contato')->name('site.contato');
    Route::get('/privacidade', 'privacidade')->name('site.privacidade');
    Route::get('/termos', 'termos')->name('site.termos');
    Route::get('/madeira-de-lei', 'madeira')->name('site.madeira');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
