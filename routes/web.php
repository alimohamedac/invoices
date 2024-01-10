<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoiceAttachmentsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceDetailsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
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

Route::get('/', function () {
    return view('welcome');
});
require __DIR__.'/auth.php';

//Route::get('/sections', [SectionController::class, 'index'])->name('sections');
Route::resource('invoices', InvoiceController::class);
Route::resource('sections', SectionController::class);
Route::resource('products', ProductController::class);
Route::resource('invoiceAttachments', InvoiceAttachmentsController::class);

Route::get('/section/{id}', [InvoiceController::class, 'getProducts'])->name('getProducts');  //js
Route::get('/invoicedetails/{id}', [InvoiceDetailsController::class, 'edit'])->name('invoicedetails');
Route::get('/download/{invoice_number}/{file_name}', [InvoiceDetailsController::class, 'get_file'])->name('getFile');
Route::get('/view_file/{invoice_number}/{file_name}', [InvoiceDetailsController::class, 'open_file'])->name('openFile');
Route::post('/delete_file', [InvoiceDetailsController::class, 'destroy'])->name('deleteFile');

Route::get('/edit_invoice/{id}', [InvoiceController::class, 'edit'])->name('editInvoice');

/*Route::resource('sections',
    SectionController::class,
    [
        'names' => [
            'index'   => 'sections.index',
            'create'  => 'sections.create',
            'edit'    => 'sections.edit',
            'show'    => 'sections.show',
            'update'  => 'sections.update',
            'destroy' => 'sections.destroy',
        ],
    ]
);*/

Route::get('/{page}', [AdminController::class, 'index']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


