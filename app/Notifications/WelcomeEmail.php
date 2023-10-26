<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeEmail extends Notification
{
    use Queueable;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        $resetPasswordLink = route('password.reset');

        return (new MailMessage)
            ->subject('Welcome to AutoMobex Car Rental Platform!')
            ->greeting('Dear ' . $this->user->first_name . ',')
            ->line('Welcome to AutoMobex Car Rental Platform! We\'re thrilled to have you on board.')
            ->line('Your registered email: ' . $this->user->email)
            ->action('Reset Password', $resetPasswordLink)
            ->line('Thank you for choosing AutoMobex Car Rental Platform. We\'re here to help you every step of the way.')
            ->salutation('Best regards, The AutoMobex Team');
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
