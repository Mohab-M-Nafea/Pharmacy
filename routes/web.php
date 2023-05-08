<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('home')->middleware(['guest']);
    Route::post('/login', 'login')->name('login')->middleware(['guest']);
    Route::get('/profile', 'edit')->name('profile')->middleware(['auth']);
    Route::get('/profile/update', 'update')->name('profile.update')->middleware(['auth']);
    Route::get('logout', 'destroy')->name('logout')->middleware(['auth']);
});


Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name('admin');
});

Route::get('/cashier', [CashierController::class, 'dashboard'])->name('cashier');

Route::resource('admin/cashier', CashierController::class)->except('show')->names([
    'index' => 'admin.cashier',
    'create' => 'admin.cashier.add',
    'store' => 'admin.cashier.store',
    'edit' => 'admin.cashier.edit',
    'update' => 'admin.cashier.update',
    'destroy' => 'admin.cashier.delete'
]);

Route::resource('admin/category', CategoryController::class)->names([
    'index' => 'admin.category',
    'create' => 'admin.category.add',
    'store' => 'admin.category.store',
    'edit' => 'admin.category.edit',
    'update' => 'admin.category.update',
    'destroy' => 'admin.category.delete'
]);

Route::resource('admin/supplier', SupplierController::class)->names([
    'index' => 'admin.supplier',
    'create' => 'admin.supplier.add',
    'store' => 'admin.supplier.store',
    'edit' => 'admin.supplier.edit',
    'update' => 'admin.supplier.update',
    'destroy' => 'admin.supplier.delete'
]);

Route::resource('admin/medicine', MedicineController::class)->names([
    'index' => 'admin.medicine',
    'create' => 'admin.medicine.add',
    'store' => 'admin.medicine.store',
    'edit' => 'admin.medicine.edit',
    'update' => 'admin.medicine.update',
    'destroy' => 'admin.medicine.delete'
]);

Route::get('/admin/sales', function () {
    return view('admin.sales');
})->name('admin.sales');

Route::get('/admin/company', function () {
    return view('admin.company');
})->name('admin.company');

Route::get('/admin/report', function () {
    return view('admin.report');
})->name('admin.report');

Route::get('/cashier/sales', function () {
    return view('cashier.sales');
})->name('cashier.sales');

Route::get('/cashier/daily', function () {
    return view('cashier.daily_sales');
})->name('cashier.daily');
