<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Auth\Events\Verified;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class EmailVerificationController extends Controller
{
    // public function __invoke(EmailVerificationRequest $request)
    // {
    //     $request->fulfill();

    //     return redirect('/home'); // Điều hướng sau khi xác thực thành công
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

