<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PerfilController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MatchController;


Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth')
                ->name('logout');

Route::get   ('team/list',      [TeamController::class, 'index'] )->middleware('auth')->name('team.list');    
Route::get   ('team/show/{id}', [TeamController::class, 'show']  )->middleware('auth')->name('team.show');    
Route::get   ('team/create',    [TeamController::class, 'create'])->middleware('auth')->name('team.create');  
Route::get   ('team/edit/{id}', [TeamController::class, 'edit']  )->middleware('auth')->name('team.edit');    
Route::put   ('team/store',     [TeamController::class, 'store'] )->middleware('auth')->name('team.store');   

Route::get   ('match/list',      [MatchController::class, 'index'] )->middleware('auth')->name('match.list');
Route::get   ('match/show/{id}', [MatchController::class, 'show']  )->middleware('auth')->name('match.show');    
Route::get   ('match/create',    [MatchController::class, 'create'])->middleware('auth')->name('match.create');  
Route::get   ('match/edit/{id}', [MatchController::class, 'edit']  )->middleware('auth')->name('match.edit');    
Route::put   ('match/store',     [MatchController::class, 'store'] )->middleware('auth')->name('match.store');   
Route::delete('match/delete',    [MatchController::class, 'delete'])->middleware('auth')->name('match.delete');  

Route::get   ('/perfil',       [PerfilController::class,          'index'])->middleware(['auth'])->name('perfil');

Route::group(['middleware' => ['permission:delete_team']], function () {
    Route::delete('team/delete',  [TeamController::class, 'delete'])->middleware('auth')->name('team.delete');  
});