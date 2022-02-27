<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayPalController;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('give_zakat', \App\Http\Controllers\GiveZakatController::class);
Route::resource('final', \App\Http\Controllers\FinalController::class);
Route::post('paypal_checkout', [PayPalController::class, 'checkout'])->name('paypal.checkout');

Route::get('/paypal/checkout/{order}/completed', [PayPalController::class, 'completed'])->name('paypal.checkout.completed');

Route::post('/webhook/paypal/{order?}/{env?}', [PayPalController::class, 'webhook',])->name('webhook.paypal.ipn');
Route::get('/paypal/checkout/{order}/cancelled', [PayPalController::class,'cancelled'])->name('paypal.checkout.cancelled');
Route::get('/success', [\App\Http\Controllers\HomeController::class,'success'])->name('success');

Route::post('/stripe/payment', [\App\Http\Controllers\StripePayment::class,'payment'])->name('stripe.payment');
Route::get('/stripe/complete/{order_id}', [\App\Http\Controllers\StripePayment::class,'complete'])->name('stripe.complete');
Route::get('/stripe/cancelled/{order_id}', [\App\Http\Controllers\StripePayment::class,'cancelled'])->name('stripe.cancelled');
Route::get('/paid_list', [\App\Http\Controllers\OrderController::class,'index'])->name('payment_list');
