<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogSectionController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CustomPageController;
use App\Http\Controllers\Admin\AboutUsController;

// Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth','IsAdmin']], function () {


// Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth','IsAdmin']], function () {
Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Contacts
    Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::get('{id}/view', [ContactController::class, 'view'])->name('view');
        Route::get('{id}/delete', [ContactController::class, 'delete'])->name('delete');
        Route::post('/toggle-status', [ContactController::class, 'toggleStatus'])->name('toggleStatus');
    });


    // Faq
    Route::group(['prefix' => 'faq', 'as' => 'faq.'], function () {
        Route::get('/', [FaqController::class, 'index'])->name('index');
        Route::get('/create', [FaqController::class, 'create'])->name('create');
        Route::post('/store', [FaqController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [FaqController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [FaqController::class, 'delete'])->name('delete');
        Route::get('/view/{id}', [FaqController::class, 'view'])->name('view');
        Route::post('/toggle-status', [FaqController::class, 'toggleStatus'])->name('toggleStatus');
        Route::post('/update-order', [FaqController::class, 'updateOrder'])->name('update.order');
    });


    // Brand
    Route::group(['prefix' => 'brand', 'as' => 'brand.'], function () {
        Route::get('/', [BrandController::class, 'index'])->name('index');
        Route::get('/create', [BrandController::class, 'create'])->name('create');
        Route::post('/store', [BrandController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [BrandController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [BrandController::class, 'delete'])->name('delete');
        Route::get('/view/{id}', [BrandController::class, 'view'])->name('view');
        Route::post('/toggle-status', [BrandController::class, 'toggleStatus'])->name('toggleStatus');
    });


    // Blogs Category
    Route::group(['prefix' => 'blogs_category', 'as' => 'blogs_category.'], function () {
        Route::get('/', [BlogCategoryController::class, 'index'])->name('index');
        Route::get('/create', [BlogCategoryController::class, 'create'])->name('create');
        Route::post('/store', [BlogCategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BlogCategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [BlogCategoryController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [BlogCategoryController::class, 'delete'])->name('delete');
        Route::get('/view/{id}', [BlogCategoryController::class, 'view'])->name('view');
        Route::post('/toggle-status', [BlogCategoryController::class, 'toggleStatus'])->name('toggleStatus');
        Route::post('/update-order', [BlogCategoryController::class, 'updateOrder'])->name('update.order');
    });

    // Blogs
    Route::group(['prefix' => 'blogs', 'as' => 'blogs.'], function () {
        Route::get('/', [BlogSectionController::class, 'index'])->name('index');
        Route::get('/create', [BlogSectionController::class, 'create'])->name('create');
        Route::post('/store', [BlogSectionController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BlogSectionController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [BlogSectionController::class, 'update'])->name('update');
        Route::post('/section-update/{id}', [BlogSectionController::class, 'sectionupdate'])->name('section.update');
        Route::get('/delete/{id}', [BlogSectionController::class, 'delete'])->name('delete');
    });

    // About Us
    Route::group(['prefix' => 'about_us', 'as' => 'about_us.'], function () {
        Route::get('/', [AboutUsController::class, 'index'])->name('index');
        Route::post('/store', [AboutUsController::class, 'store'])->name('store');
    });

    //Custom Page
    Route::group(['prefix' => 'cpage', 'as' => 'cpage.'], function () {
        Route::get('/', [CustomPageController::class, 'index'])->name('index');
        Route::get('create', [CustomPageController::class, 'create'])->name('create');
        Route::post('store', [CustomPageController::class, 'store'])->name('store');
        Route::get('{id}/view', [CustomPageController::class, 'view'])->name('view');
        Route::get('{id}/edit', [CustomPageController::class, 'edit'])->name('edit');
        Route::post('{id}/update', [CustomPageController::class, 'update'])->name('update');
        Route::post('/toggle-status', [CustomPageController::class, 'toggleStatus'])->name('toggleStatus');
        // Route::get('{id}/delete', [CustomPageController::class, 'getDelete'])->name('delete');
    });


    // Testimonials
    Route::group(['prefix' => 'testimonials', 'as' => 'testimonials.'], function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('index');
        Route::get('/create', [TestimonialController::class, 'create'])->name('create');
        Route::post('/store', [TestimonialController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [TestimonialController::class, 'update'])->name('update');
        Route::post('/section-update/{id}', [TestimonialController::class, 'sectionupdate'])->name('section.update');
        Route::get('/delete/{id}', [TestimonialController::class, 'delete'])->name('delete');
    });


    // Portfolio
    Route::group(['prefix' => 'portfolio', 'as' => 'portfolio.'], function () {
        Route::get('/', [PortfolioController::class, 'index'])->name('index');
        Route::get('/create', [PortfolioController::class, 'create'])->name('create');
        Route::post('/store', [PortfolioController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PortfolioController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [PortfolioController::class, 'update'])->name('update');
        Route::post('/section-update/{id}', [PortfolioController::class, 'sectionupdate'])->name('section.update');
        Route::get('/delete/{id}', [PortfolioController::class, 'delete'])->name('delete');
    });


    // Skills
    Route::group(['prefix' => 'skills', 'as' => 'skills.'], function () {
        Route::get('/', [SkillController::class, 'index'])->name('index');
        Route::get('/create', [SkillController::class, 'create'])->name('create');
        Route::post('/store', [SkillController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [SkillController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [SkillController::class, 'update'])->name('update');
        Route::post('/section-update/{id}', [SkillController::class, 'sectionupdate'])->name('section.update');
        Route::get('/delete/{id}', [SkillController::class, 'delete'])->name('delete');
    });


    // Experience
    Route::group(['prefix' => 'experience', 'as' => 'experience.'], function () {
        Route::get('/', [ExperienceController::class, 'index'])->name('index');
        Route::get('/create', [ExperienceController::class, 'create'])->name('create');
        Route::post('/store', [ExperienceController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ExperienceController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ExperienceController::class, 'update'])->name('update');
        Route::post('/section-update/{id}', [ExperienceController::class, 'sectionupdate'])->name('section.update');
        Route::get('/delete/{id}', [ExperienceController::class, 'delete'])->name('delete');
    });


    // Service
    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('/create', [ServiceController::class, 'create'])->name('create');
        Route::post('/store', [ServiceController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ServiceController::class, 'update'])->name('update');
        Route::post('/section-update/{id}', [ServiceController::class, 'sectionupdate'])->name('section.update');
        Route::get('/delete/{id}', [ServiceController::class, 'delete'])->name('delete');
    });


    // setting
    Route::group(['prefix' => 'setting', 'as' => 'setting.'], function () {
        Route::get('/general-setting', [GeneralSettingController::class, 'general_setting'])->name('general.setting');
        Route::post('general/store', [GeneralSettingController::class, 'generalStore'])->name('general_store');
    });


});