<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\v1\Customers\CustomersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*******************************************
 *******************************************
 *****  Customers API Version 1  ***************
 *******************************************
 *******************************************/


Route::namespace('Api\v1')->prefix('v1')->group(function () {
    Route::group(['namespace' => 'Customers'], function () {
        Route::resource('customers', CustomersController::class);
        Route::get('404', function(){
          $connection = mysqli_connect('mysql', 'root', 'test', 'test_app');
          $query =   mysqli_query($connection, "SELECT * FROM customers");
          var_dump($connection);
          dd($query);
        })->name('customers.external');
//         Route::get('external-customers', 'CustomersController@externalCustomer')->name('customers.external');
    });
});
