<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OfficeController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/products', [ProductController::class, 'list'])->name('productslist');
    Route::get('/users', [UserController::class, 'list'])->name('users.userList');
    Route::get('/employees', [EmployeeController::class, 'list'])->name('employeesList');
    Route::get('/customers', [CustomerController::class, 'list'])->name('customersList');
    Route::get('/orders', [OrderController::class, 'list'])->name('ordersList');

    Route::get('/offices', [OfficeController::class, 'list'])->name('officesList');


    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});
require __DIR__.'/auth.php';
