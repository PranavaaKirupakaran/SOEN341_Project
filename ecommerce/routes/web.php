<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditProfileComponent;
use App\Http\Livewire\Admin\AdminProfileComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdmiAddCouponComponent;
use App\Http\Livewire\Admin\AdmiEditCouponComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\Seller\SellerDashboardComponent;
use App\Http\Livewire\Seller\SellerEditProfileComponent;
use App\Http\Livewire\Seller\SellerProfileComponent;
use App\Http\Livewire\Seller\SellerCategoryComponent;
use App\Http\Livewire\Seller\SellerAddCategoryComponent;
use App\Http\Livewire\Seller\SellerEditCategoryComponent;
use App\Http\Livewire\Seller\SellerProductComponent;
use App\Http\Livewire\Seller\SellerAddProductComponent;
use App\Http\Livewire\Seller\SellerEditProductComponent;
use App\Http\Livewire\Seller\SellerOrderComponent;
use App\Http\Livewire\Seller\SellerOrderDeatilsComponent;
use App\Http\Livewire\ThankYouComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserEditProfileComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserReviewComponent;
use App\Http\Livewire\WishlistComponent;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthSeller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| All the ecommerce application routes are registered in this file.
| The routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
*/

// Instead of returning the views from the routes directly, the routes are set to go
// to specific components. Then the component itself, will render the particular view.
// The ::class syntax allow to declare a class without passing it as a string.
// E.g. just an example to illustrate User::class == 'App\User
// In simple words, Route::get('from here', 'to there')

Route::get('/', HomeComponent::class);
Route::get('/forgot-password',function(){
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::get('/shop', ShopComponent::class)->name('product.shop');

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/checkout', CheckoutComponent::class)->name('checkout');

// A dynamic route that passes {slug} into the mount() method inside DetailsComponent.
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');

Route::get('/search', SearchComponent::class)->name('product.search');

Route::get('/wishlist', WishlistComponent::class)->name('product.wishlist');


Route::get('/thank-you', ThankYouComponent::class)->name('thankyou');

// For the admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('admin/profile', AdminProfileComponent::class)->name('admin.profile');
    Route::get('admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('admin/profile/edit', AdminEditProfileComponent::class)->name('admin.editprofile');
    Route::get('admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    Route::get('admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('admin/addproducts', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');
    Route::get('admin/coupons', AdminCouponsComponent::class)->name('admin.coupons');
    Route::get('admin/coupon/add', AdmiAddCouponComponent::class)->name('admin.addcoupon');
    Route::get('admin/coupon/edit/{coupon_id}', AdmiEditCouponComponent::class)->name('admin.editcoupon');
    Route::get('admin/orders',AdminOrderComponent::class)->name('admin.orders');
    Route::get('admin/orders/{order_id}',AdminOrderDetailsComponent::class)->name('admin.orderdetails');
});

// For the seller
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('seller/dashboard', SellerDashboardComponent::class)->name('seller.dashboard');
    Route::get('seller/profile', SellerProfileComponent::class)->name('seller.profile');
    Route::get('seller/categories', SellerCategoryComponent::class)->name('seller.categories');
    Route::get('seller/profile/edit', SellerEditProfileComponent::class)->name('seller.editprofile');
    Route::get('seller/category/add', SellerAddCategoryComponent::class)->name('seller.addcategory');
    Route::get('seller/category/edit/{category_slug}', SellerEditCategoryComponent::class)->name('seller.editcategory');
    Route::get('seller/products', SellerProductComponent::class)->name('seller.products');
    Route::get('seller/products/addproducts', SellerAddProductComponent::class)->name('seller.addproduct');
    Route::get('seller/product/edit/{product_slug}', SellerEditProductComponent::class)->name('seller.editproduct');
    Route::get('seller/orders',SellerOrderComponent::class)->name('seller.orders');
    Route::get('seller/orders/{order_id}',SellerOrderDeatilsComponent::class)->name('seller.orderdetails');
});

// For the user
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    Route::get('user/profile', UserProfileComponent::class)->name('user.profile');
    Route::get('user/profile/edit', UserEditProfileComponent::class)->name('user.editprofile');
    Route::get('user/orders',UserOrdersComponent::class)->name('user.orders');
    Route::get('user/orders/{order_id}',UserOrderDetailsComponent::class)->name('user.orderdetails');
    Route::get('user/review/{order_item_id}',UserReviewComponent::class)->name('user.review');
    Route::get('user/change-password',UserChangePasswordComponent::class)->name('user.changepassword');
});
