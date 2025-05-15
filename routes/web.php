<?php

use App\Http\Controllers\AcccountController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransactionController;
use App\Models\Account;
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
    return view('index');
});

Route::get('/ShowLogin', [AuthController::class, 'ShowLogin'])->name('ShowLogin');
Route::get('/Acceuil', [AcceuilController::class, 'ShowAcceuil'])->name('acceuil');
Route::get('/ShowBalance', [AcccountController::class, 'ShowBalance'])->name('ShowBlance');
Route::get('/transaction', [TransactionController::class, 'showTransation'])->name('showTransation');


Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'StoreUser'])->name('register');
Route::post('/storeBalance', [AcccountController::class, 'storeBalance'])->name('storeBalance');
Route::post('/transfert', [TransactionController::class, 'transfert'])->name('transfert');

