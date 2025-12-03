<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\ValidateUser;
use App\Http\Middleware\ValidateAdmin;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Admin Route 
Route::get('/Admin/index', [AdminController::class, 'index'])->name('Admin.index')->middleware(ValidateAdmin::class);

// Users Route 
Route::get('/Users/user', [UsersController::class, 'user'])->name('Users.user')->middleware(ValidateUser::class);