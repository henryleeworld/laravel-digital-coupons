<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'App\Http\Controllers\Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Coupons
    Route::post('coupons/media', 'CouponsApiController@storeMedia')->name('coupons.storeMedia');
    Route::apiResource('coupons', 'CouponsApiController');

    // Codes
    Route::apiResource('codes', 'CodesApiController');

    // Purchases
    Route::apiResource('purchases', 'PurchasesApiController');
});
