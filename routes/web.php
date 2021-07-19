<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\sales\invoice\invoiceController;
use App\Http\Controllers\sales\products\ProductController;
use App\Http\Controllers\sales\products\ProductSettingController;
use App\Http\Controllers\DateOneController;
use App\Http\Controllers\DateTwoController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('dashboard', DashboardController::class);

        Route::resource('invoices', InvoiceController::class);
        Route::resource('products', ProductController::class);

        //    -------------- ROUTE FOR PRODUCT SETTINGS ------------
        Route::resource('productsettings', ProductSettingController::class);



         //    -------------- ROUTE FOR PRODUCT UNIT ------------
        Route::post('unit.store', [ProductSettingController::class , 'unitStore'])->name('unit.store');
        Route::post('unit.edit/{id}', [ProductSettingController::class , 'unitEdit'])->name('unit.edit');
        Route::get('unit.delete/{id}', [ProductSettingController::class , 'unitDelete'])->name('unit.delete');
        Route::get('unit.edit/{id}', [ProductSettingController::class , 'unitEdit'])->name('unit.edit');


         //    -------------- ROUTE FOR PRODUCT CATEGORY ------------
         Route::post('category.store', [ProductSettingController::class , 'categoryStore'])->name('category.store');
         Route::post('category.edit/{id}', [ProductSettingController::class , 'categoryEdit'])->name('category.edit');
         Route::get('category.delete/{id}', [ProductSettingController::class , 'categoryDelete'])->name('category.delete');
         Route::get('category.edit/{id}', [ProductSettingController::class , 'categoryEdit'])->name('category.edit');


           //    -------------- ROUTE FOR PRODUCT BRANDS ------------
           Route::post('brand.store', [ProductSettingController::class , 'brandStore'])->name('brand.store');
           Route::post('brand.edit/{id}', [ProductSettingController::class , 'brandEdit'])->name('brand.edit');
           Route::get('brand.delete/{id}', [ProductSettingController::class , 'brandDelete'])->name('brand.delete');
           Route::get('brand.edit/{id}', [ProductSettingController::class , 'brandEdit'])->name('brand.edit');
    
        

        

        
        