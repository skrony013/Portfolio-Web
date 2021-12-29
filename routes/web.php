<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CallToActionController;

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

// FrontEnd Routes Here

Route::get('/', [FrontEndController::class, 'Home'])->name('home');
Route::get('/about', [FrontEndController::class, 'About'])->name('frontend.about');
Route::get('/works', [FrontEndController::class, 'Works'])->name('frontend.works');
Route::get('/works-details/{id}', [FrontEndController::class, 'SingleProject'])->name('frontend.works-details');

Route::get('/case-details/{id}', [FrontEndController::class, 'CaseDetails'])->name('frontend.case-details');

Route::get('/contact', [FrontEndController::class, 'Contact'])->name('frontend.contact');
Route::get('/blog', [FrontEndController::class, 'Blog'])->name('frontend.blog');
Route::get('/blog-details/{id}', [FrontEndController::class, 'BlogDetails'])->name('frontend.blog-details');

Route::post('/contact', [FrontEndController::class, 'Send_Message'])->name('frontend.contat.send_message');

// Admin Routes Here

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');


    // Sliders

    Route::get('/sliders', [SliderController::class, 'index'])->name('admin.slider.sliders');
    Route::get('/sliders/add-slider', [SliderController::class,'create'])->name('admin.slider.add-slider');
    Route::post('/sliders/add-slider', [SliderController::class,'store'])->name('admin.slider.store-slider');
    Route::get('/sliders/edit-slider/{id}', [SliderController::class, 'edit'])->name('admin.slider.edit-slider');
    Route::put('/sliders/update-slider/{id}', [SliderController::class, 'update'])->name('admin.slider.update-slider');
    Route::get('/sliders/delete-slider/{id}', [SliderController::class, 'destroy'])->name('admin.slider.delete-slider');

   // Category 

    Route::get('/services/categories', [CategoryController::class, 'index'])->name('admin.category.categories');
    Route::get('/services/categories/add-category', [CategoryController::class, 'create'])->name('admin.category.add-cat');
    Route::post('/services/categories/add-category', [CategoryController::class, 'store'])->name('admin.category.store-cat');
    Route::get('/services/categories/edit-category/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit-cat');
    Route::put('/services/categories/update-category/{id}', [CategoryController::class, 'update'])->name('admin.category.update-cat');
    Route::get('/services/categories/delete-category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete-cat');

    // Services 

    Route::get('/services', [ServiceController::class,'index'])->name('admin.service.services');
    Route::get('/services/add-service', [ServiceController::class,'create'])->name('admin.service.add-service');
    Route::post('/services/add-service', [ServiceController::class,'store'])->name('admin.service.store-service');
    Route::get('/services/edit-service/{id}', [ServiceController::class,'edit'])->name('admin.service.edit-service');
    Route::put('/services/update-service/{id}', [ServiceController::class,'update'])->name('admin.service.edit-service');
    Route::get('/services/delete-service/{id}', [ServiceController::class,'destroy'])->name('admin.service.delete-service');

    // Gallery

    Route::post('/services/update-service/{id}',[ServiceController::class,'DeleteImage']);

    // Route::get('/img-gallery', [GalleryController::class,'create']);
    // Route::post('/img-gallery', [GalleryController::class,'store']);



    // Contact

    Route::get('/contact', [ContactController::class, 'index'])->name('admin.contact.contact');
    Route::get('/contact/edit-contact/{id}', [ContactController::class, 'edit'])->name('admin.contact.edit-contact');
    Route::put('/contact/update-contact/{id}', [ContactController::class, 'update'])->name('admin.contact.update-contact');
    Route::get('/contact/delete-contact/{id}', [ContactController::class, 'destroy'])->name('admin.contact.delete-contact');

    // About with team and about features

    // 01. Feature
    Route::get('/about/features', [FeatureController::class, 'index'])->name('admin.about.feature');
    Route::get('/about/features/add-feature', [FeatureController::class, 'create'])->name('admin.about.feature.create');
    Route::post('/about/features/add-feature', [FeatureController::class, 'store'])->name('admin.about.feature.store');
    Route::get('/about/features/edit-feature/{id}', [FeatureController::class, 'edit'])->name('admin.about.feature.edit');
    Route::put('/about/features/update-feature/{id}', [FeatureController::class, 'update'])->name('admin.about.feature.update');
    Route::get('/about/features/delete-feature/{id}', [FeatureController::class, 'destroy'])->name('admin.about.feature.update');


    // 02. Team

     Route::get('/about/team', [TeamController::class, 'index'])->name('admin.about.team');
     Route::get('/about/team/add-team', [TeamController::class, 'create'])->name('admin.about.add-team');
     Route::post('/about/team/add-team', [TeamController::class, 'store'])->name('admin.about.store-team');
     Route::get('/about/team/edit-team/{id}', [TeamController::class, 'edit'])->name('admin.about.edit-team');

     Route::put('/about/team/update-team/{id}', [TeamController::class, 'update'])->name('admin.about.update-team');
     Route::get('/about/team/delete-team/{id}', [TeamController::class, 'destroy'])->name('admin.about.delete-team');

    // 02. Testimonial

     Route::get('/about/testimonial', [TestimonialController::class, 'index'])->name('admin.about.testimonial');
     Route::get('/about/testimonial/add-testimonial', [TestimonialController::class, 'create'])->name('admin.about.add-testimonial');
     Route::post('/about/testimonial/add-testimonial', [TestimonialController::class, 'store'])->name('admin.about.store-testimonial');
     Route::get('/about/testimonial/edit-testimonial/{id}', [TestimonialController::class, 'edit'])->name('admin.about.edit-testimonial');
     Route::put('/about/testimonial/update-testimonial/{id}', [TestimonialController::class, 'update'])->name('admin.about.update-testimonial');
     Route::get('/about/testimonial/delete-testimonial/{id}', [TestimonialController::class, 'destroy'])->name('admin.about.delete-testimonial');



     // Blog Routes

     Route::get('/blog/blogs', [BlogController::class, 'index'])->name('admin.blog.blogs');
     Route::get('/blog/blogs/add-blog', [BlogController::class, 'create'])->name('admin.blog.add-blog');
     Route::post('/blog/blogs/add-blog', [BlogController::class, 'store'])->name('admin.blog.store-blog');
     Route::get('/blog/blogs/edit-blog/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit-blog');

     Route::put('/blog/blogs/update-blog/{id}', [BlogController::class, 'update'])->name('admin.blog.update-blog');
     Route::get('/blog/blogs/delete-blog/{id}', [BlogController::class, 'destroy'])->name('admin.blog.delete-blog');

     // Settings Route

    // Route::get('/setting', [SettingController::class, 'index'])->name('admin.setting.index');
    Route::get('/setting', [SettingController::class, 'edit'])->name('admin.setting.index');
    Route::get('/setting/add-setting', [SettingController::class, 'create'])->name('admin.setting.add-setting');
    Route::post('/setting/add-setting', [SettingController::class, 'store'])->name('admin.setting.store-setting');
    Route::post('/setting', [SettingController::class, 'update'])->name('admin.setting.update');

    // Call To Ation Route

       Route::get('/calltoaction', [CallToActionController::class, 'index'])->name('admin.calltoaction');
    Route::get('/calltoaction/add-calltoaction', [CallToActionController::class, 'create'])->name('admin.calltoaction.add-calltoaction');
    Route::post('/calltoaction/add-calltoaction', [CallToActionController::class, 'store'])->name('admin.calltoaction.store-calltoaction');
    Route::get('/calltoaction/edit-calltoaction/{id}', [CallToActionController::class, 'edit'])->name('admin.calltoaction.edit-calltoaction');
    Route::put('/calltoaction/update-calltoaction/{id}', [CallToActionController::class, 'update'])->name('admin.calltoaction.update-calltoaction');
    Route::get('/calltoaction/delete-calltoaction/{id}', [CallToActionController::class, 'destroy'])->name('admin.calltoaction.delete-calltoaction');



    

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
