<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentsController;
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

Route::get('/', [PageController::class, 'showHome']) -> name('showHome');

Route::get('/index', function() {
    return view('index');
});

Route::get('/pages/kawy', [PageController::class, 'showCoffes']) ->name('showCoffes'); 

Route::get('/pages/jedzenie', [PageController::class, 'showFood']) ->name('showFood'); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// user
Route::get('/profile/edit', [UserController::class, 'edit']) -> name('editUserForm');
Route::post('/profile/edit', [UserController::class, 'update']) -> name('updateUser');

Route::get('pages/pageUser', [UserController::class, 'show']) -> name('showUser');

//admin
Route::get('/admin/users', [UserController::class, 'adminShow']) -> name('adminShowUser');
Route::get('/admin/users/delete/{x}', [UserController::class, 'destroy']) -> name('adminDeleteUser');
Route::get('/admin/users/{x}', [UserController::class, 'showOther']);

// order
Route::get('/pages/zamow', [OrdersController::class, 'create']) -> name('orderForm');
Route::post('/pages/zamow', [OrdersController::class, 'store']) -> name('store');

Route::get('/pages/historia', [OrdersController::class, 'show']) -> name('orderShow');

//admin
Route::get('/admin/orders', [OrdersController::class, 'adminShow']) -> name('AdminShowOrder');

// comment
Route::get('/pages/comments', [CommentsController::class, 'show']) -> name('commentShow');
Route::post('/pages/comments', [CommentsController::class, 'store']) -> name('commentStore');




Auth::routes();