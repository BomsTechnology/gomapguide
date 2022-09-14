<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CustomerPaymentNotification extends Notification
{
    use Queueable;

    public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
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
        return $this->data['product_title'] ? (new MailMessage)
            ->subject('Nouvelle Souscription')
            ->greeting('Hello, vous venez d\'éffectuer une nouvelle souscription')
            ->line('Plan: ' . $this->data['product_title'])
            ->line('Prix: ' . $this->data['product_price'] . 'usd')
            ->line('Validité: ' . $this->data['product_period'])
            ->line('Thank you for using our application!')
            : (new MailMessage)
            ->subject('Nouvelle Souscription')
            ->greeting('Hello, vous venez d\'éffectuer une nouvelle souscription de ' . $this->data['product_price'] . 'usd')
            ->line('Thank you for using our application!');;
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
