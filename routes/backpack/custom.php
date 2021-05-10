<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.


Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers',
], function () { 
    Route::get('/admin/register','RegisterController@showRegistrationForm')->name('backpack.auth.register');
    Route::post('/admin/register', 'RegisterController@register');
    // custom admin routes
}); // this should be the absolute last line of this file
