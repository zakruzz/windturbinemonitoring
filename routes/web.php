<?php

use App\Http\Controllers\login;
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/tamplate', \App\Http\Livewire\RealTimePage::class)->name('real-time2');
Route::get('/history', \App\Http\Livewire\HistoryPage::class)->name('history');
Route::get('/contact2', \App\Http\Livewire\ContactPage::class)->name('contact');

Route::get('/', \App\Http\Livewire\Tamplate::class)->name('dashboard');
Route::get('/real-time', \App\Http\Livewire\RealTime::class)->name('real-time');
Route::get('/graph', \App\Http\Livewire\GraphicPage::class)->name('graph');
Route::get('/contact', \App\Http\Livewire\ContactPage2::class)->name('contact');

Route::get('/login', [login::class, 'Index'])->name('login')->middleware('guest');
Route::post('/Auth', [login::class, 'authenticate'])->name('Auth');
Route::get('/logout', [login::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/record', \App\Http\Livewire\Record::class)->name('record')->middleware('auth');
