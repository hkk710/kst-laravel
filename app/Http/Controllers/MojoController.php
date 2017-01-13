<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MojoController extends Controller
{
    public function pay(Request $request) {
        $this->validate($request, [
            'name' => 'required'
        ]);
        return view('online_vazhipad.instamojo.pay')->withRequest($request);
    }
    public function thankyou() {
        return view('online_vazhipad.instamojo.thankyou');
    }
    public function webhook() {
        return view('online_vazhipad.instamojo.webhook');
    }
}
