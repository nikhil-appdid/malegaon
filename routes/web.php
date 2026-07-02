<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PropertySearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PropertySearchController::class, 'index'])->name('home');
Route::get('/property/search', [PropertySearchController::class, 'search'])->name('property.search');
Route::get('/property/{propertyNumber}', [PropertyController::class, 'show'])
    ->where('propertyNumber', '[A-Za-z0-9]+')
    ->name('property.show');

Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment/failed', [PaymentController::class, 'failed'])->name('payment.failed');
Route::get('/payment/{propertyNumber}', [PaymentController::class, 'show'])
    ->where('propertyNumber', '[A-Za-z0-9]+')
    ->name('payment.show');
Route::post('/payment/{propertyNumber}', [PaymentController::class, 'pay'])
    ->where('propertyNumber', '[A-Za-z0-9]+')
    ->name('payment.pay');
