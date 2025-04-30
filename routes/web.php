<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarpenterController;
use App\Http\Controllers\ElectricianController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PlumberController;
use App\Http\Controllers\YogaFitnessController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController as FrontendOrderController; // Alias for non-admin OrderController
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PainterController;
use App\Http\Controllers\GardenerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CleanerController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ContactMessageController;

use Illuminate\Support\Facades\Route;

// -------------------------------------------------------------------
// General Routes
// -------------------------------------------------------------------
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/language/{locale}', [LanguageController::class, 'switchLang'])->name('language.switch');

// -------------------------------------------------------------------
// Authentication Routes (User)
// -------------------------------------------------------------------
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// -------------------------------------------------------------------
// Service Routes (Public)
// -------------------------------------------------------------------
// Carpenter
Route::get('/carpenter', [CarpenterController::class, 'index'])->name('carpenter');
Route::get('/filter-products', [CarpenterController::class, 'filterProducts'])->name('filter.products');

// Electrician
Route::get('/electrician', [ElectricianController::class, 'index'])->name('electrician');
Route::get('/filter-electrician-products', [ElectricianController::class, 'filterProducts'])->name('filter.electrician.products');
Route::get('/electrician', [ElectricianController::class, 'index'])->name('electrician.index');
Route::get('/electrician/filter', [ElectricianController::class, 'filterProducts'])->name('electrician.filter.products');
Route::get('/electrician/cart', [ElectricianController::class, 'cart'])->name('electrician.cart.index');

// Plumber
Route::get('/plumber', [PlumberController::class, 'index'])->name('plumber');
Route::get('/filter-plumber-products', [PlumberController::class, 'filterProducts'])->name('filter.plumber.products');
Route::get('/plumber', [PlumberController::class, 'index'])->name('plumber.index');
Route::get('/plumber/filter', [PlumberController::class, 'filterProducts'])->name('plumber.filter.products');
Route::get('/plumber/cart', [PlumberController::class, 'cart'])->name('plumber.cart.index');

// Yoga Fitness
Route::get('/yoga-fitness', [YogaFitnessController::class, 'index'])->name('yoga.fitness');
Route::get('/filter-yoga-products', [YogaFitnessController::class, 'filterProducts'])->name('filter.yoga.products');
Route::get('/yoga-fitness', [YogaFitnessController::class, 'index'])->name('yoga.index');
Route::get('/yoga-fitness/filter', [YogaFitnessController::class, 'filterProducts'])->name('yoga.filter.products');
Route::get('/yoga-fitness/cart', [YogaFitnessController::class, 'cart'])->name('yoga.cart.index');

// Coming Soon Services
Route::get('/painter', [PainterController::class, 'index'])->name('painter.index');
Route::get('/gardener', [GardenerController::class, 'index'])->name('gardener.index');
Route::get('/cleaner', [CleanerController::class, 'index'])->name('cleaner.index');
Route::get('/driver', [DriverController::class, 'index'])->name('driver.index');

// -------------------------------------------------------------------
// Authenticated User Routes (Cart, Orders, Saved Items, Feedback)
// -------------------------------------------------------------------
Route::middleware('auth')->group(function () {
    // Cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

    // Orders (Frontend)
    Route::get('/order', [FrontendOrderController::class, 'create'])->name('order.create');
    Route::post('/order', [FrontendOrderController::class, 'store'])->name('order.store');
    Route::get('/thank-you/{order}', [FrontendOrderController::class, 'thankYou'])->name('order.thank-you');
    Route::get('/order/{order}/download-receipt', [FrontendOrderController::class, 'downloadReceipt'])->name('order.download-receipt');

    // Order History
    Route::get('/order-history', [OrderController::class, 'orderHistory'])->name('order.history');
    Route::get('/order-history/download-csv', [OrderController::class, 'downloadOrderHistoryCsv'])->name('order.history.csv');
    Route::get('/order/{order}/receipt', [OrderController::class, 'downloadReceipt'])->name('order.receipt');

    // Saved Items & Likes/Wishlist (Carpenter)
    Route::get('/saved-items/count', [CarpenterController::class, 'getSavedItemsCount'])->name('saved.items.count');
    Route::get('/saved-items', [CarpenterController::class, 'showSavedItems'])->name('saved.items');
    Route::post('/product/like', [CarpenterController::class, 'likeProduct'])->name('product.like');
    Route::post('/wishlist/add', [CarpenterController::class, 'addToWishlist'])->name('wishlist.add');
    Route::get('/saved-items', [CarpenterController::class, 'showSavedItems'])->name('saved.items');

    // Electrician Likes/Wishlist
    Route::post('/electrician/like', [ElectricianController::class, 'likeProduct'])->name('electrician.product.like');
    Route::post('/electrician/wishlist', [ElectricianController::class, 'addToWishlist'])->name('electrician.wishlist.add');
    Route::get('/electrician/saved-items/count', [ElectricianController::class, 'getSavedItemsCount'])->name('electrician.saved.items.count');

    // Yoga Fitness Likes/Wishlist
    Route::post('/yoga-fitness/like', [YogaFitnessController::class, 'likeProduct'])->name('yoga.product.like');
    Route::post('/yoga-fitness/wishlist', [YogaFitnessController::class, 'addToWishlist'])->name('yoga.wishlist.add');
    Route::get('/yoga-fitness/saved-items/count', [YogaFitnessController::class, 'getSavedItemsCount'])->name('yoga.saved.items.count');

    // Plumber Likes/Wishlist
    Route::post('/plumber/like', [PlumberController::class, 'likeProduct'])->name('plumber.product.like');
    Route::post('/plumber/wishlist', [PlumberController::class, 'addToWishlist'])->name('plumber.wishlist.add');
    Route::get('/plumber/saved-items/count', [PlumberController::class, 'getSavedItemsCount'])->name('plumber.saved.items.count');

    // Feedback
    Route::post('/order/{order}/feedback', [FeedbackController::class, 'submit'])->name('feedback.submit');
});

// -------------------------------------------------------------------
// Contact Routes
// -------------------------------------------------------------------
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// -------------------------------------------------------------------
// Admin Routes
// -------------------------------------------------------------------
Route::prefix('admin')->group(function () {
    // Admin Authentication
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    // Admin Protected Routes
    Route::middleware('admin')->group(function () {
        // Dashboard
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        // Users
        Route::resource('users', UserController::class);
        Route::get('export', [UserController::class, 'export'])->name('users.export');
        Route::get('users.export', [UserController::class, 'export'])->name('users.export');

        // Products
        Route::get('/products/export', [ProductController::class, 'export'])->name('products.export');
        Route::resource('products', ProductController::class);

        // Services
        Route::resource('services', ServiceController::class);

        // Orders
        Route::resource('orders', AdminOrderController::class);
        Route::get('export', [AdminOrderController::class, 'export'])->name('orders.export');

        // Contact Messages
        Route::resource('contact-messages', ContactMessageController::class);
    });
});
