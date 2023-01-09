<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Frontend\VendorController;
use App\Http\Controllers\Frontend\FrontendController;
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



Route::get('/', [FrontendController::class, 'index']);
Route::get('/vendor/register', [VendorController::class, 'vendorRegister']);
Route::post('/vendor/registration', [VendorController::class, 'vendorRegistration']);
Route::post('/vendor/login', [VendorController::class, 'vendorLogin']);
Route::post('/vendor/dashboard', [VendorController::class, 'vendorDashboard']);



// AdminController route
Route::get('/admin/login', [AdminController::class, 'adminLoginForm']);
Route::post('/admin/login', [AdminController::class, 'adminLogin']);
Route::get('/admin/deshboard', [AdminController::class, 'adminDeshboard']);
Route::get('/admin/logout', [AdminController::class, 'adminLogout']);

// Category Controller
Route::get('category/create', [CategoryController::class, 'categoryCreate']);
Route::get('category/manage', [CategoryController::class, 'categoryManage']);
Route::post('category/store', [CategoryController::class, 'categoryStore']);
Route::get('category/delete/{id}', [CategoryController::class, 'categoryDelete']);
Route::get('category/edit/{id}', [CategoryController::class, 'categoryEdit']);
Route::post('category/update/{id}', [CategoryController::class, 'categoryUpdate']);

// SubCategory Controller
Route::get('/subcategory/create', [SubcategoryController::class, 'subcategoryCreate']);
Route::get('/subcategory/manage', [SubcategoryController::class, 'subcategoryManage']);
Route::post('/subcategory/store', [SubcategoryController::class, 'subcategoryStore']);
Route::get('subcategory/delete/{id}', [SubcategoryController::class, 'subcategoryDelete']);
Route::get('subcategory/edit/{id}', [SubcategoryController::class, 'subcategoryEdit']);
Route::post('subcategory/update/{id}', [SubcategoryController::class, 'subcategoryUpdate']);

// Brand Controller
Route::get('/brand/create', [BrandController::class, 'brandCreate']);
Route::get('/brand/manage', [BrandController::class, 'brandManage']);
Route::post('/brand/store', [BrandController::class, 'brandStore']);

// Color Controller
Route::get('/color/create', [ColorController::class, 'colorCreate']);
Route::get('/color/manage', [ColorController::class, 'colorManage']);
Route::post('/color/store', [ColorController::class, 'colorStore']);