<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class,'all'])->name('home');
Route::get('/film_type/{type}', [IndexController::class,'getFilm']);

//User
Route::get('/login', [KhachHangController::class,'getLogin'])->name('login');
Route::get('/signup', [KhachHangController::class,'getSignup'])->name('signup');
Route::post('/getlogin', [KhachHangController::class,'Login']);
Route::post('/getsignup', [KhachHangController::class,'Signup']);
Route::post('/update/{request,id}', [KhachHangController::class,'update']);
Route::get('/logout', [KhachHangController::class,'logout'])->name('logout');
Route::get('/type_loai/{type}/chair/{id}', [IndexController::class,'allChair'])->middleware('Customer');
Route::get('/type_loai/{id}', [IndexController::class,'getType_Phim']);
Route::post('/request-ajax', [KhachHangController::class,'requestChair'])->name('requestChair');

//admin
Route::get('/index' , function(){
    return view('admin.dashboard');
})->name('index');
Route::get('/addfilm' , function(){
    return view('admin.addfilm');
});
Route::get('/addcustomer' , function(){
    return view('admin.addcustomer');
});
Route::get('/editflim' , function(){
    return view('admin.editfilm');
});
Route::get('/editcustomer' , function(){
    return view('admin.editcustomer');
});
Route::get('/managercus' , function(){
    return view('admin.managercus');
});
Route::get('/managerfilm' ,[MovieController::class,'index']);
Route::get('/editfilm/{id}' ,[MovieController::class,'edit'])->name('edit');
Route::post('/addfilm' ,[MovieController::class,'store']);
Route::post('/update/{id}' ,[MovieController::class,'update']);
// Route::post('/update/{id}' ,[MovieController::class,'update']);
// Route::get('/destroy/{id}' ,[MovieController::class,'destroy']);



