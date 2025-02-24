<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Auth\Notifications\VerifyEmail as BaseVerifyEmail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
class CustomVerifyEmail extends BaseVerifyEmail
{

    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        // Phương thức này trả về các kênh gửi thông báo, ví dụ gửi qua email
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */

     public function toMail($notifiable)
     {
         // Debug để kiểm tra dữ liệu của user
         \Log::info('User for verification:', [
             'id' => $notifiable->id,
             'email' => $notifiable->email
         ]);

         if (!$notifiable->id || !$notifiable->email) {
             throw new \Exception('User ID or Email is missing.');
         }

         $verificationUrl = URL::temporarySignedRoute(
             'verification.verify',
             Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
             [
                 'id' => $notifiable->id,
                 'hash' => sha1($notifiable->email),
             ]
         );

         return (new MailMessage)
             ->subject('Xác Nhận Email')
             ->action('Xác Nhận Email', $verificationUrl)
             ->line('Nếu bạn không đăng ký tài khoản, vui lòng bỏ qua email này.');
     }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
