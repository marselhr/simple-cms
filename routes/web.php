<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminHomeController;

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
    return view('pages.guest.welcome');
})->name('guest.home');

Route::get('/dashboard', [App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->middleware(['auth', 'verified', 'isAdmin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->name('home')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/admin/home', [AdminHomeController::class, 'index']);
});

Route::middleware('auth', 'isAdmin')->group(function () {
    Route::prefix('cms')->group(function () {
        Route::get('/', [AdminHomeController::class, 'renderCmsOverview'])->name('admin.cms.overview');
        Route::prefix('post')->group(function () {
            Route::get('/', [PostController::class, 'index'])->name('admin.cms.posts');
            Route::get('/create', [PostController::class, 'create'])->name('admin.cms.posts.create');
            Route::post('/datatable', [PostController::class, 'datatable'])->name('admin.cms.posts.datatable');
        });
        Route::prefix('category')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('admin.cms.category');
            Route::post('datatable', [CategoryController::class, 'datatable'])->name('admin.cms.category.datatable');
            Route::post('/', [CategoryController::class, 'store'])->name('admin.cms.category.create');
        });
    });
});
