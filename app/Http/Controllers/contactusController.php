<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Session;
use App\Mail\ContactUs;

class contactusController extends Controller
{
    public function index() {
    	return view('contactus/contactus');
    }
    public function sendmail(Request $request) {
    	$this->validate($request, array(
    			'name'    => 'required|max:255',
    			'email'   => 'required|max:255|email',
                'subject' => 'required',
    			'comment' => 'min:5'
    		));
        Mail::to("hkk710@gmail.com")->send(new ContactUs());
	  	Session::flash('success', 'Your Email was sent successfully. Thankyou for your valuable FeedBack.');
	  	return redirect('contact_us');
    }
}
