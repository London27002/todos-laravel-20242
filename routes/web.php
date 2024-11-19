<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TestController;


Route::get('/', [TestController::class, 'welcome']);

Route::get('/test', [TestController::class, 'testView']);

