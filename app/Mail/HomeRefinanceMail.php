<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class HomeRefinanceMail extends Mailable
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
        
        return $this->view('emails.homeRefinance')
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([
					'credit_score' => $this->data['credit_score'],
					'estimated_purchase_price' => $this->data['estimated_purchase_price'],
					'downpayment' => $this->data['downpayment'],
					'expected_buy_time' => $this->data['expected_buy_time'], 
					'contact_time' => $this->data['contact_time'], 
					'address' => $this->data['address'], 
					'zip' => $this->data['zip'], 
					'city' => $this->data['city'], 
					'state' => $this->data['state'], 
					'f_name' => $this->data['f_name'],
					'l_name' => $this->data['l_name'],
					'email' => $this->data['email'],
					'phone' => $this->data['phone'],
					'alternate_phone' => $this->data['alternate_phone']
					 ]);
    
    }
}