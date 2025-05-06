<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword;

class CustomResetPassword extends ResetPassword implements ShouldQueue
{
    use Queueable;
    public $tries = 3;
    public $backoff = 30;
    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable): MailMessage
    {
        $frontendUrl = env('FRONTEND_URL', 'http://localhost:5173');
        $url = $frontendUrl . '/reset-password?token=' . $this->token;
        return (new MailMessage)
            ->subject('Redefinição de senha - SearchPark')
            ->greeting('Olá!')
            ->line('Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha.')
            ->action('Redefinir senha', $url)
            ->line('Se você não solicitou isso, nenhuma ação adicional é necessária.')
            ->salutation('Atenciosamente, SearchPark');
    }
}
