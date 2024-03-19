<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
class RejectNotification extends Notification
{
    use Queueable;
    private $offersData;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($offersData)
    {
        $this->offersData = $offersData;
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
        
        $url = url('/show_usercomplaintnew',$this->offersData['id']);
        return (new MailMessage) 
        ->line('Your Complaint/Enquiry has been Rejected by our team..It is out of our Scope')
         ->action('To View your complaint,Click Here',$url)
            ->line('Thanks for visiting our website...See you again ');
            ;
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