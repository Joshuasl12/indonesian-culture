<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProvinceController;

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
Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

Route::prefix('/collection')->group(function () {
    Route::get('/house', [CollectionController::class, 'collectionHouse'])->name('collection.house');
    Route::get('/music', [CollectionController::class, 'collectionMusic'])->name('collection.music');
    Route::get('/cloth', [CollectionController::class, 'collectionCloth'])->name('collection.cloth');
    Route::get('/dance', [CollectionController::class, 'collectionDance'])->name('collection.dance');
    Route::get('/food', [CollectionController::class, 'collectionFood'])->name('collection.food');
    Route::get('/details/{id}', [CollectionController::class, 'collectionDetails'])->name('collection.details');
});

Route::prefix('/province')->group(function () {
    Route::get('/{id}', [ProvinceController::class, 'province'])->name('province');
});


Route::prefix('/admin')->group(function () {
    Route::get('/', [HomeController::class, 'Home'])->name('home');
});

Route::prefix('/admin/province')->group(function () {
    Route::get('/', [HomeController::class, 'indexProvince'])->name('index.province');
    Route::get('/create', [HomeController::class, 'createProvince'])->name('create.province');
    Route::post('/store', [ProvinceController::class, 'storeProvince'])->name('store.province');
    Route::get('/edit/{id}', [ProvinceController::class, 'editProvince'])->name('edit.province');
    Route::post('/update/{id}', [ProvinceController::class, 'updateProvince'])->name('update.province');
    Route::post('/destroy/{id}', [ProvinceController::class, 'destroyProvince'])->name('destroy.province');
});

Route::prefix('/admin/collection')->group(function () {
    Route::get('/', [HomeController::class, 'indexCollection'])->name('index.collection');
    Route::get('/create', [HomeController::class, 'createCollection'])->name('create.collection');
    Route::post('/store', [CollectionController::class, 'storeCollection'])->name('store.collection');
    Route::get('/edit/{id}', [CollectionController::class, 'editCollection'])->name('edit.collection');
    Route::post('/update/{id}', [CollectionController::class, 'updateCollection'])->name('update.collection');
    Route::post('/destroy/{id}', [CollectionController::class, 'destroyCollection'])->name('destroy.collection');
});

