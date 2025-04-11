<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomCodeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/departamentos', [HomeController::class, 'departamentos']);
Route::get('/amenidades', [HomeController::class, 'amenidades']);
Route::get('/contacto', [HomeController::class, 'contacto']);
Route::get('/aviso-de-privacidad', [HomeController::class, 'aviso']);

Route::group(['prefix' => 'en'], function () {
    App::setlocale('en');
    Route::get('/', [HomeController::class, 'indexEn']);
    Route::get('/departamentos', [HomeController::class, 'departamentosEn']);
    Route::get('/amenidades', [HomeController::class, 'amenidadesEn']);
    Route::get('/contacto', [HomeController::class, 'contactoEn']);
    Route::get('/aviso-de-privacidad', [HomeController::class, 'avisoEn']);
});

Route::post('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/save-contact', [ContactController::class, 'save']);

//storage link
// Route::get('/storage-link', function () {
//     Artisan::call('storage:link');
//     return 'storage link created';
// });

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/custom-code', [CustomCodeController::class, 'index'])->name('custom-code.index');
    Route::put('/custom-code', [CustomCodeController::class, 'update'])->name('custom-code.update');
});

// Debug routes - no middleware
Route::get('/debug/custom-code', [\App\Http\Controllers\CustomCodeDebugController::class, 'index']);
Route::get('/debug/admin-custom-code', [CustomCodeController::class, 'index'])->name('debug.custom-code');

// Custom code routes without middleware for testing
Route::prefix('admin-test')->name('admin-test.')->group(function () {
    Route::get('/custom-code', [CustomCodeController::class, 'index'])->name('custom-code.index');
    Route::put('/custom-code', [CustomCodeController::class, 'update'])->name('custom-code.update');
});
