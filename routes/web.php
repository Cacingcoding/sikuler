<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProposalController;

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
Route::get('/login_pramuka', function () {
    return view('auth.loginPRAMUKA');
});
Route::get('/login_pmr', function () {
    return view('auth.loginPMR');
});
Route::get('/login_rohis', function () {
    return view('auth.loginROHIS');
});

Auth::routes();

//Kesiswaan
// Route::prefix('kesiswaan')
//     ->middleware(['auth', 'kesiswaan'])
//     ->group(function(){
//         Route::resource('/users', UserController::class);
//     });
//auth
Route::middleware(['auth'])
    ->group(function(){
        Route::resource('/users', UserController::class);
        Route::resource('/dashboard', DashboardController::class);
        Route::resource('/kegiatan', KegiatanController::class);
        Route::resource('/proposal', ProposalController::class);
        Route::get('/proposal', [ProposalController::class,'index'])->name('proposal.index');
        Route::get('/proposal/{id}/accpembina', [ProposalController::class,'accpembina'])->name('proposal.accpembina');
        Route::put('/proposal/accpembina/{id}', [ProposalController::class,'accpembinaproccess'])->name('proposal.accpembinaproccess');
        Route::get('/proposal/{id}/acckesiswaan', [ProposalController::class,'acckesiswaan'])->name('proposal.acckesiswaan');
        Route::put('/proposal/acckesiswaan/{id}', [ProposalController::class,'acckesiswaanproccess'])->name('proposal.acckesiswaanproccess');
        // profile
        Route::resource('/profile', ProfileController::class);
        // changePassword
        Route::put('/changePassword/{id}', [UserController::class, 'changePassword'])->name('profile.changePassword');
        // logout
        Route::get('/logout', [LoginController::class, 'logout']);

    });
