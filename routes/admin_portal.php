<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
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



Route::middleware('role:superadministrator|administrator|developer')->group(function (){

    Route::get('/executive', function () {
        return view('admin/dashboard');
    })->name('admin.home');


    Route::get('/admin/settings', [SettingController::class, 'settings'])->name('admin.settings');

    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

    Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');

    Route::get('/admin/mentors', [MentorController::class, 'mentors'])->name('admin.mentors');

    /*
     *
     * Blog routes
     *
     */
    Route::get('/blog/new', [BlogController::class, 'newBlog'])->name('blog.new');
    Route::get('/blog/list', [BlogController::class, 'blogs'])->name('blog.list');
    Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');

    /*
     *
     * Team routes
     *
     */
    Route::get('/team/add',       [TeamController::class, 'newMember'])->name('team.add');
    Route::get('/team/list',      [TeamController::class, 'list'])->name('team.list');
    Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
});







Route::get('/auth/facebook', [AdminController::class, 'redirectToFacebook'])->name('auth.facebook');

Route::get('/auth/facebook/{facebook_id}/password', [AdminController::class, 'selectFacebookPassword'])->name('auth.facebook.password');

Route::get('/auth/facebook/callback', [AdminController::class, 'handleFacebookCallback'])->name('auth.facebook.callback');


Route::middleware('role:superadministrator|administrator|developer')->group(function (){

Route::get('/executive', function () {
    return view('admin/dashboard');
})->name('admin.home');


Route::get('/admin/settings', [SettingController::class, 'settings'])->name('admin.settings');

Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');

Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');

Route::get('/admin/mentors', [MentorController::class, 'mentors'])->name('admin.mentors');

/*
 *
 * Blog routes
 *
 */
Route::get('/blog/new', [BlogController::class, 'newBlog'])->name('blog.new');
Route::get('/blog/list', [BlogController::class, 'blogs'])->name('blog.list');
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');

/*
 *
 * Team routes
 *
 */
Route::get('/team/add',       [TeamController::class, 'newMember'])->name('team.add');
Route::get('/team/list',      [TeamController::class, 'list'])->name('team.list');
Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');
});
