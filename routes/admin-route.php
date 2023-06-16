<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login',[AdminController::class,'loginView'])->name('admin.login-view');
Route::post('/admin/login',[AdminController::class,'login'])->name('admin.login');

function productRoutes():void{
    Route::resource('product',ProductController::class);

    Route::resource('product-image',ProductImageController::class)->except(['index','create','show']);
    Route::get('product-image/{productId}',[ProductImageController::class,'index'])->name('product-image.index');
    Route::get('product-image/create/{productId}',[ProductImageController::class,'create'])->name('product-image.create');
    Route::post('sort-product-image',[ProductImageController::class,'sort'])->name('product-image-sort');
}


//,'middleware'=>'admin'
Route::group(['prefix'=>'admin','as'=>'admin.'],function () {
    Route::get('/',[AdminController::class,'index'])->name('home');
    Route::get('/logout',[AdminController::class,'logout'])->name('logout');

    Route::resource('page',PageController::class)->except(['show']);
    Route::resource('menu',PageController::class)->except(['show']);


    productRoutes();

});
