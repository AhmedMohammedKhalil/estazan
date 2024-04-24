<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');

Route::middleware(['guest:admin','guest:teacher'])->group(function () {
    Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
    Route::get('/teacher/login', 'TeacherController@showLoginForm')->name('teacher.login');
    Route::get('/teacher/register', 'TeacherController@showRegisterForm')->name('teacher.register');

});


Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/profile', 'AdminController@profile')->name('profile');
    Route::get('/settings', 'AdminController@settings')->name('settings');
    Route::get('/changePassword', 'AdminController@changePassword')->name('changePassword');
    Route::get('/logout', 'AdminController@logout')->name('logout');


    Route::prefix('/service')->name('service.')->group(function () {
        Route::get('/index', 'ServiceController@index')->name('index');
        Route::get('/edit', 'ServiceController@edit')->name('edit');
    });

    Route::prefix('teachers')->name('teachers.')->group(function () {
        Route::get('/', 'TeacherController@index')->name('index');
    });

    Route::prefix('/about')->name('about.')->group(function () {
        Route::get('/index', 'AboutsController@index')->name('index');
        Route::get('/edit', 'AboutsController@edit')->name('edit');
    });

    Route::prefix('gallaries')->name('gallaries.')->group(function () {
        Route::get('/', 'GallaryController@index')->name('index');
        Route::get('/create', 'GallaryController@create')->name('create');
        Route::get('/edit', 'GallaryController@edit')->name('edit');
        Route::delete('/delete', 'GallaryController@destroy')->name('delete');

    });

    Route::prefix('/slider')->name('slider.')->group(function () {
        Route::get('/index', 'SlidersController@index')->name('index');
        Route::get('/create', 'SlidersController@create')->name('create');
        Route::get('/edit', 'SlidersController@edit')->name('edit');
        Route::delete('/delete', 'SlidersController@delete')->name('delete');
    });

    Route::prefix('messages')->name('messages.')->group(function () {
        Route::get('/', 'MessageController@index')->name('index');
    });


    Route::prefix('/permissions')->name('permissions.')->group(function () {
        Route::get('/index', 'PermissionController@allPermissions')->name('index');
        Route::get('/show', 'PermissionController@adminShowPermission')->name('show');
        Route::get('/accept', 'PermissionController@acceptPermission')->name('accept');
        Route::get('/reject', 'PermissionController@rejectPermission')->name('reject');
    });


    Route::prefix('/complaints')->name('complaints.')->group(function () {
        Route::get('/index', 'ComplaintController@allComplaints')->name('index');
        Route::get('/addreply', 'ComplaintController@addreply')->name('addreply');
        Route::get('/editreply', 'ComplaintController@editreply')->name('editreply');
        Route::get('/show', 'ComplaintController@adminShowComplaint')->name('show');
    });


    Route::prefix('/announcements')->name('announcements.')->group(function () {
        Route::get('/index', 'AnnouncementController@index')->name('index');
        Route::get('/create', 'AnnouncementController@create')->name('create');
        Route::get('/edit', 'AnnouncementController@edit')->name('edit');
        Route::delete('/delete', 'AnnouncementController@delete')->name('delete');
        Route::get('/show', 'AnnouncementController@adminShowAnnouncement')->name('show');

    });

});



Route::middleware(['auth:teacher'])->name('teacher.')->prefix('teacher')->group(function () {
    Route::get('/profile', 'teacherController@profile')->name('profile');
    Route::get('/settings', 'teacherController@settings')->name('settings');
    Route::get('/changePassword', 'teacherController@changePassword')->name('changePassword');
    Route::get('/logout', 'teacherController@logout')->name('logout');

    Route::prefix('/permissions')->name('permissions.')->group(function () {
        Route::get('/index', 'PermissionController@index')->name('index');
        Route::get('/create', 'PermissionController@create')->name('create');
        Route::get('/edit', 'PermissionController@edit')->name('edit');
        Route::delete('/delete', 'PermissionController@delete')->name('delete');
        Route::get('/show', 'PermissionController@teacherShowPermission')->name('show');
    });


    Route::prefix('/complaints')->name('complaints.')->group(function () {
        Route::get('/index', 'ComplaintController@index')->name('index');
        Route::get('/create', 'ComplaintController@create')->name('create');
        Route::get('/edit', 'ComplaintController@edit')->name('edit');
        Route::delete('/delete', 'ComplaintController@delete')->name('delete');
        Route::get('/show', 'ComplaintController@teacherShowComplaint')->name('show');
    });


    Route::prefix('/announcements')->name('announcements.')->group(function () {
        Route::get('/index', 'AnnouncementController@allAnnouncements')->name('index');
        Route::get('/show', 'AnnouncementController@teacherShowAnnouncement')->name('show');

    });


});
