<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

class OauthNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public string $jeton)
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
        return (new MailMessage)
                    ->greeting('Salut,')
                    ->line('Nous sommes ravis de vous accueillir sur notre application. Vous avez maintenant un jeton de sécurité exclusif pour cette session.')
                    ->line('Ce jeton, généré de manière unique à chaque connexion, agit comme une clé virtuelle temporaire qui garantit que vous pouvez interagir en toute sécurité sur notre site pendant cette session. Il offre une couche de protection supplémentaire pour vos informations personnelles, s\'assurant que seule cette session a accès à ces données. Nous prenons votre sécurité au sérieux, et c\'est pourquoi nous vous fournissons ce jeton dédié pour une expérience en ligne sécurisée pendant cette session.')
                    ->line('Voici votre jeton: '. $this->jeton)
                    ->line('Veuillez copier votre jeton et l\'insérer dans l\'interface Oauth pour pouvoir se connecter')
                    ->salutation('Merci de votre compréhension');
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
