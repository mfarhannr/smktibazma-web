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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;

use App\Http\Controllers\PPDBController;
use App\Http\Controllers\KatalogTalentaController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PrestasiController;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/kegiatan', [PageController::class, 'kegiatan'])->name('kegiatan');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
Route::get('/talent', [PageController::class, 'talent'])->name('talent');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/donasi', [PageController::class, 'donasi'])->name('donasi');
Route::get('/mitra', [PageController::class, 'mitra'])->name('mitra');
Route::get('/ppdb', [PageController::class, 'ppdb'])->name('ppdb');
Route::get('/prestasi', [PageController::class, 'prestasi'])->name('prestasi');


Route::get('/dashboard', function () {
	return redirect('/dashboard');
    return redirect('/dashboard');
})->middleware('auth');
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	Route::resource('admin-management', UserController::class);
	Route::resource('admin-portfolio', PortfolioController::class);
	Route::resource('admin-kegiatan', KegiatanController::class);
	Route::resource('admin-prestasi', PrestasiController::class);
    Route::resource('admin-ppdb', PPDBController::class);
    

    Route::get('admin-katalogtalenta', [KatalogTalentaController::class, 'index']);
    Route::get('katalogtalenta/create', [KatalogTalentaController::class, 'create']);
    Route::post('admin-katalogtalenta', [KatalogTalentaController::class, 'store'])->name('katalogtalenta.store');
    Route::put('katalogtalenta/{id}', [KatalogTalentaController::class, 'update']);
    Route::get('katalogtalenta/{id}/edit', [KatalogTalentaController::class, 'edit']);
    Route::get('singleTalent/{id}', [KatalogTalentaController::class, 'show']);

    Route::delete('katalogtalenta/{id}', [KatalogTalentaController::class, 'destroy']);

	Route::get('/create-postingan', [PostinganController::class, 'postingan'])->name('create-postingan');
	Route::post('/create-postingan', [PostinganController::class, 'store'])->name('create-postingan-store');
	Route::put('/create-postingan/{id}/edit', [PostinganController::class, 'edit'])->name('create-postingan-edit');
	Route::get('/singleBerita/{id}', [PostinganController::class, 'show'])->name('singleBerita');
	Route::delete('/create-postingan/{id}/delete', [PostinganController::class,'destroy'])->name('create-postingan-destroy');


    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('ppdb', PPDBController::class);
    Route::get('/{page}', [AdminPageController::class, 'index'])->name('page');
});
