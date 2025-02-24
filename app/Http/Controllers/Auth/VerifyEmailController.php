<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    // public function __invoke(EmailVerificationRequest $request): RedirectResponse
    // {
    //     if ($request->user()->hasVerifiedEmail()) {
    //         return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    //     }

    //     if ($request->user()->markEmailAsVerified()) {
    //         event(new Verified($request->user()));
    //     }

    //     return redirect()->intended(RouteServiceProvider::HOME.'?verified=1');
    // }
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        // Lấy thông tin đăng ký từ session
        $registerData = Session::get('register_data');

        if (!$registerData) {
            return redirect('/register')->with('error', 'Thông tin đăng ký không hợp lệ hoặc đã hết hạn.');
        }

        // Tạo tài khoản trong database
        $user = User::create($registerData);
        event(new Verified($user));

        // Xóa session để tránh trùng lặp
        Session::forget('register_data');

        return redirect('/login')->with('status', 'Xác thực email thành công, vui lòng đăng nhập.');
    }
}
