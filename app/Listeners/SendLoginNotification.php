<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserActivityNotification;
use Illuminate\Support\Facades\Log;

class SendLoginNotification
{
    public function handle(Login $event)
    {
        $user = $event->user;
        $yourEmail = env('ADMIN_EMAIL', 'shahtejas3333@gmail.com');
        $activity = $event->guard === 'admin' ? 'Admin Login' : 'User Login';

        Log::info('Login event triggered', [
            'user_id' => $user->id,
            'email' => $user->email,
            'guard' => $event->guard,
            'activity' => $activity,
        ]);

        try {
            Mail::to($yourEmail)->send(new UserActivityNotification($user, $activity));
            Log::info('Email sent successfully', ['to' => $yourEmail]);
        } catch (\Exception $e) {
            Log::error('Failed to send login email', [
                'error' => $e->getMessage(),
                'to' => $yourEmail,
            ]);
        }
    }
}
