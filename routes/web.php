<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\VerificationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
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
    return redirect()->route('home');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });



Route::get('/mahasiswa', function () {
    return view('admin.akun-mahasiswa');
});
Route::get('/reset-password', function () {
    return view('auth.forgot-password');
});

Route::get('/home', [AuthController::class, 'index_home'])->name('home');


// Route::get('/login', [AuthController::class, 'login_user'])->middleware('guest')->name('login-user');
Route::get('/login', [AuthController::class, 'login_user'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest')->name('authenticate');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout-user');

Route::get('/register', [AuthController::class, 'register_user'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'store'])->middleware('guest')->name('create');

Route::get('/mahasiswa', [MahasiswaController::class, 'akun_mhs'])->name('index-user');
Route::get('/mahasiswa/{user}', [MahasiswaController::class, 'detail'])->name('detail-mahasiswa');
Route::get('/mahasiswa/{user}/edit', [MahasiswaController::class, 'edit'])->name('edit-mahasiswa');
Route::put('/mahasiswa/{user}update', [MahasiswaController::class, 'update'])->name('update-mahasiswa');
Route::delete('mahasiswa/{user}', [MahasiswaController::class, 'delete'])->name('delete-mahasiswa');

Route::get('/dashboard', [MahasiswaController::class, 'index'])->name('dashboard')->middleware('auth');


// email Route
// Route::get('/email/verify', function (){
//     return view('auth.login');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request){
//     $request->fulfill();
//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');
// });();
Route::get('/email/verify', [VerificationController::class, 'notice'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
    ->middleware(['guest', 'signed'])->name('verification.verify');



    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    });




    Route::get('forget-password', [VerificationController::class, 'forgotPassword'])->name('forget.password.get');
Route::post('forget-password', [VerificationController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password', [VerificationController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [VerificationController::class, 'submitResetPasswordForm'])->name('reset.password.post');
