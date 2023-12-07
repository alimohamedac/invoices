<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoiceController;
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
Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices');
//Route::get('/sections', [SectionController::class, 'index'])->name('sections');
Route::resource('sections', SectionController::class);
Route::resource('products', ProductController::class);

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


