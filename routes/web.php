<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;

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
// web route

Route::get('/',[WebController::class,'homeView']);
Route::get('/listing',[WebController::class,'listingView']);
Route::get('/listing-details',[WebController::class,'listingdetailsView']);
Route::get('/contact',[WebController::class,'contactView']);
Route::get('/pricing',[WebController::class,'pricingView']);


// admin route
Route::get('/admin',[AdminController::class,'dashboardView']);
Route::get('/admin/add-listing',[AdminController::class,'addlistingView']);
Route::get('/admin/my-listing',[AdminController::class,'mylistingView']);
Route::get('/admin/visitor-review',[AdminController::class,'visitorreviewView']);
Route::get('/admin/submitted-review',[AdminController::class,'submittedreviewView']);
Route::get('/admin/my-profile',[AdminController::class,'myprofileView']);
Route::get('/admin/change-password',[AdminController::class,'changepasswordView']);
Route::get('/admin/messages',[AdminController::class,'messagesView']);
Route::get('/admin/messages-details',[AdminController::class,'messagesdetailsView']);
Route::get('/admin/invoice',[AdminController::class,'invoiceView']);