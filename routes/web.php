<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicenceTypeController;
use App\Http\Controllers\LicenceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewLicenceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AuthorityController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-company',[CompanyController::class,'index'] );
Route::post('/store-company',[CompanyController::class,'store'] );


Route::get('/licence-type',[LicenceTypeController::class,'index'] );
Route::post('/store-licence-type',[LicenceTypeController::class,'store'] );

Route::get('/create-authority',[AuthorityController::class,'index'] );
Route::post('/store-authority',[AuthorityController::class,'store'] );

Route::get('/create-licence',[LicenceController::class,'index'] );
Route::post('/store-licence',[LicenceController::class,'store'] );

Route::get('/',[HomeController::class,'index'] );
Route::get('/view-licence/{id}',[HomeController::class,'show'] );

// Route::resource('licence', 'App\Http\Controllers\LicenceController'); 
