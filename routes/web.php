<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RepCommentController;
use App\Http\Controllers\ReviewController;
use App\Models\Booking;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailVerificationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CarController::class,'CarHome']);

Route::get('/filter-cars', [CarController::class, 'filterCars'])->name('filter.cars');
Route::get('/car', [CarController::class, 'index'])->name('car.index');
Route::get('/car/show/{id}',[CarController::class,'show'])->name('car.show');


Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/car', CarController::class)->names('car')->except(['index','show']);
    Route::resource('/booking', BookingController::class)->names('bookings');
    Route::get('/booking/add_book/{car_id}/{price_per_day}', [BookingController::class, 'create'])->name('bookings.create');
});
Route::middleware('auth','role:admin')->group(function(){
    Route::get('/car/create', [CarController::class, 'create'])->name('car.create');
    Route::delete('/car/{id}',[CarController::class,'destroy'])->name('car.destroy');
    Route::get('/car/{id}/edit', [CarController::class, 'edit'])->name('car.edit');
    Route::put('/car/{id}', [CarController::class, 'update'])->name('car.update');
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
    Route::post('/admin/bookings/{id}',[AdminController::class,'approveBooking'])->name('admin.approveBooking');
    Route::post('/admin/bookings/adminGiveBack/{id}',[AdminController::class,'adminGiveBack'])->name('admin.adminGiveBack');
});
Route::get('/booking/{id}/edit',[BookingController::class, 'edit'])->name('booking.edit');
Route::get('/booking/{id}',[BookingController::class, 'update'])->name('booking.update');
Route::delete('/booking/{id}',[CarController::class,'destroy'])->name('booking.destroy');
Route::get('/review/create',[ReviewController::class,'create'])->name('review.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::post('/repcomments/store', [RepCommentController::class, 'store'])->name('repcomments.store');
Route::get('/about',function(){
    return view('user.about');
});
Route::view('/feedback', 'user.feedback');
Route::view('/contact', 'user.contact');

// Hiển thị trang thông báo yêu cầu xác thực email
Route::get('/verify-email/{token}', function ($token, Request $request) {
    if (session('verification_token') === $token) {
        // Lấy dữ liệu từ session
        $userData = session('pending_user');

        // Lưu user vào database
        $user = User::create($userData);
        $user->email_verified_at = now();
        $user->email_verified = true;
        $user->save();

        // Xóa session sau khi lưu
        session()->forget(['pending_user', 'verification_token']);

        return redirect('/login')->with('success', 'Xác thực email thành công! Hãy đăng nhập.');
    } else {
        return redirect('/register')->with('error', 'Token không hợp lệ!');
    }
});
// use Illuminate\Support\Facades\Auth;

Route::get('/verify-email', function () {
    if (Auth::check() && Auth::user()->email_verified) {
        return redirect('/dashboard')->with('success', 'Email của bạn đã được xác thực.');
    }
    return view('auth.verify-email');
})->middleware('auth');


require __DIR__.'/auth.php';
