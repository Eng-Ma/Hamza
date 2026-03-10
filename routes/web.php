<?php

use App\Http\Controllers\Admin\AboutsController;
use App\Http\Controllers\Admin\AngelesController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\StripeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\Admin\AuthAdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\logoutController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/signin');
});

Route::get('/signin', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth',  AdminMiddleware::class]], function () {
    /* start Dashboard */

    Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

    /* end Dashboard */


    /* start Category */

    Route::get('categories/index', [CategoriesController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::post('categories/store', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('categories/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::post('categories/update/{id}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::post('categories/delete/{id}', [CategoriesController::class, 'delete'])->name('categories.delete');
    Route::get('categories/toggle_active/{id}', [CategoriesController::class, 'toggle_active'])->name('categories.toggle_active');
    Route::get('categories/{id}/restore', [CategoriesController::class, 'restore'])->name('categories.restore');
    Route::get('categories/trash', [CategoriesController::class, 'trash'])->name('categories.trash');
    Route::post('categories/{id}/forcedelete', [CategoriesController::class, 'forcedelete'])->name('categories.forcedelete');
    Route::get('categories/{id}/movements', [CategoriesController::class, 'movements'])->name('categories.movements');

    /* end Category */

    // /* start products */
    Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('products/update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::post('products/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
    Route::get('products/toggle_active/{id}', [ProductController::class, 'toggle_active'])->name('products.toggle_active');
    Route::get('products/trash', [ProductController::class, 'trash'])->name('products.trash');
    Route::get('products/{id}/restore', [ProductController::class, 'restore'])->name('products.restore');
    Route::post('products/{id}/forcedelete', [ProductController::class, 'forcedelete'])->name('products.forcedelete');

    // /* end products */

    // /* start Users */
    Route::get('/users/index', [UsersController::class, 'index'])->name('users.index');
    Route::get('users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('users/store', [UsersController::class, 'store'])->name('users.store');
    Route::get('users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::post('users/update/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::post('users/delete/{id}', [UsersController::class, 'delete'])->name('users.delete');
    Route::get('users/toggle_active/{id}', [UsersController::class, 'toggle_active'])->name('users.toggle_active');
    Route::get('users/trash', [UsersController::class, 'trash'])->name('users.trash');
    Route::get('users/{id}/restore', [UsersController::class, 'restore'])->name('users.restore');
    Route::post('users/{id}/forcedelete', [UsersController::class, 'forcedelete'])->name('users.forcedelete');

    // /* end Users */

    // /* start articles */
    Route::get('/articles/index', [ArticlesController::class, 'index'])->name('articles.index');
    Route::get('articles/create', [ArticlesController::class, 'create'])->name('articles.create');
    Route::post('articles/store', [ArticlesController::class, 'store'])->name('articles.store');
    Route::get('articles/edit/{id}', [ArticlesController::class, 'edit'])->name('articles.edit');
    Route::post('articles/update/{id}', [ArticlesController::class, 'update'])->name('articles.update');
    Route::post('articles/delete/{id}', [ArticlesController::class, 'delete'])->name('articles.delete');
    Route::get('articles/toggle_active/{id}', [ArticlesController::class, 'toggle_active'])->name('articles.toggle_active');
    Route::get('articles/trash', [ArticlesController::class, 'trash'])->name('articles.trash');
    Route::get('articles/{id}/restore', [ArticlesController::class, 'restore'])->name('articles.restore');
    Route::post('articles/{id}/forcedelete', [ArticlesController::class, 'forcedelete'])->name('articles.forcedelete');

    // /* end articles */

    // /* start abouts */
    Route::get('/abouts/index', [AboutsController::class, 'index'])->name('abouts.index');
    Route::get('abouts/create', [AboutsController::class, 'create'])->name('abouts.create');
    Route::post('abouts/store', [AboutsController::class, 'store'])->name('abouts.store');
    Route::get('abouts/edit/{id}', [AboutsController::class, 'edit'])->name('abouts.edit');
    Route::post('abouts/update/{id}', [AboutsController::class, 'update'])->name('abouts.update');
    Route::post('abouts/delete/{id}', [AboutsController::class, 'delete'])->name('abouts.delete');
    Route::get('abouts/toggle_active/{id}', [AboutsController::class, 'toggle_active'])->name('abouts.toggle_active');
    Route::get('abouts/trash', [AboutsController::class, 'trash'])->name('abouts.trash');
    Route::get('abouts/{id}/restore', [AboutsController::class, 'restore'])->name('abouts.restore');
    Route::post('abouts/{id}/forcedelete', [AboutsController::class, 'forcedelete'])->name('abouts.forcedelete');

    // /* end abouts */

    /* start faqs */
    Route::get('orders/index', [OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/create', [OrderController::class, 'create'])->name('orders.create');
    Route::post('orders/store', [OrderController::class, 'store'])->name('orders.store');
    Route::get('orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
    Route::put('orders/{order}', [OrderController::class, 'update'])->name('orders.update');
    Route::get('orders/trash', [OrderController::class, 'trash'])->name('orders.trash');
    Route::get('orders/{id}/restore', [OrderController::class, 'restore'])->name('orders.restore');
    Route::post('orders/{id}/forcedelete', [OrderController::class, 'forcedelete'])->name('orders.forcedelete');
    Route::post('orders/delete/{id}', [OrderController::class, 'delete'])->name('orders.delete');
    Route::get('orders/toggle_active/{id}', [OrderController::class, 'toggle_active'])->name('orders.toggle_active');
    Route::post('orders/{order}/approve', [OrderController::class, 'approve'])->name('orders.approve');

    /* end faqs */

    /* start angeles */
    Route::get('/angeles/index', [AngelesController::class, 'index'])->name('angeles.index');
    Route::get('angeles/create', [AngelesController::class, 'create'])->name('angeles.create');
    Route::post('angeles/store', [AngelesController::class, 'store'])->name('angeles.store');
    Route::get('angeles/edit/{id}', [AngelesController::class, 'edit'])->name('angeles.edit');
    Route::post('angeles/update/{id}', [AngelesController::class, 'update'])->name('angeles.update');
    Route::post('angeles/delete/{id}', [AngelesController::class, 'delete'])->name('angeles.delete');
    Route::get('angeles/toggle_active/{id}', [AngelesController::class, 'toggle_active'])->name('angeles.toggle_active');
    Route::get('angeles/trash', [AngelesController::class, 'trash'])->name('angeles.trash');
    Route::get('angeles/{id}/restore', [AngelesController::class, 'restore'])->name('angeles.restore');
    Route::post('angeles/{id}/forcedelete', [AngelesController::class, 'forcedelete'])->name('angeles.forcedelete');

    /* end angeles */

    /* start faqs */
    Route::get('/faqs/index', [FaqsController::class, 'index'])->name('faqs.index');
    Route::get('faqs/create', [FaqsController::class, 'create'])->name('faqs.create');
    Route::post('faqs/store', [FaqsController::class, 'store'])->name('faqs.store');
    Route::get('faqs/edit/{id}', [FaqsController::class, 'edit'])->name('faqs.edit');
    Route::post('faqs/update/{id}', [FaqsController::class, 'update'])->name('faqs.update');
    Route::post('faqs/delete/{id}', [FaqsController::class, 'delete'])->name('faqs.delete');
    Route::get('faqs/toggle_active/{id}', [FaqsController::class, 'toggle_active'])->name('faqs.toggle_active');
    Route::get('faqs/trash', [FaqsController::class, 'trash'])->name('faqs.trash');
    Route::get('faqs/{id}/restore', [FaqsController::class, 'restore'])->name('faqs.restore');
    Route::post('faqs/{id}/forcedelete', [FaqsController::class, 'forcedelete'])->name('faqs.forcedelete');

    /* end faqs */

    /* start faqs */
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('contacts/store', [ContactController::class, 'store'])->name('contacts.store');
    Route::get('contacts/edit/{id}', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('contacts/update/{id}', [ContactController::class, 'update'])->name('contacts.update');
    Route::post('contacts/delete/{id}', [ContactController::class, 'delete'])->name('contacts.delete');
    Route::get('contacts/toggle_active/{id}', [ContactController::class, 'toggle_active'])->name('contacts.toggle_active');
    Route::get('contacts/trash', [ContactController::class, 'trash'])->name('contacts.trash');
    Route::get('contacts/{id}/restore', [ContactController::class, 'restore'])->name('contacts.restore');
    Route::post('contacts/{id}/forcedelete', [ContactController::class, 'forcedelete'])->name('contacts.forcedelete');

    /* end faqs */
    /* start settings */
    Route::get('/settings/index', [SettingsController::class, 'index'])->name('settings.index');
    Route::get('settings/create', [SettingsController::class, 'create'])->name('settings.create');
    Route::post('settings/store', [SettingsController::class, 'store'])->name('settings.store');
    Route::get('settings/edit/{id}', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::post('settings/update/{id}', [SettingsController::class, 'update'])->name('settings.update');
    Route::post('settings/delete/{id}', [SettingsController::class, 'delete'])->name('settings.delete');
    Route::get('settings/toggle_active/{id}', [SettingsController::class, 'toggle_active'])->name('settings.toggle_active');
    Route::get('settings/trash', [SettingsController::class, 'trash'])->name('settings.trash');
    Route::get('settings/{id}/restore', [SettingsController::class, 'restore'])->name('settings.restore');
    Route::post('settings/{id}/forcedelete', [SettingsController::class, 'forcedelete'])->name('settings.forcedelete');

    /* end settings */

    /*              start profile                                     */
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('reset-password', [ProfileController::class, 'showResetPasswordForm'])
        ->name('reset.password');

    Route::post('reset-password', [ProfileController::class, 'resetPassword'])
        ->name('reset.password.post');

    /*              end profile */

    Route::get('notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::get('notifications/markAllRead', [NotificationController::class, 'markAllRead'])->name('notifications.markAllRead');
});

Route::delete('admin/logout', [logoutController::class, 'logout'])->name('admin.logout')->middleware('auth');
Auth::routes();

/* start web application */


Route::get('web/index', [IndexController::class, 'index'])->name('web.index');
Route::get('web/shop', [IndexController::class, 'shop'])->name('web.shop');
Route::get('web/product/show/{id}', [IndexController::class, 'show'])->name('web.product.show');

Route::get('web/about', [IndexController::class, 'about'])->name('web.about');
Route::get('web/product_detailes', [IndexController::class, 'product_detailes'])->name('web.product_detailes');
Route::get('web/introduction', [IndexController::class, 'introduction'])->name('web.introduction');
Route::get('web/articles', [IndexController::class, 'articles'])->name('web.articles');
Route::get('web/articles/readMore/{id}', [IndexController::class, 'readMore_id'])->name('web.readMore');
Route::get('web/contact', [IndexController::class, 'contact'])->name('web.contact');
Route::get('web/faqs', [IndexController::class, 'faqs'])->name('web.faqs');

Route::get('/signin', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/signin', [LoginController::class, 'login']);

// Cart routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->middleware(['auth'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');

// Checkout routes
Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', [CartController::class, 'checkoutPage'])->name('checkout');
    Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout.place');
});
// Payment success route (GET redirect بعد الدفع)
Route::get('/payment/success/{order}', [CartController::class, 'paymentSuccess'])->name('payment.success');

/* تسجيل الخروج */
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


/* end web application */
