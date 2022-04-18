<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\DashboardGuideController;
use App\Http\Controllers\GuideController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('galeri', function () {
    return view('galeri');
});

Route::get('tour-guide', function () {
    return view('tour-guide');
});

Route::get('articles', function () {
    return view('articles');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
// Route::get('detailGuide/{id}', function () {
//     return view('detailGuide');
// });
Route::resource('articles', ArticleController::class);
Route::get('article-details/{id}', [ArticleController::class, 'show']);

Route::resource('galeri', GaleriController::class);

Route::resource('tour-guide', GuideController::class);
Route::get('detailGuide/{id}', [GuideController::class, 'show']);

Route::resource('/dashboard/posts', DashboardPostController::class);
Route::resource('/dashboard/guide', DashboardGuideController::class);
