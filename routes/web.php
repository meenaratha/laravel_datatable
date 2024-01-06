<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin;
use App\Models\User;
use App\Models\User_personal_detail;
use App\Models\User_bank_detail;
use app\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[ViewController::class,'userLogin'])->name('login')->middleware('guest');
Route::get('/register',[ViewController::class,'userRegister']);
Route::post('/store', [UserController::class, 'addUser'])->name('store');

Route::post('/add-user', [UserController::class,'addUser']);
Route::post('/authenticate-user',[UserController::class, 'authenticate']);
Route::middleware('auth:web')->get('/user/dashboard',[UserController::class,'dashboard'])->name('user.dashboard')->middleware('auth');

Route::get('/user/profile',[UserController::class,'profile']);
Route::get('/user/view-profile',[UserController::class,'viewProfile'])->middleware('auth');
Route::get('/user/change-password',[UserController::class,'changePassword']);

Route::post('/user-update',[UserController::class,'profileUpdate']);
Route::post('/user-password-update',[UserController::class,'passwordUpdate']);

Route::post('/user-personal-update',[UserController::class,'personalUpdate']);
Route::post('/user-bank-update',[UserController::class,'bankUpdate']);
Route::post('//user-image-update',[UserController::class,'imageUpdate']);

Route::get('/user/logout',[UserController::class,'Logout']);

Route::get('/email-verification',[UserController::class,'emailVerification']);
Route::post('/user-verification',[UserController::class, 'userVerification']);
Route::post('/forgot-password-user',[UserController::class, 'forgotPassword']);

//Admin Panel

Route::get('/admin/login', [ViewController::class,'adminLogin'])->name('admin.login');
Route::get('/admin/register', [ViewController::class,'adminRegister'])->name('admin.register');

Route::post('/add-admin',[AdminController::class,'addAdmin']);
Route::post('/authenticate-admin',[AdminController::class,'authenticate']);
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::get('/admin/addAdmin', [AdminController::class, 'addAdminForm']);
Route::get('/admin/adminList', [AdminController::class, 'adminList']);
Route::get('/admin/adminView/{admin_id}',[AdminController::class,'adminView']);
Route::get('/admin/adminEdit/{admin_id}',[AdminController::class,'adminEdit']);
Route::get('/admin/adminBlock/{admin_id}',[AdminController::class,'adminBlock']);
Route::get('/admin/adminUnblock/{admin_id}',[AdminController::class,'adminUnblock']);

Route::get('/admin/userView/{user_id}',[AdminController::class,'userView']);
Route::get('/admin/userEdit/{user_id}',[AdminController::class,'userEdit']);
Route::get('/admin/userBlock/{user_id}',[AdminController::class,'userBlock']);
Route::get('/admin/userUnblock/{user_id}',[AdminController::class,'userUnblock']);

Route::post('/edit-admin/{admin_id}',[AdminController::class, 'editAdmin']);
Route::post('/edit-user/{user_id}',[AdminController::class, 'editUser']);

Route::get('/admin/addUser',[AdminController::class,'addUser']);
Route::get('/admin/premiumUser',[AdminController::class,'PreUserList']);
Route::get('/admin/basicUser',[AdminController::class,'BasicUserList']);
Route::get('/admin/trailUser',[AdminController::class,'TrUserList']);
Route::get('/admin/onlineList',[AdminController::class,'OnlineUserList']);
Route::get('/admin/add-data-form',[AdminController::class,'addDataForm']);
Route::any('/fetch-stock',[AdminController::class,'fetchStock'])->name('fetch.stock');
Route::get('/admin/csv-upload',[AdminController::class,'csvPage']);
Route::post('/handleCSVUpload', [AdminController::class,'handleCSVUpload']);
Route::get('/admin/create-table', [AdminController::class,'createTableForm']);
Route::post('/create-new-exchange',[AdminController::class,'createExchange']);

Route::get('/admin/userView/{user_id}', [AdminController::class,'userView']);

Route::get('/admin/change-password',[AdminController::class,'changePassword']);
Route::get('/admin/edit-profile',[AdminController::class,'editProfile']);

Route::post('/forgot-password-admin',[AdminController::class,'forgotPassword']);

Route::post('/admin-password-update',[AdminController::class,'passwordUpdate']);

Route::get('/admin/logout',[AdminController::class,'Logout']);

Route::get('/demo',[ViewController::class,'demo']);
Route::get('/demo/search', [ViewController::class, 'search'])->name('demo.search');


