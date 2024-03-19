<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
class CompleteNotification extends Notification
{
    use Queueable;
    private $completeData;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($completeData)
    {
        $this->completeData = $completeData;
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
        
        
    $url = "https://g.page/r/CVAwNeS6mxkiEB0/review";
    
        return (new MailMessage) 
        ->line('Your Complaint/Enquiry has been Successully Resolved by our team.')
        ->action('Rate our Service',$url)
        ->line('Thanks for visiting our website...See you again ');
            
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
            
        ];
    }
}