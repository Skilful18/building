<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\Service::class, 'index'])->name('/');
Route::get('about',[\App\Http\Controllers\Service::class, 'about'])->name('about');
Route::get('service',[\App\Http\Controllers\Service::class, 'service'])->name('service');
Route::get('price',[\App\Http\Controllers\Service::class, 'price'])->name('price');
Route::get('special-offers',[\App\Http\Controllers\Service::class, 'specialOffers'])->name('special-offers');
Route::get('articles',[\App\Http\Controllers\Service::class, 'articles'])->name('articles');
Route::get('contacts',[\App\Http\Controllers\Service::class, 'contacts'])->name('contacts');

Route::group(['prefix' => 'service'], function () {
    Route::get('/{url}', [\App\Http\Controllers\Service::class, 'serviceOne'])->name('service-one');
    Route::get('/{url}', [\App\Http\Controllers\Service::class, 'service-page'])->name('service-page');
    Route::get('/electrician',[\App\Http\Controllers\Service::class, 'electrician'])->name('electrician');
});

Route::get('article/{id}',[\App\Http\Controllers\ArticleController::class, 'articles'])->name('article');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
