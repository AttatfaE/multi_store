<?php

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\Dashboard\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainCategoriesController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
    //Route::get('/',[\App\Http\Controllers\Controller::class,'index']);
    Route::group(['prefix'=>'admin','namespace'=>'admin', 'middleware'=>'auth:admin'],
        function (){
        Route::get('/',[HomeController::class,'index'])->name('admin.dashboard');
        Route::get('logout',[LoginController::class, 'logout'])->name('admin.logout');


        Route::group(['prefix'=>'setting'],function (){
            Route::get('getShipping/{type}',[SettingController::class,'editShipping'])->name('admin.setting.shipping.edit');
            Route::put('getShipping/{id}',[SettingController::class,'storeShipping'])->name('admin.setting.shipping.store');
        });

        #################  Profile  #########################3
        Route::group(['prefix'=>'profile'],function (){
            Route::get('edit-profile',[ProfileController::class,'editProfile'])->name('admin.profile.edit');
            Route::put('update-profile',[ProfileController::class,'updateProfile'])->name('admin.profile.update');
        });
        ################# END #######################################

        ############# Begin Categories routes  ################
        Route::group(['prefix'=>'main-categories'],function (){
            Route::get('/{type}',[MainCategoriesController::class, 'getCategories'])->name('all.categories');
            Route::get('/create/{type}',[MainCategoriesController::class, 'addCategories'])->name('admin.create.category');
            Route::post('/store',[MainCategoriesController::class, 'store'])->name('admin.store.category');
            Route::get('/edit/{category_id}',[MainCategoriesController::class, 'edit'])->name('admin.edit.category');
            Route::post('/update/{category_id}',[MainCategoriesController::class, 'update'])->name('admin.update.category');
            Route::get('/delete/{category_id}',[MainCategoriesController::class, 'delete'])->name('admin.delete.category');
            Route::get('/changeStatus/{category_id}',[MainCategoriesController::class, 'changeStatus'])->name('admin.changeStatus.category');
        });

        ##########  End Categories Routes  ################

            ############# Begin Brands routes  ################
            Route::group(['prefix'=>'brands'],function (){
                Route::get('/',[BrandController::class, 'getBrands'])->name('all.brands');
                Route::get('/create',[BrandController::class, 'addBrand'])->name('admin.create.brand');
                Route::post('/store',[BrandController::class, 'store'])->name('admin.store.brand');
                Route::get('/edit/{brand_id}',[BrandController::class, 'edit'])->name('admin.edit.brand');
                Route::post('/update/{brand_id}',[BrandController::class, 'update'])->name('admin.update.brand');
                Route::get('/delete/{brand_id}',[BrandController::class, 'delete'])->name('admin.delete.brand');
                Route::get('/changeStatus/{brand_id}',[BrandController::class, 'changeStatus'])->name('admin.changeStatus.brand');
            });

            ##########  End Tags Routes  ################  ############# Begin Brands routes  ################
            Route::group(['prefix'=>'tags'],function (){
                Route::get('/',[TagController::class, 'getTags'])->name('all.tags');
                Route::get('/create',[TagController::class, 'addTag'])->name('admin.create.tag');
                Route::post('/store',[TagController::class, 'store'])->name('admin.store.tag');
                Route::get('/edit/{tag_id}',[TagController::class, 'edit'])->name('admin.edit.tag');
                Route::post('/update/{tag_id}',[TagController::class, 'update'])->name('admin.update.tag');
                Route::get('/delete/{tag_id}',[TagController::class, 'delete'])->name('admin.delete.tag');
                Route::get('/changeStatus/{tag_id}',[TagController::class, 'changeStatus'])->name('admin.changeStatus.tag');
            });

            ##########  End Tags Routes  ################


    });

    Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'guest:admin'], function (){

        Route::get('login',[LoginController::class,'getLogin'])->name('admin.login');
        Route::post('login',[LoginController::class,'postLogin'])->name('post.login');
    });
});











