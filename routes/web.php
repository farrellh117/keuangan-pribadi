<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

// Menampilkan daftar transaksi
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');

// Menampilkan form tambah transaksi
Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');

// Menyimpan transaksi baru
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');

// Menampilkan form edit transaksi
Route::get('/transactions/{transaction}/edit', [TransactionController::class, 'edit'])->name('transactions.edit');

// Memperbarui transaksi
Route::put('/transactions/{transaction}', [TransactionController::class, 'update'])->name('transactions.update');

// Menghapus transaksi
Route::delete('/transactions/{transaction}', [TransactionController::class, 'destroy'])->name('transactions.destroy');
