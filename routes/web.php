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

