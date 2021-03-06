<?php

namespace Arane\Notification\Services\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EmailNotification extends Notification {
    use Queueable;
    
    protected $data;
    
    /**
     * Create a new Notification instance.
     *
     * @return void
     */
    public function __construct($data) {
        $this->data = $data;
    }
    
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable) {
        return ['mail'];
    }
    
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) {
        return (new MailMessage)->markdown('themes.default.components.notifications.model-notification',
            [
                'data' => $this->data,
            ])
            ->subject($this->data['email']['subject']);
        
    }
    
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable) {
        return [
            //
        ];
    }
}
