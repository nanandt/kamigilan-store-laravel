<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/details/{id}', 'DetailController@index')->name('detail');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@success')->name('success');
Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');


Route::get('/dashboard', 'DashboardController@index')
        ->name('dashboard');

Route::get('/dashboard/products', 'DashboardProductController@index')
        ->name('dashboard-product');
Route::get('/dashboard/products/create', 'DashboardProductController@create')
        ->name('dashboard-product-create');
Route::get('/dashboard/products/{id}', 'DashboardProductController@details')
        ->name('dashboard-product-details');

Route::get('/dashboard/transactions', 'DashboardTransactionController@index')
        ->name('dashboard-transaction');
Route::get('/dashboard/transactions/{id}', 'DashboardTransactionController@details')
        ->name('dashboard-transaction-details');

Route::get('/dashboard/settings', 'DashboardSettingController@store')
        ->name('dashboard-settings-store');
Route::get('/dashboard/account', 'DashboardSettingController@account')
        ->name('dashboard-settings-account');


Route::prefix('admin')
        ->namespace('Admin')
        ->group(function(){
            Route::get('/', 'DashboardController@index')->name('admin-dashboard');
        });

Auth::routes();

