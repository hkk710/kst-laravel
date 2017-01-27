<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MojoController extends Controller
{
    public function pay(Request $request) {
        $this->validate($request, [
            'vtype' => 'not_in:0',
            'prathista' => 'not_in:0',
            'vname' => 'not_in:0',
            'star' => 'not_in:0',
            'name' => 'required',
            'date' => 'required|date|after:today'
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
