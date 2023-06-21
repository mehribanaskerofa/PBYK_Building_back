<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Admin\FinishingController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GrandController;
use App\Http\Controllers\Admin\InfrastructureController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\RareFormatController;
use App\Http\Controllers\Admin\StaticController;
use App\Http\Controllers\Admin\TeamController;
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

//    Route::get('/status',[Controller::class,'status'])->name('status');


    Route::resource('page',PageController::class)->except(['show']);
//    Route::get('/status',[PageController::class,'status'])->name('status');

    Route::resource('menu',MenuController::class)->except(['show']);
//    Route::get('/status',[MenuController::class,'status'])->name('status');

    Route::resource('benefit',BenefitController::class)->except(['show']);
//    Route::get('/status',[BenefitController::class,'status'])->name('status');

    Route::resource('infrastructure',InfrastructureController::class)->except(['show']);
//    Route::get('/status',[InfrastructureController::class,'status'])->name('status');

    Route::resource('grand',GrandController::class)->except(['show']);
//    Route::get('/status',[GrandController::class,'status'])->name('status');

    Route::resource('rare',RareFormatController::class)->except(['show']);
//    Route::get('/status',[RareFormatController::class,'status'])->name('status');

    Route::resource('finish',FinishingController::class)->except(['show']);
//    Route::get('finish/status',[FinishingController::class,'status'])->name('status-finish');

    Route::resource('team',TeamController::class)->except(['show']);
//    Route::get('team/status',[TeamController::class,'status'])->name('status-team');

    Route::resource('gallery',GalleryController::class)->except(['show']);
    Route::get('gallery/status/{id}',[GalleryController::class,'status'])->name('status-gallery');

    Route::resource('static',StaticController::class)->except(['show']);
//    Route::get('static/status/{id}',[StaticController::class,'status'])->name('status-static');










    Route::get('example/form',function (){
        return view('admin.example.form');
    });
    Route::get('example/index',function (){
        $models=[
            [
//                'id'=>1,
                'title'=>'a',
                'description'=>'a',
                'slug'=>'ad',
                'image'=>'a',
                'button'=>'a',
                'active'=>'1'
            ]
        ];
        return view('admin.example.index',compact('models'));
    });
    //{active}/{id}
    Route::get('example/status/',function ($active,$id){
        dd($active,$id);
        return view('admin.example.form');
    })->name('status');

    productRoutes();

});
