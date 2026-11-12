<?php

use App\Livewire\HomePage;
use App\Livewire\MenuPage;
use App\Support\MenuCatalog;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', HomePage::class)->name('home');
Route::get('/cardapio', MenuPage::class)->name('menu');

Route::get('/login', function () {
    return Auth::check()
        ? redirect()->route('admin')
        : redirect()->route('home');
})->name('login');

Route::get('/admin', function () {
    return view('admin', ['dishes' => MenuCatalog::all()]);
})->middleware('auth')->name('admin');

Route::view('/admin/pagamentos', 'admin.payments')
    ->middleware('auth')
    ->name('admin.payments');

Route::post('/logout', function () {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('home');
})->middleware('auth')->name('logout');
