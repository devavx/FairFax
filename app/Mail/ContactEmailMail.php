<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class ContactEmailMail extends Mailable
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
        $subject = 'Customer Information!';
        $name = 'Jane Doe';
        
        return $this->view('emails.contactEmail')
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 'f_name' => $this->data['Fname'],'l_name' => $this->data['Lname'],'Pno' => $this->data['Pno'],'email' => $this->data['email'],'add' => $this->data['add'],'city'=>$this->data['city'],'state' =>$this->data['state'],'AlPno'=> $this->data['AlPno'],'bestTime'=>$this->data['bestTime'],'contactBy'=>$this->data['contactBy'] ]);
    
    }
}