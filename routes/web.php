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

		//Invoice Controller
        // Route::get('invoices/create_payment/{id}','InvoiceController@create_payment')->name('invoices.create_payment');
        // Route::post('invoices/store_payment','InvoiceController@store_payment')->name('invoices.create_payment');
        // Route::get('invoices/mark_as_cancelled/{id}','InvoiceController@mark_as_cancelled')->name('invoices.mark_as_cancelled');
        // Route::get('invoices/view_payment/{id}','InvoiceController@view_payment')->name('invoices.view_payment');
        // Route::get('invoices/create_email/{invoice_id}','InvoiceController@create_email')->name('invoices.send_email');
        // Route::post('invoices/send_email','InvoiceController@send_email')->name('invoices.send_email');
        // Route::post('invoices/get_table_data','InvoiceController@get_table_data');
        Route::resource('invoices', InvoiceController::class);
        Route::resource('products', ProductController::class);
        Route::resource('productsettings', ProductSettingController::class);
        Route::post('unit.store', [ProductSettingController::class , 'unitStore'])->name('unit.store');
        Route::post('unit.edit/{id}', [ProductSettingController::class , 'unitEdit'])->name('unit.edit');
        Route::get('unit.delete/{id}', [ProductSettingController::class , 'unitDelete'])->name('unit.delete');
        Route::get('unit.edit/{id}', [ProductSettingController::class , 'unitEdit'])->name('unit.edit');
        Route::resource('dataone', DateOneController::class);
        Route::resource('datatwo', DateTwoController::class);
        Route::get('marge', [DateTwoController::class, 'merge'])->name('merge');

        Route::get('importExportView', [DateOneController::class, 'importExportView']);
        Route::get('export', [DateOneController::class, 'export'])->name('export');


        

        
        