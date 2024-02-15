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

use App\Http\Controllers\KategoriPostinganContoller;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KategoriGaleriController;

use App\Http\Controllers\KatalogTalentaController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SiswaController;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/kegiatan', [PageController::class, 'kegiatan'])->name('kegiatan');
Route::get('/galeriFoto', [PageController::class, 'galeriFoto'])->name('galeriFoto');
Route::get('/galeriFoto', [PageController::class, 'galeribykategori']);
Route::get('/talent', [PageController::class, 'talent'])->name('talent');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/donasi', [PageController::class, 'donasi'])->name('donasi');
Route::get('/mitra', [PageController::class, 'mitra'])->name('mitra');
// Route::get('/berita', [PageController::class, 'berita'])->name('berita');
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

	Route::group(['middleware' => 'checkRole:admin'], function () {

		Route::resource('admin-management', UserController::class);
		Route::resource('admin-portfolio', PortfolioController::class);

		// Siswa
		Route::get('admin-Siswa', [SiswaController::class, 'index']);
		Route::get('admin-Siswa/create', [SiswaController::class, 'create']);
		Route::post('admin-Siswa', [SiswaController::class, 'store'])->name('Siswa.store');
		Route::put('admin-Siswa/{id}', [SiswaController::class, 'update']);
		Route::get('admin-Siswa/{id}/edit', [SiswaController::class, 'edit']);
		Route::get('singleSiswa/{id}', [SiswaController::class, 'show']);
		Route::delete('admin-Siswa/{id}', [SiswaController::class, 'destroy']);

		// Kategori Postingan
		Route::get('/kategori-postingan', [KategoriPostinganContoller::class, 'kategoriPostingan'])->name('kategori-postingan');
		Route::post('/kategori-postingan', [KategoriPostinganContoller::class, 'store'])->name('kategori-store');
		Route::get('/kategori-postingan/{id}', [KategoriPostinganContoller::class, 'show']);
		Route::delete('/kategori-postingan/{id}/delete', [KategoriPostinganContoller::class, 'destroy'])->name('kategori-destroy');
		Route::get('/kategori-galeri/{id}', [KategoriGaleriController::class, 'show']);

		// Kategori Galeri
		Route::get('/kategori-galeri', [KategoriGaleriController::class, 'kategorigaleri'])->name('kategori-galeri');
		Route::post('/kategori-galeri', [KategoriGaleriController::class, 'store'])->name('kategori-galeri-store');
		Route::delete('/kategori-galeri/{id}/delete', [KategoriGaleriController::class, 'destroy'])->name('kategori-galeri-destroy');

		// Galeri
		Route::get('/create-galeri', [GaleriController::class, 'galeri'])->name('create-galeri');
		Route::post('/create-galeri', [GaleriController::class, 'store'])->name('create-galeri-store');
		Route::put('/create-galeri/{id}/edit', [GaleriController::class, 'edit'])->name('create-galeri-edit');
		Route::delete('/create-galeri/{id}/delete', [GaleriController::class, 'destroy'])->name('create-galeri-destroy');

		Route::get('/{page}', [AdminPageController::class, 'index'])->name('page');
		Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
	});

	Route::group(['middleware' => 'checkRole:siswa'], function () {
		// Catalog Talent
		Route::get('admin-katalogtalenta', [KatalogTalentaController::class, 'index']);
		Route::get('admin-katalogtalenta/create', [KatalogTalentaController::class, 'create']);
		Route::post('admin-katalogtalenta', [KatalogTalentaController::class, 'store'])->name('katalogtalenta.store');
		Route::put('admin-katalogtalenta/{id}', [KatalogTalentaController::class, 'update']);
		Route::get('admin-katalogtalenta/{id}/edit', [KatalogTalentaController::class, 'edit']);
		Route::get('singleTalent/{id}', [KatalogTalentaController::class, 'show']);
		Route::delete('admin-katalogtalenta/{id}', [KatalogTalentaController::class, 'destroy']);

		Route::get('/{page}',
			[AdminPageController::class, 'index']
		)->name('page');
		Route::post('/logout',
			[LoginController::class, 'logout']
		)->name('logout');
	});
});
