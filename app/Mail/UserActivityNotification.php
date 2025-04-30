<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserActivityNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $activity;
    public $details;

    public function __construct($user, $activity, $details = [])
    {
        $this->user = $user;
        $this->activity = $activity;
        $this->details = $details;
    }

    public function build()
    {
        return $this->subject("User Activity Notification: {$this->activity}")
                    ->markdown('emails.user_activity_notification')
                    ->with([
                        'user' => $this->user,
                        'activity' => $this->activity,
                        'details' => $this->details,
                    ]);
    }
}
