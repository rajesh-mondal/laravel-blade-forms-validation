<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::get( '/product/create', [ProductController::class, 'create'] )->name( 'product.create' );
Route::post( '/product/store', [ProductController::class, 'store'] )->name( 'product.store' );

route::get( '/phpinfo', function () {
    phpinfo();
} );