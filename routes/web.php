<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front_end\AuthenticationController;
use App\Http\Controllers\Front_end\DashboardController;
use App\Http\Controllers\Front_end\ProductController;
use App\Http\Controllers\Front_end\ClubController;
use App\Http\Controllers\Back_end\ClubController as BackendClubController;
use App\Http\Controllers\Back_end\ProductController as BackendProductController;
use App\Http\Controllers\Back_end\ScoutController as BackendScoutController;
use App\Http\Controllers\Front_end\ScoutController;
use App\Http\Controllers\Front_end\ReportController;
use App\Http\Controllers\OperationController;

//Authentication routes
Route::get('/', [AuthenticationController::class, 'index'])->name('login');
Route::get('/password-reset', [AuthenticationController::class, 'forgot_password'])->name('auth.forgot.password');
Route::post('/password-set', [AuthenticationController::class, 'set_password'])->name('auth.forgot.set');
Route::post('/login-operation', [AuthenticationController::class, 'authenticate'])->name('auth.login');
Route::get('/logout-operation', [AuthenticationController::class, 'logout'])->name('auth.logout');

Route::middleware(['auth'])->group(function () {
//layout pages routes
Route::get('/Dashboard', [DashboardController::class, 'index'])->name('main.index');

//Product
Route::get('/product', [ProductController::class, 'create'])->name('product.new');
Route::get('/product/list', [ProductController::class, 'show'])->name('product.list');
Route::get('/product/required', [ProductController::class, 'required_action'])->name('product.action.list');

Route::post('/product/create', [BackendProductController::class, 'store'])->name('product.create');
Route::get('/product-edit/{id}', [BackendProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update', [BackendProductController::class, 'update'])->name('product.update');
Route::get('/product-delete/{id}', [BackendProductController::class, 'destroy'])->name('product.delete');
Route::get('/product-undelete/{id}', [BackendProductController::class, 'undestroy'])->name('product.undelete');

//Club
Route::get('/club', [ClubController::class, 'create'])->name('club.new');
Route::get('/club/list', [ClubController::class, 'show'])->name('club.list');

Route::post('/club/create', [BackendClubController::class, 'store'])->name('club.create');
Route::get('/club-edit/{id}', [BackendClubController::class, 'edit'])->name('club.edit');
Route::post('/club/update', [BackendClubController::class, 'update'])->name('club.update');
Route::get('/club-delete/{id}', [BackendClubController::class, 'destroy'])->name('club.delete');
Route::get('/club-undelete/{id}', [BackendClubController::class, 'undestroy'])->name('club.undelete');

//Scout
Route::get('/scout', [ScoutController::class, 'create'])->name('scout.new');
Route::get('/scout/list', [ScoutController::class, 'show'])->name('scout.list');
Route::get('/scout/required', [ScoutController::class, 'required_action'])->name('scout.action.list');

Route::post('/scout/create', [BackendScoutController::class, 'store'])->name('scout.create');
Route::get('/scout-edit/{id}', [BackendScoutController::class, 'edit'])->name('scout.edit');
Route::post('/scout/update', [BackendScoutController::class, 'update'])->name('scout.update');
Route::get('/scout-delete/{id}', [BackendScoutController::class, 'destroy'])->name('scout.delete');
Route::get('/scout-undelete/{id}', [BackendScoutController::class, 'undestroy'])->name('scout.undelete');

//report
Route::get('/transfer/report', [ReportController::class, 'transfer'])->name('report.transfer');
Route::get('/market/report', [ReportController::class, 'market'])->name('report.market');

//Scout
Route::get('/operation', [OperationController::class, 'index'])->name('operation.new');
Route::post('/operation/create', [OperationController::class, 'store'])->name('operation.create');
Route::get('/operation/list', [OperationController::class, 'show'])->name('operation.list');
Route::get('/operation-edit/{id}', [OperationController::class, 'edit'])->name('operation.edit');
Route::post('/operation/update', [OperationController::class, 'update'])->name('operation.update');
Route::get('/operation-delete/{id}', [OperationController::class, 'destroy'])->name('operation.delete');
Route::get('/operation-undelete/{id}', [OperationController::class, 'undestroy'])->name('operation.undelete');
Route::get('/operation-buy/{id}', [OperationController::class, 'pricePropose'])->name('operation.buy');
Route::post('/operation/price', [OperationController::class, 'price'])->name('operation.price');
});
