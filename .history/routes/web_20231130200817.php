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
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;

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
Route::get('/ppdbs', [PageController::class, 'ppdb'])->name('ppdb');
Route::get('/prestasi', [PageController::class, 'prestasi'])->name('prestasi');



Route::get('/dashboard', function () {
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

	// Route::get('/admin-management', [UserController::class, 'index'])->name('admin-management');
	// Route::get('/admin-management/create', [UserController::class, 'create'])->name('admin-management.create');
	// Route::post('/admin-management', [UserController::class, 'store'])->name('admin-management.perform');
	// Route::delete('/admin-management/{id}', [UserController::class, 'destroy'])->name('admin-management.destroy');

	// Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
	// Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
	// Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.perform');
	Route::resource('portfolio', PortfolioController::class);
	Route::resource('portfolio', PortfolioController::class);
	Route::resource('kegiatan', KegiatanController::class);
	Route::resource('page-prestasi', PrestasiController::class);

	Route::get('/virtual-reality', [AdminPageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [AdminPageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [AdminPageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [AdminPageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [AdminPageController::class, 'signup'])->name('sign-up-static'); 
	Route::get('/{page}', [AdminPageController::class, 'index'])->name('page');
	Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); 
});
