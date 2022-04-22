<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;

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

Route::get('/Home', function () {
    echo ("Memuat garis besar dari toko ini nanti");
});

Route::get('/Product', function () {
    echo ("halaman yang menampilkan produk");
});

Route::get('/Home/Shop', function () {
    echo ("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,");
});

Route::get('/Home/Product', function () {
    echo ("here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum");
});

Route::get('/Price', function () {
    echo ("The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.");
});

Route::get('/Produtc/Shoes', function () {
    echo ("Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.");
});

Route::get('/Product/Hoddies', function () {
    echo ("Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.");
});

Route::get('/Stock', function () {
    echo ("Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.");
});

Route::get('/Stock/Buy', function () {
    echo ("Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.");
});

Route::get('/Stock/Buy/Verif', function () {
    echo ("LOREM IPSUMMMMMMMMMMMM");
});


Route::get('/Add', [AddController::class, 'satu']);

Route::get('/Buy', [BuyController::class, 'satu']);

Route::get('/Code', [CodeController::class, 'satu']);

Route::get('/Sc', [ScController::class, 'satu']);

Route::get('/Pay', [PayController::class, 'satu']);

Route::get('/Price', [PriceController::class, 'satu']);

Route::get('/Product', [ProductController::class, 'satu']);

Route::get('/Sale', [SaleController::class, 'satu']);

Route::get('/Shop', [ShopController::class, 'satu']);

Route::get('/Stock', [StockController::class, 'satu']);
