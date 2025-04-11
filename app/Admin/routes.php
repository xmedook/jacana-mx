<?php

use App\Admin\Controllers\ContactController;
use App\Admin\Controllers\CustomCodeController;
use App\Admin\Controllers\DepartmentController;
use App\Admin\Controllers\PlaceController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('contacts', ContactController::class);
    $router->resource('departments', DepartmentController::class);
    $router->resource('places', PlaceController::class);
    $router->resource('custom-code', CustomCodeController::class);
});
