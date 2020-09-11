<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;
	public $data;
	public function __construct($data)
	{
		
		 $this->data = $data;
	}
	public function build()
    {
        $address = 'janeexampexample@example.com';
        $subject = 'This is a demo!';
        $name = 'Jane Doe';
        
        return $this->view('emails.welcome')
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 'f_name' => $this->data['f_name'],'l_name' => $this->data['l_name'],'phone' => $this->data['phone'],'email' => $this->data['email'] ]);
    
    }
}