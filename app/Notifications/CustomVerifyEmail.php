<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class CustomVerifyEmail extends Notification implements ShouldQueue
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
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $verificationUrl = $this->verificationUrl($notifiable);
        return (new MailMessage)
            ->subject('Verificação de e-mail - SearchPark')
            ->greeting('Olá!')
            ->line('Clique no botão abaixo para verificar seu endereço de e-mail.')
            ->action('Verificar E-mail', $verificationUrl)
            ->line('Se você não criou uma conta, nenhuma ação é necessária.')
            ->salutation('Atenciosamente, SearchPark');
    }

    protected function verificationUrl($notifiable)
    {
        $signedUrl = URL::temporarySignedRoute(
            'sessions.emailVerify',
            Carbon::now()->addMinutes(config('auth.verification.expire', 1)),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]
        );
        // Extrai a query string da URL gerada (expires, signature, etc.)
        $query = parse_url($signedUrl, PHP_URL_QUERY);
        // Monta a URL que será enviada ao frontend
        return config('app.frontend_url', 'http://localhost:3000') . '/email-verify?' . $query;
    }
}
