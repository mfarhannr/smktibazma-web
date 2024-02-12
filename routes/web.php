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

use App\Http\Controllers\KategoriPostinganContoller;
use App\Http\Controllers\PostinganController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KategoriGaleriController;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/kegiatan', [PageController::class, 'kegiatan'])->name('kegiatan');
Route::get('/galeriFoto', [PageController::class, 'galeriFoto'])->name('galeriFoto');
Route::get('/galeriFoto', [PageController::class, 'galeribykategori']);
Route::get('/talent', [PageController::class, 'talent'])->name('talent');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/donasi', [PageController::class, 'donasi'])->name('donasi');
Route::get('/mitra', [PageController::class, 'mitra'])->name('mitra');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/berita', [PageController::class, 'beritabykategori']);
Route::get('/singleBerita', [PageController::class, 'singleBerita'])->name('singleBerita');
Route::get('/ppdb', [PageController::class, 'ppdb'])->name('ppdb');


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

	Route::get('/admin-management', [UserController::class, 'index'])->name('admin-management');
	Route::get('/admin-management/create', [UserController::class, 'create'])->name('admin-management.create');
	Route::post('/admin-management', [UserController::class, 'store'])->name('admin-management.perform');
	Route::delete('/admin-management/{id}', [UserController::class, 'destroy'])->name('admin-management.destroy');

	// Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
	// Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
	// Route::post('/portfolio', [PortfolioController::class, 'store'])->name('portfolio.perform');

	Route::resource('portfolio', PortfolioController::class);

	Route::get('/virtual-reality', [AdminPageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [AdminPageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [AdminPageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [AdminPageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [AdminPageController::class, 'signup'])->name('sign-up-static');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');

	// Kategori Postingan
	Route::get('/kategori-postingan', [KategoriPostinganContoller::class, 'kategoriPostingan'])->name('kategori-postingan'); 
	Route::post('/kategori-postingan', [KategoriPostinganContoller::class, 'store'])->name('kategori-store');
	Route::get('/kategori-postingan/{id}', [KategoriPostinganContoller::class, 'show']);
	Route::delete('/kategori-postingan/{id}/delete', [KategoriPostinganContoller::class, 'destroy'])->name('kategori-destroy');

	// Postingan
	Route::get('/create-postingan', [PostinganController::class, 'postingan'])->name('create-postingan');
	Route::post('/create-postingan', [PostinganController::class, 'store'])->name('create-postingan-store');
	Route::put('/create-postingan/{id}/edit', [PostinganController::class, 'edit'])->name('create-postingan-edit');
	Route::get('/singleBerita/{id}', [PostinganController::class, 'show'])->name('singleBerita');
	Route::delete('/create-postingan/{id}/delete', [PostinganController::class,'destroy'])->name('create-postingan-destroy');

	// Kategori Galeri
	Route::get('/kategori-galeri', [KategoriGaleriController::class, 'kategorigaleri'])->name('kategori-galeri'); 
	Route::post('/kategori-galeri', [KategoriGaleriController::class, 'store'])->name('kategori-galeri-store');
	Route::get('/kategori-galeri/{id}', [KategoriGaleriController::class, 'show']);
	Route::delete('/kategori-galeri/{id}/delete', [KategoriGaleriController::class, 'destroy'])->name('kategori-galeri-destroy');

	// Galeri
	Route::get('/create-galeri', [GaleriController::class, 'galeri'])->name('create-galeri');
	Route::post('/create-galeri', [GaleriController::class, 'store'])->name('create-galeri-store');
	Route::put('/create-galeri/{id}/edit', [GaleriController::class, 'edit'])->name('create-galeri-edit');
	Route::delete('/create-galeri/{id}/delete', [GaleriController::class,'destroy'])->name('create-galeri-destroy');

	Route::get('/{page}', [AdminPageController::class, 'index'])->name('page');
	Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); 
});
