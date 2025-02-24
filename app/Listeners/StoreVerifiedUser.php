<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Verified;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class StoreVerifiedUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Verified $event)
    {
        // Lấy user từ session
        $pendingUser = Session::get('pending_user');

        if ($pendingUser && $pendingUser['email'] === $event->user->email) {
            // Lưu user vào database
            $event->user->fill([
                'name' => $pendingUser['name'],
                'phone' => $pendingUser['phone'],
                'address' => $pendingUser['address'],
                'password' => $pendingUser['password'],
            ])->save();

            // Xóa khỏi session
            Session::forget('pending_user');
        }
    }
}
