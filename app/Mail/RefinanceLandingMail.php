<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class RefinanceLandingMail extends Mailable
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
        
        return $this->view('emails.refinanceLanding')
			->from($address, $name)
			->cc($address, $name)
			->bcc($address, $name)
			->replyTo($address, $name)
			->subject($subject)
			->with([
			'mortage_balance' => $this->data['mortage_balance'],
			'active_military' => $this->data['active_military'],
			'mortage_type' => $this->data['mortage_type'],
			'additional_cash_out' => $this->data['additional_cash_out'], 
			'current_rate' => $this->data['current_rate'], 
			'state' => $this->data['state'],
			'name' => $this->data['name'],
			'credit_score' => $this->data['credit_score'],
			'loan_taken_year' => $this->data['loan_taken_year'],
			'email' => $this->data['email'],
			'phone' => $this->data['phone'],
		]);
    
    }
}