<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CvController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin',[DashboardController::class,'index']);
Route::get('/career-index',[CareerController::class,'index']);
Route::get('/career2',[DashboardController::class,'career2']);

Route::get('/about-us',[DashboardController::class,'about']);
Route::get('/layout',[DashboardController::class,'layout']);
Route::get('/index',[DashboardController::class,'index2']);

Route::get('/contact',[DashboardController::class,'contact']);
Route::get('/sdp',[DashboardController::class,'sdp']);
Route::get('/sd',[DashboardController::class,'sd']);
Route::get('/msd',[DashboardController::class,'msd']);
Route::get('/fsd',[DashboardController::class,'fsd']);


Route::get('/ab',[CvController::class,'showUploadForm']);
Route::post('/cv-upload',[CvController::class,'uploadcv'])->name('upload_cv');

Route::get('/showUpload1',[CvController::class,'showUpload1']);
Route::post('/Cv1',[CvController::class,'Cv1'])->name('upload_cv1');

Route::get('/showUpload2',[CvController::class,'showUpload2']);
Route::post('/Cv2',[CvController::class,'Cv2'])->name('upload_cv2');

Route::get('/showUpload3',[CvController::class,'showUpload3']);
Route::post('/Cv3',[CvController::class,'Cv3'])->name('upload_cv3');


