<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'showHomePage'])->name('showHomePage');
Route::get('/journal',[HomeController::class,'showJournalPage'])->name('showJournalPage');
Route::get('/actions',[HomeController::class,'showActionsPage'])->name('showActionsPage');
Route::get('/certify',[HomeController::class,'showCertifyPage'])->name('showCertifyPage');
Route::get('/shop',[ShopController::class,'showShopPage'])->name('showShopPage');
Route::get('/catalog/{category?}', [CatalogController::class, 'showCatalogPage'])->name('showCatalogPage');
Route::get('/gallery', [CatalogController::class, 'showGalleryPage'])->name('showGalleryPage');
Route::get('/cart', [CatalogController::class, 'showCartPage'])->name('showCartPage');
Route::get('/contact', [HomeController::class, 'showContactPage'])->name('showContactPage');
Route::get('/contact/rekvizit', [HomeController::class, 'showRekvizitPage'])->name('showRekvizitPage');
Route::get('/hit-product', [HomeController::class, 'showHitProductPage'])->name('showHitProductPage');
Route::get('/about-brand', [HomeController::class, 'showAboutBrandPage'])->name('showAboutBrandPage');
Route::get('/casino', [HomeController::class, 'showCasinoPage'])->name('showCasinoPage');
Route::get('/microfibra', [HomeController::class, 'showFibraPage'])->name('showFibraPage');
Route::get('/manufacture', [HomeController::class, 'showManufacturePage'])->name('showManufacturePage');
Route::get('/news', [HomeController::class, 'showNewsPage'])->name('showNewsPage');
Route::get('/alisa', [HomeController::class, 'showAlisaPage'])->name('showAlisaPage');
Route::get('/login', [HomeController::class, 'showLoginPage'])->name('showLoginPage');
Route::get('/registration', [HomeController::class, 'showRegistrationPage'])->name('showRegistrationPage');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/admin',[AdminLoginController::class,'showAdminLoginPage'])->name('showAdminLoginPage');
Route::post('/checkAdminLogin',[AdminLoginController::class,'checkAdminLogin'])->name('checkAdminLogin');


Route::middleware(['auth'])->group(function () {
    Route::get('/settings', [HomeController::class, 'showSettingsPage'])->name('showSettingsPage');
    Route::post('/update', [HomeController::class, 'update'])->name('update');
});


Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/home', [IndexController::class, 'showAdminHomePage'])->name('showAdminHomePage');
    Route::get('/import', [IndexController::class, 'showImportPage'])->name('showImportPage');
    Route::get('/logout',[AdminLoginController::class,'AdminLogOut'])->name('AdminLogOut');
    Route::get('/products', [AdminController::class, 'showAddProductPage'])->name('showAddProductPage');
    Route::post('add-product', [AdminController::class, 'addProduct'])->name('addProduct');


});
