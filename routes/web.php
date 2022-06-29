<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AnnouncementsController;
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

Route::get('/', DashboardController::class)->name('dash');

Route::middleware('guest')->group(function () {

    Route::get('/kegiatan', [PostsController::class, 'index'])->name('post.index');
    Route::get('/kegiatan/tambah', [PostsController::class, 'create'])->name('post.new');
    Route::post('/kegiatan/tambah', [PostsController::class, 'store'])->name('post.store');
    Route::get('/kegiatan/ubah/{slug}', [PostsController::class, 'edit'])->name('post.edit');
    Route::put('/kegiatan/ubah/{slug}', [PostsController::class, 'update'])->name('post.update');


    Route::get('/plan', [PlansController::class, 'index'])->name('plan.index');
    Route::get('/plan/tambah', [PlansController::class, 'create'])->name('plan.new');
    Route::post('/plan/tambah', [PlansController::class, 'store'])->name('plan.store');
    Route::get('/plan/ubah/{slug}', [PlansController::class, 'edit'])->name('plan.edit');
    Route::put('/plan/ubah/{slug}', [PlansController::class, 'update'])->name('plan.update');

    Route::get('/pengguna', [UsersController::class, 'index'])->name('user.index');
    Route::get('/pengguna/tambah', [UsersController::class, 'create'])->name('user.new');
    Route::post('/pengguna/tambah', [PlansController::class, 'store'])->name('user.store');
    Route::get('/pengguna/ubah/{slug}', [PlansController::class, 'edit'])->name('user.edit');
    Route::put('/pengguna/ubah/{slug}', [PlansController::class, 'update'])->name('user.update');


    Route::get('/penggumuman', [AnnouncementsController::class, 'index'])->name('anno.index');
    Route::get('/penggumuman/tambah', [AnnouncementsController::class, 'create'])->name('anno.new');
    Route::post('/penggumuman/tambah', [AnnouncementsController::class, 'store'])->name('anno.store');
    Route::get('/penggumuman/ubah/{slug}', [AnnouncementsController::class, 'edit'])->name('anno.edit');
    Route::put('/penggumuman/ubah/{slug}', [AnnouncementsController::class, 'update'])->name('anno.update');
});

// / -> dash

// /kegiatan -> list of kegiatan
// /kegiatan/tambah -> add kegiatan
// /kegiatan/ubah/:slug -> ubah kegiatan
// /kegiatan/del/:id -> hapus kegiatan

// /plan -> list of agenda
// /plan/tambah -> add agenda
// /plan/ubah/:slug -> ubah agenda
// /plan/del/:id -> hapus agenda

// /admin -> list of agenda
// /admin/tambah -> add agenda
// /admin/ubah/:slug -> ubah agenda
// /admin/del/:id -> hapus agenda

// FunctionalTasksController
// /tupoksi -> list of tupoksi
// /tupoksi/tambah -> add tupoksi
// /tupoksi/ubah/:slug -> ubah tupoksi
// /tupoksi/del/:id -> hapus tupoksi

// /organisasi -> list of organisasi
// /organisasi/tambah -> add organisasi
// /organisasi/ubah/:slug -> ubah organisasi
// /organisasi/del/:id -> hapus organisasi
