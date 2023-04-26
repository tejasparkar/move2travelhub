<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\UserController;
use App\Models\Package;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function(){
    return view('homescreen',[
        'packages' => Package::latest()->paginate(24)
    ]);
});

Route::get('/home', function(){
    return redirect('/package');
});

Route::resource('/package', PackageController::class)->middleware('auth');


Route::get('/detailedpackage/{id}', function (string $id) {
    $data = Package::find($id);
    return view('packagedetails',['package'=>$data]);
});

Route::get('/register',[UserController::class,'register'])->middleware('guest');

Route::get('/login',[UserController::class,'loginUser'])->name('login')->middleware('guest');

Route::post('/users',[UserController::class,'createUser']);

Route::post('/logout',[UserController::class,'logout']);

Route::post('/users/authenticate',[UserController::class , 'authenticate']);

//Contact us form
Route::post('/sendquote',[ContactusController::class, 'store']);

