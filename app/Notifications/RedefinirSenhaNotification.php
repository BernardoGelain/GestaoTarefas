<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RedefinirSenhaNotification extends Notification
{
    use Queueable;
    public $token;
    public $email;
    public $name;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token, $email, $name)
    {
        $this->token = $token;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = 'http://localhost:8000/password/reset/'.$this->token.'?email='.$this->email;
       
        
        return (new MailMessage)
        ->subject('Atualize sua Senha')
        ->greeting('Olá, amante de Pringles!')
        ->line(
            "Parece que perdeu sua palavra-passe, não é mesmo? Mas não se preocupe, basta clicar no botão abaixo e
            escolher uma senha novinha em folha")
        ->action("isto é um Botão", $url)
        ->line('O botão ira expirar em 60 minutos.')
        ->line('Se você não pediu por esse e-mail, relaxe e coma algumas pringles!')
        ->salutation('Saudações do Rei Batata');
        }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
