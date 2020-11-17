<?php

use App\Http\Controllers\MenteeController;
use App\Http\Controllers\MentorshipController;
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
Route::get('/mentee/register', [MenteeController::class, 'menteeRegister'])->name('mentee.register');

Route::middleware('role:mentee|administrator|superadministrator|developer')->group(function (){
    Route::get('/mentee/dashboard',                [MenteeController::class, 'menteeDashboard'])->name('mentee.dashboard');
    Route::get('/mentee/profile',                  [MenteeController::class, 'menteeProfileSettings'])->name('mentee.profile.settings');
    Route::get('/mentee/info',                     [MenteeController::class, 'menteeProfile'])->name('mentee.profile');
    Route::get('/mentee/profile/update',           [MenteeController::class, 'updateProfile'])->name('mentee.profile.update');
    Route::get('/mentee/apprenticeship/find',      [MenteeController::class, 'findApprenticeship'])->name('mentee.apprenticeship.find');
    Route::get('/apprenticeship/{id}/view',        [MenteeController::class, 'viewApprenticeship'])->name('mentee.apprenticeship.view');
    Route::get('/apprenticeship/{id}/success',     [MenteeController::class, 'applicationSuccess'])->name('mentee.apprenticeship.view');

    /**
     * Apprenticeship platform routes
     */
    Route::get('/mentee/{id}/app',/*id = connect_id*/                  [MentorshipController::class, 'menteeAppDashboard'])->name('mentee.app.dashboard');
    Route::get('/mentee/{id}/goal',/*id = connect_id*/                 [MentorshipController::class, 'menteeAppGoal'])->name('mentee.app.goal');
});



