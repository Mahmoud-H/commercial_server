<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\NexmoMessage;
class MessageNotification extends Notification
{
    use Queueable;

    /**
 * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    { 
        //dd("test");
      //  return ['database','nexmo'];
        $via = ['database'];
       
        if($notifiable->notify_sms)
        {
           $via[] = 'nexmo'; 
        }
        return $via;
       // return ['mail'];
//        $channels = ['database'];
////        if(in_array('mail',$notifiable->notification_options))
////        {
////            $channels[] = 'mail';
////        } 
//        if(in_array('sms',$notifiable->notification_options))
//        {
//            $channels[] = 'nexmo';
//        }
//        return $channels;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
    
    public function toNexmo($notifiable)
    {
        $message = new NexmoMessage();
//        $message->content(_('new answer on":question"',[
//            'question'=>$this->question->title,
//        ]));   
        $message->content('Welcome laravel');
        return $message;
    }
}
