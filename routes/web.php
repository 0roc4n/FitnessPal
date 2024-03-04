<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PlanController;
use Database\Factories\MembersFactory;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/members', [MemberController::class, 'index'])->name('member.index');
    Route::get('/member/add', [MemberController::class, 'addmember'])->name('member.add');
    Route::post('/members', [MemberController::class, 'store'])->name('member.store');

    Route::get('/plans', [PlanController::class, 'index'])->name('plans');
    Route::post('/plan-add', [PlanController::class, 'store'])->name('plan.add');
});

require __DIR__.'/auth.php';
