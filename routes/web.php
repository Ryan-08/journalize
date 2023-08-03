<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoutteController;
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


Route::get('/pdf', [App\Http\Controllers\PdfController::class, 'index'])->name('showPdf');
Route::get('/export-pdf', [App\Http\Controllers\PdfController::class, 'exportPdf'])->name('exportPdf');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('profile', [PageController::class, 'profile'])->name('profile');
Route::get('research', [PageController::class, 'research'])->name('research');
Route::get('project', [PageController::class, 'project'])->name('project');
Route::get('activities', [PageController::class, 'activities'])->name('activities');

// AUTH
Route::get('login', [PageController::class, 'login'])->name('login');
Route::get('register', [PageController::class, 'register'])->name('register');
Route::get('account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('user.verify'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// AUTH POST
Route::post('postLogin', [AuthController::class, 'postLogin'])->name('postLogin');
Route::post('postRegister', [AuthController::class, 'postRegister'])->name('postRegister');

// inside
Route::get('profile/id', [PageController::class, 'openProfile'])->name('viewProfile');
Route::get('research/id', [PageController::class, 'openResearch'])->name('viewResearch');
Route::get('project/id_project', [PageController::class, 'openProject'])->name('viewProject');
Route::get('activities/id_activity', [PageController::class, 'openActivities'])->name('viewActivity');

// EVENT
// view auth menu
Route::group(['middleware' => ['auth', 'is_verify_email']], function () {
    Route::get('auth/profile', [EventController::class, 'profile'])->name('auth.profile');
    Route::get('auth/project', [EventController::class, 'project'])->name('auth.project');
    Route::get('auth/research', [EventController::class, 'research'])->name('auth.research');
    Route::get('auth/activities', [EventController::class, 'activities'])->name('auth.activities');
});

// edit action
// Route::get('auth/project/{id}', [EventController::class, 'project']);

// delete action

// admin
Route::get('admin/dashboard', [GoutteController::class, 'adminDashboard'])->name('dashboard');
Route::get('scrapp', [GoutteController::class, 'doCrawlGS'])->name('Crawl');
Route::get('saveToDB', [GoutteController::class, 'SaveToDB'])->name('saveCrawled');