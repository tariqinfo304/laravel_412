<?php

use Illuminate\Support\Facades\Route;

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
    echo "Home Page";
});
// Route::get('/hello', function () {
//     echo "hello Page";
// });

Route::get('/hello/test/tariq', function () {
    echo "Home Page";
});

//Routes parameters
Route::get('/std/{id}', function ($id) {
    echo "Student ID:$id";
});

Route::get('/book/{id}/name/{name}', function ($id,$name) {
    echo "Book ID:$id , Name : $name";
});

//default valeu of route parameter
Route::get('/test/{id?}', function ($id=NULL) {
    echo "Student ID:$id";
});

//route parameters  validation
Route::get("car/{id}/{name}", function($id,$name) {

    echo "$id : $name";
})->where(["id"=>"[0-9]+","name" =>"[a-zA-Z]{5}"]);


////////////
//////// Controller
/////////////////////

use App\Http\Controllers\HelloController;

Route::get("hello/{id}",[HelloController::class,"test"]);

use App\Http\Controllers\StudentController;

Route::resource("student",StudentController::class);

/////////////////
/////// Views
////////////////

Route::get("view",[\App\Http\Controllers\ViewController::class,"index"]);

//////////
// ORM /
//

Route::get("orm",[\App\Http\Controllers\ORMController::class,"index"]);


////////////
// Template integrated into website form
/////////////

/*
Route::get("store",[\App\Http\Controllers\Store\HomeController::class,"index"]);
Route::get("store/cart",[\App\Http\Controllers\Store\CartController::class,"cart"]);
Route::get("store/checkout",[\App\Http\Controllers\Store\CartController::class,"checkout"]);
Route::resource("store/product",\App\Http\Controllers\Store\ProductController::class)
->middleware("store_session");
*/

Route::middleware(['store_secuirty'])->group(function(){
    Route::get("store",[\App\Http\Controllers\Store\HomeController::class,"index"]);
    Route::get("store/cart",[\App\Http\Controllers\Store\CartController::class,"cart"]);
    Route::get("store/checkout",[\App\Http\Controllers\Store\CartController::class,"checkout"]);
    Route::resource("store/product",\App\Http\Controllers\Store\ProductController::class);
});




Route::get("store/user/register",[\App\Http\Controllers\Store\UserController::class,"register"]);
Route::post("store/user/register",[\App\Http\Controllers\Store\UserController::class,"register_save"]);
Route::get("store/user/login",[\App\Http\Controllers\Store\UserController::class,"login"]);
Route::post("store/user/login",[\App\Http\Controllers\Store\UserController::class,"check_login"]);

Route::get("store/user/logout",[\App\Http\Controllers\Store\UserController::class,"logout"]);