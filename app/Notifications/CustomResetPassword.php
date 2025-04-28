<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword;

class CustomResetPassword extends ResetPassword
{
    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable): MailMessage
    {
        $frontendUrl = config('app.frontend_url', 'http://localhost:3000');
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
