<?php

use App\Http\Controllers\AdminBlogController;
// use App\Http\Controllers\CourseController;
use App\Http\Controllers\Courses\CoursesController;
use App\Http\Controllers\Dashboard\AdminDashboard\AdminDashboardController;
use App\Http\Controllers\Dashboard\UserDashboard\UserDashboardController;
use App\Http\Controllers\Job\JobController;
use App\Http\Controllers\Job\ModuleController;
use App\Http\Controllers\Job\PaidCourseController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {});

Route::get('/', [MainController::class, 'HomePage'])->name('home');
Route::get('/courses', [CoursesController::class, 'CoursePage'])->name('courses');
Route::get('/blog', [MainController::class, 'BlogPage'])->name('blog');

/// Courses
Route::get('/job_preparation', [JobController::class, 'index'])->name('job_preparation');
Route::post('/job_preparation', [PaidCourseController::class, 'storePaidCourse'])->name('job_preparation.store');
Route::get('/job_preparation/{encryptedId}', [PaidCourseController::class, 'showPaidCourse'])->name('job_preparation.show');

/// Module
Route::get('/job_preparation/{courseName}/{moduleNumber}/{encryptedModuleId}', [ModuleController::class, 'showModule']);
Route::post('/job_preparation/storeModule/{encryptedId}', [ModuleController::class, 'storeModule'])->name('job_preparation.storeModule');
Route::post('/job_preparation/storeExtraModule/{encryptedId}', [ModuleController::class, 'storeExtraModule'])->name('job_preparation.storeExtraModule');

/// Upload File
Route::post('/upload-covered-topics/{module_id}', [ModuleController::class, 'storeTitle'])->name('uploadModuleTitle');
Route::post('/upload-assignment-topics/{module_id}', [ModuleController::class, 'storeAssignmentTopics'])->name('uploadAssignmentTopics');
Route::post('/upload-module-video/{module_id}', [ModuleController::class, 'storeVideo'])->name('uploadModuleVideo');
Route::post('/upload-module-resource/{module_id}', [ModuleController::class, 'storeResources'])->name('uploadResources');

Route::delete('/delete_module/{moduleId}/{encryptedId}', [ModuleController::class, 'deleteModule'])->name('delete_module');
Route::post('/update_is_locked/{moduleId}/{encryptedId}', [ModuleController::class, 'updateIsLocked'])->name('update_is_locked');

Route::post('/upload-file/{module_id}', [ModuleController::class, 'assignment'])->name('uploadFile');

Route::middleware(['auth', 'verified'])->group(function () {
    // User Dashboard
    Route::get('/dashboard', [UserDashboardController::class, 'UserDashboardPage'])->name('dashboard.user');
});

// Admin
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [AdminDashboardController::class, 'AdminDashboardPage'])->name('dashboard.admin');
    Route::post('/update-active-status/{encryptedUserId}', [AdminDashboardController::class, 'updateActiveStatus'])
        ->name('update.active.status');

    Route::post('/update-ad-slide-status/{encryptedUserId}', [AdminDashboardController::class, 'updateAdSlideStatus'])
        ->name('update.adSlide.status');

    Route::get('/edit-page/{id}', [AdminDashboardController::class, 'Edit_advertisement_slider_page']);
    Route::put('/edit-slider/{id}', [AdminDashboardController::class, 'Edit_advertisement_slider'])->name('edit-slider-page');

    Route::post('/add-carousel-slide', [AdminDashboardController::class, 'Create_slider'])->name('addslide');

    ////////////////////////////////////////
    Route::put('/update-member-slide-visibility/{encryptedUserId}', [AdminDashboardController::class, 'updateVisibility'])->name('update.visibility');

    // Route::get('/edit-member-page/{id}', [AdminDashboardController::class, 'Edit_member_page']);
    Route::put('/edit-member-page/{id}', [AdminDashboardController::class, 'Edit_member_slider'])->name('edit-member-page');

    Route::post('/add-member-carousel-slide', [AdminDashboardController::class, 'Create_member']);
});

Route::get('/add_blog', [AdminBlogController::class, 'add_blog']);

Route::prefix('/courses')->group(function () {
    Route::get('/artificial_intelligence', [CoursesController::class, 'AIPage'])->name('artificial_intelligence');
    Route::get('/algorithm', [CoursesController::class, 'algoPage'])->name('algorithm');
    Route::get('/c_programming', [CoursesController::class, 'CPage'])->name('c_programming');
    Route::get('/c_plus_plus', [CoursesController::class, 'C_Page'])->name('c_plus_plus');
    Route::get('/digital_electronics', [CoursesController::class, 'DEPage'])->name('digital_electronics');
    Route::get('/data_structure', [CoursesController::class, 'DSPage'])->name('data_structure');
    Route::get('/html', [CoursesController::class, 'HTMLPage'])->name('html');
    Route::get('/java', [CoursesController::class, 'JavaPage'])->name('java');
    Route::get('/javascript', [CoursesController::class, 'JSPage'])->name('javascript');
    Route::get('/microprocessor', [CoursesController::class, 'microPage'])->name('microprocessor');
    Route::get('/machine_learning', [CoursesController::class, 'mlPage'])->name('machine_learning');
    Route::get('/mysql', [CoursesController::class, 'MySqlPage'])->name('mysql');
    Route::get('/oop', [CoursesController::class, 'OOPPage'])->name('oop');
    Route::get('/php', [CoursesController::class, 'PHPPage'])->name('php');
    Route::get('/python', [CoursesController::class, 'PythonPage'])->name('python');
    Route::get('/react', [CoursesController::class, 'ReactPage'])->name('react');
    Route::get('/vlsi', [CoursesController::class, 'VLSIPage'])->name('vlsi');
    Route::get('/load_more', [MainController::class, 'Load_MorePage'])->name('load_more');

    Route::get('/{course}/{yt_link}/constructionsms', [MainController::class, 'ConstructionSmsPage'])
        ->name('constructionsms');
});
