<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(StoreRegisterRequest $request): RedirectResponse
    // {
    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'address' => $request->address,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     event(new Registered($user));
    //     if (!$user->hasVerifiedEmail()) {
    //         return redirect()->route('verification.notice');
    //     }
    //     Auth::login($user);
    //     return redirect('/car');
    // }
    public function store(StoreRegisterRequest $request)
{
    // Lưu dữ liệu đăng ký vào session thay vì database
    $verificationToken = sha1($request->email . time());

    // Lưu token vào session thay vì database
    session([
        'pending_user' => [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'email_verified' => false,
        ],
        'verification_token' => $verificationToken
    ]);

    // Gửi email xác thực
    Mail::to($request->email)->send(new VerifyEmail($verificationToken));

    return view('auth.verify-email'); // Hiển thị trang chờ xác thực
}
}
