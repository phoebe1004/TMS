<?php

use App\Http\Controllers\Admin\MemberController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\TaskController;
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
    Route::get('members', [MemberController::class, 'members']);    
});
