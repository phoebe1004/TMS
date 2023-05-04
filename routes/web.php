<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ProfileController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {


    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    });
    Route::resource('tasks', TaskController::class);
    Route::get('users', [DashboardController::class,'users']);
    // Route::get('view-user/{id}', [DashboardController::class,'viewuser']);
    Route::resource('members', MemberController::class);
    // Route::get('/members',function(){
    //     return view('admin.member.index');
    // });
    Route::resource('profiles', ProfileController::class);
});
