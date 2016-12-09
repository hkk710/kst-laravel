<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Session;

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
        $data = [
              'email' => $request->email,
              'name' => $request->name,
              'subject' => $request->subject,
              'bodyMessage' => $request->comment
          ];
	    Mail::send('contactus.send', $data, function($message) use ($data) {
	    	$message->from($data['email']);
            $message->to("advaitharunjeena@gmail.com");
	     	$message->subject($data['subject']);
	  	});
	  	Session::flash('success', 'Your Email was sent successfully. Thankyou for your valuable FeedBack.');
	  	return redirect()->route('home');
    }
}
