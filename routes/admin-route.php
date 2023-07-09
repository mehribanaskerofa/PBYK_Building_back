<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Admin\BlockController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FinishingController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\GrandController;
use App\Http\Controllers\Admin\HouseController;
use App\Http\Controllers\Admin\InfrastructureController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductImageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\RareFormatController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StaticController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\ConfigurationController;
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
    Route::get('page/status/{id}',[PageController::class,'status'])->name('status-page');

    Route::resource('menu',MenuController::class)->except(['show']);
    Route::get('menu/status/{id}',[MenuController::class,'status'])->name('status-menu');

    Route::resource('benefit',BenefitController::class)->except(['show']);
    Route::get('benefit/status/{id}',[BenefitController::class,'status'])->name('status-benefit');

    Route::resource('infrastructure',InfrastructureController::class)->except(['show']);
    Route::get('infrastructure/status/{id}',[InfrastructureController::class,'status'])->name('status-infrastructure');

    Route::resource('grand',GrandController::class)->except(['show']);
    Route::get('grand/status/{id}',[GrandController::class,'status'])->name('status-grand');

    Route::resource('rare',RareFormatController::class)->except(['show']);
    Route::get('rare/status/{id}',[RareFormatController::class,'status'])->name('status-rare');

    Route::resource('finish',FinishingController::class)->except(['show']);
    Route::get('finish/status/{id}',[FinishingController::class,'status'])->name('status-finish');

    Route::resource('team',TeamController::class)->except(['show']);
    Route::get('team/status/{id}',[TeamController::class,'status'])->name('status-team');

    Route::resource('gallery',GalleryController::class)->except(['show']);
    Route::get('gallery/status/{id}',[GalleryController::class,'status'])->name('status-gallery');

    Route::resource('static',StaticController::class)->except(['show']);
    Route::get('static/status/{id}',[StaticController::class,'status'])->name('status-static');

    Route::resource('contact',ContactController::class)->except(['show']);
    Route::get('contact/status/{id}',[ContactController::class,'status'])->name('status-contact');

    Route::resource('setting',SettingController::class)->except(['show']);


    //projects-buildings
    Route::resource('company',CompanyController::class)->except(['show']);

    Route::resource('project',ProjectController::class)->except(['show']);
    Route::resource('block',BlockController::class)->except(['show']);

    Route::get('house/{projectId}',[HouseController::class,'index'])->name('house.index');
    Route::get('house/create/{projectId}',[HouseController::class,'create'])->name('house.create');
//    Route::post('sort-product-image',[HouseController::class,'sort'])->name('product-image-sort');

    Route::resource('house',HouseController::class)->except(['show','create','index']);
    Route::get('house/status/{id}',[HouseController::class,'status'])->name('status-house');











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
Route::get('/clear-cache', [ConfigurationController::class,'clear'])->name('clear-cache');
