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
use App\Http\Livewire\Seller\SellerDashboardComponent;
use App\Http\Livewire\Seller\SellerEditProfileComponent;
use App\Http\Livewire\Seller\SellerProfileComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserEditProfileComponent;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Middleware\AuthAdmin;
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

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class)->name('product.cart');

Route::get('/checkout', CheckoutComponent::class);

// A dynamic route that passes {slug} into the mount() method inside DetailsComponent.
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');

// For the admin
Route::middleware(['auth:sanctum','verified'])->group(function ()
{
    Route::get('admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('admin/profile',AdminProfileComponent::class)->name('admin.profile');
    Route::get('admin/profile/edit',AdminEditProfileComponent::class)->name('admin.editprofile');
});

// For the seller
Route::middleware(['auth:sanctum','verified'])->group(function ()
{
    Route::get('seller/dashboard',SellerDashboardComponent::class)->name('seller.dashboard');
    Route::get('seller/profile',SellerProfileComponent::class)->name('seller.profile');
    Route::get('seller/profile/edit',SellerEditProfileComponent::class)->name('seller.editprofile');
});

// For the user
Route::middleware(['auth:sanctum','verified'])->group(function ()
{
    Route::get('user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('user/profile',UserProfileComponent::class)->name('user.profile');
    Route::get('user/profile/edit',UserEditProfileComponent::class)->name('user.editprofile');
});
