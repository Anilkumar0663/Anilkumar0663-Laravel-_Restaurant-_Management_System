<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

 

Route::get('/',[HomeController::class,"index"]);
Route::get('/redirects',[HomeController::class,"redirects"]);
Route::get('/users',[AdminController::class,"user"]);
Route::get('/deletemenu/{id}',[AdminController::class,"deleteMenu"]);
Route::get('/updatemenu/{id}',[AdminController::class,"updateMenu"]);
Route::post('/updatemenus/{id}',[AdminController::class,"updateMenus"]);
Route::get('/deleteuser/{id}',[AdminController::class,"delete"]);
Route::get('/foodmenu',[AdminController::class,"FoodMenu"]);
Route::post('/uploadfood',[AdminController::class,"uploadFood"]);
Route::post('/reservation',[AdminController::class,"Reservation"]);
Route::get('/viewreservation',[AdminController::class,"viewrReservation"]);
Route::get('/chef',[AdminController::class,"Chef"]);
Route::post('/uploadchef',[AdminController::class,"uploadChef"]);
Route::get('/viewchefs',[AdminController::class,"viewChefs"]);
Route::post('/updatedchef/{id}',[AdminController::class,"updatedChef"]);
Route::get('/deletechef/{id}',[AdminController::class,"deleteChef"]);
Route::get('/updatechef/{id}',[AdminController::class,"updateChef"]);
Route::post('/addcart/{id}',[HomeController::class,"addCart"]);
Route::post('/confirmorder',[HomeController::class,"confirmOrder"]);
Route::get('/showcart/{id}',[HomeController::class,"showCart"]);
Route::get('/remove/{id}',[HomeController::class,"remove"]);
Route::get('/vieworder',[AdminController::class,"viewOrders"]);
Route::post('/search',[AdminController::class,"searchOrders"]);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
