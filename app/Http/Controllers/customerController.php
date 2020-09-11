<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Customer;
use App\ContactEmail;
use App\GetQuote;
use App\HomePurchase;
use App\RefinanceLanding;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\GetQuoteMail;
use App\Mail\HomePurchaseMail;
use App\Mail\HomeRefinanceMail;
use App\Mail\RefinanceLandingMail;
use App\Mail\ContactEmailMail;

  
class customerController extends Controller
{     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//return $request->all();
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'state' => 'required',
            'haveloan' => 'required',
            'loanPurpose' => 'required',
        ]);
		// create new product and save it
		$customer = new Customer;
		$customer->first_name = $request->fname;
		$customer->last_name = $request->lname;
		$customer->email = $request->email;
		$customer->phone = $request->phone;
		$customer->state = $request->state;
		$customer->loan_purpose = $request->loanPurpose;
		$customer->current_have_loan = $request->haveloan;
		
			$data = ([
			 'f_name' => $request->fname,
			 'l_name' => $request->lname,
			 'email' => $request->email,			 
			 'phone' => $request->phone,
			 
			 ]);
			Mail::to($request->email)->send(new WelcomeMail($data));
			 
			$customer->save();
			 
		
        return redirect()->back()->with('message','Your information has been saved successfully!');
    }
	
	
	public function getQuote(Request $request)
    {
		//return $request->all();
        $request->validate([
            'loan_type' => 'required',
            'loan_amount' => 'required',
			'property_value' => 'required',
            'credit_score' => 'required',
			'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            
            
        ]);
		// create new product and save it
		$GetQuote = new GetQuote;
		$GetQuote->loan_type = $request->loan_type;
		$GetQuote->loan_amount = $request->loan_amount;
		$GetQuote->property_value = $request->property_value;
		$GetQuote->credit_score = $request->credit_score;
		$GetQuote->first_name = $request->fname;
		$GetQuote->last_name = $request->lname;
		$GetQuote->email = $request->email;
		$GetQuote->phone = $request->phone;		
		
			$data = ([
			
			'loan_type' => $request->loan_type,
			'loan_amount' => $request->loan_amount,
			'property_value' => $request->property_value,
			'credit_score' => $request->credit_score,
			'f_name' => $request->fname,
			'l_name' => $request->lname,
			'email' => $request->email,			 
			'phone' => $request->phone,
			 
			]);
			Mail::to($request->email)->send(new GetQuoteMail($data));
			 
			$GetQuote->save();
			 
		
        return redirect()->back()->with('message','Your Data Has Been Captured , Will Contact Soon!');
    }
	
	public function homePurchase(Request $request)
    {
		//return $request->all();die();
		// return "Your Data Has Been Captured";die();
        // $request->validate([
            // //'property_type' => 'required',
            // //'property_use' => 'required',
			// 'credit_score' => 'required',
            // //'already_found_home' => 'required',
            // 'estimated_purchase_price' => 'required',
            // 'Downpayment' => 'required',
            // //'military_service' => 'required',
            // 'expected_buy_time' => 'required',
            // 'contact_time' => 'required',
			// 'fname' => 'required',
            // 'lname' => 'required',
            // 'email' => 'required',
            // 'phone' => 'required',
        // ]);
		// // create new product and save it
		$HomePurchase = new HomePurchase;
		$HomePurchase->property_type = $request->property_type;
		$HomePurchase->property_use = $request->property_use;		
		$HomePurchase->credit_score = $request->credit_range;		
		$HomePurchase->already_found_home = $request->already_found_home;
		$HomePurchase->estimated_purchase_price = $request->estimated_purchase_price;
		$HomePurchase->Downpayment = $request->downpayment;
		$HomePurchase->military_service = $request->military_service;
		$HomePurchase->expected_buy_time = $request->expected_purchase_time;
		$HomePurchase->contact_time = $request->contact_time;		
		$HomePurchase->first_name = $request->fname;
		$HomePurchase->last_name = $request->lname;
		$HomePurchase->email = $request->email;
		$HomePurchase->phone = $request->phone;		
		$HomePurchase->alternate_phone = $request->al_phone;		
		
			$data = ([			
			'property_type' => $request->property_type,
			'property_use' => $request->property_use,
			'credit_score' => $request->credit_range,
			'already_found_home' => $request->already_found_home,
			'estimated_purchase_price' => $request->estimated_purchase_price,
			'downpayment' => $request->downpayment,
			'military_service' => $request->military_service,
			'expected_buy_time' => $request->expected_purchase_time,
			'contact_time' => $request->contact_time,
			'f_name' => $request->fname,
			'l_name' => $request->lname,
			'email' => $request->email,			 
			'phone' => $request->phone,
			'alternate_phone' => $request->al_phone,
			 
			]);
			
			Mail::to($request->email)->send(new HomePurchaseMail($data));
			 
			$HomePurchase->save();
			
		 return redirect('/thankyou');
        //return redirect()->back()->with('message','Your Data Has Been Captured , Will Contact Soon!');
	}
	public function homeRefinance(Request $request)
    {
		//return $request->all();
		$HomePurchase = new HomePurchase;
		$HomePurchase->property_type = $request->property_type;
		$HomePurchase->property_use = $request->property_use;		
		$HomePurchase->credit_score = $request->credit_range;		
		$HomePurchase->already_found_home = $request->already_found_home;
		$HomePurchase->estimated_purchase_price = $request->estimated_purchase_price;
		$HomePurchase->Downpayment = $request->downpayment;
		$HomePurchase->military_service = $request->military_service;
		$HomePurchase->expected_buy_time = $request->expected_purchase_time;
		$HomePurchase->address = $request->pAdd;
		$HomePurchase->zip = $request->zip;
		$HomePurchase->city = $request->city;
		$HomePurchase->state = $request->state;
		
		$HomePurchase->contact_time = $request->contact_time;		
		$HomePurchase->first_name = $request->fname;
		$HomePurchase->last_name = $request->lname;
		$HomePurchase->email = $request->email;
		$HomePurchase->phone = $request->phone;		
		$HomePurchase->alternate_phone = $request->al_phone;
		
			$data = ([			
			'property_type' => $request->property_type,
			'property_use' => $request->property_use,
			'credit_score' => $request->credit_range,
			'already_found_home' => $request->already_found_home,
			'estimated_purchase_price' => $request->estimated_purchase_price,
			'downpayment' => $request->downpayment,
			'military_service' => $request->military_service,
			'expected_buy_time' => $request->expected_purchase_time,
			'address' => $request->pAdd,
			'zip' => $request->zip,
			'city' => $request->city,
			'state' => $request->state,
			'contact_time' => $request->contact_time,
			'f_name' => $request->fname,
			'l_name' => $request->lname,
			'email' => $request->email,			 
			'phone' => $request->phone,
			'alternate_phone' => $request->al_phone,
			 
			]);
		
		Mail::to($request->email)->send(new HomeRefinanceMail($data));
		$HomePurchase->save();
		return redirect('/thankyou');
	}
	
	public function refinanceLanding(Request $request)
    {
		//return $request->all();
		$RefinanceLanding = new RefinanceLanding;		 
		$RefinanceLanding->mortage_balance = $request->mortage_balance;
		$RefinanceLanding->active_military = $request->active_military;		
		$RefinanceLanding->mortage_type = $request->mortage_type;		
		$RefinanceLanding->additional_cash_out = $request->additional_cash_out;
		$RefinanceLanding->current_rate = $request->current_rate;		
		$RefinanceLanding->state = $request->state;
		$RefinanceLanding->name = $request->name;
		$RefinanceLanding->credit_score = $request->credit_score;
		$RefinanceLanding->loan_taken_year = $request->loan_taken_year;			
		$RefinanceLanding->email = $request->email;
		$RefinanceLanding->phone = $request->phone;		
		
			$data = ([			
				'mortage_balance' => $request->property_type,
				'active_military' => $request->active_military,
				'mortage_type' => $request->mortage_type,
				'additional_cash_out' => $request->additional_cash_out,
				'current_rate' => $request->current_rate,			
				'state' => $request->state,
				'name' => $request->name,			
				'credit_score' => $request->credit_score,
				'loan_taken_year' => $request->loan_taken_year,			
				'email' => $request->email,			 
				'phone' => $request->phone,
			]);
		
		Mail::to($request->email)->send(new RefinanceLandingMail($data));
		$RefinanceLanding->save();
		return redirect('/thankyou');
	}
	
	
	/* function to send mail to client containing customer information from contact us form/page
	 * Vikash Rai
	*/
	public function contactQuery(Request $request){
	   // dd($request);die;
	   
	   $ContactEmail = new ContactEmail;
	   	$ContactEmail->Fname = $request->Fname;		
		$ContactEmail->Lname = $request->Lname;		
		$ContactEmail->email = $request->email;
		$ContactEmail->add = $request->add;		
		$ContactEmail->city = $request->city;
		$ContactEmail->state = $request->state;
		$ContactEmail->Pno = $request->Pno;
		$ContactEmail->AlPno = $request->AlPno;			
		$ContactEmail->bestTime = $request->bestTime;
		$ContactEmail->contactBy = $request->contactBy;	
		
	   $data = array(
	   'Fname' => $request->Fname,
      'Lname' => $request->Lname,
      'email' => $request->email,
      'add' => $request->add,
      'city' => $request->city,
      'state' => $request->state,
      'Pno' => $request->Pno,
      'AlPno' => $request->AlPno,
      'bestTime' => $request->bestTime,
      'contactBy' => $request->contactBy
      );
      
     // print_r($data);die;
     Mail::to("vikash27hbk@gmail.com")->send(new ContactEmailMail($data));
     $ContactEmail->save();
    // return redirect()->back()->with('message','Your Data Has Been Captured , Will Contact Soon!');
     return redirect('/thankyou');
	}
}