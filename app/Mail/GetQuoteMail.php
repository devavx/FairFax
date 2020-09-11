<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class GetQuoteMail extends Mailable
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
        
        return $this->view('emails.getQuote')
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with(['credit_score' => $this->data['credit_score'],'property_value' => $this->data['property_value'],'loan_type' => $this->data['loan_type'],'loan_amount' => $this->data['loan_amount'], 'f_name' => $this->data['f_name'],'l_name' => $this->data['l_name'],'phone' => $this->data['phone'],'email' => $this->data['email'] ]);
    
    }
}