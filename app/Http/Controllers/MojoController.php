<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Vname;
use Auth;
use Illuminate\Http\Request;
use Instamojo\Instamojo;
use Session;

class MojoController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'vtype'      => 'not_in:0',
            'prathishta' => 'not_in:0',
            'vname'      => 'not_in:0',
            'star'       => 'not_in:0',
            'name'       => 'required',
            'date'       => 'required|date|after:today',
            'phone'      => 'required|numeric',
        ]);

        $vname = Vname::find($request->vname);
        $api = new Instamojo('40c79482174c9cc0f8fd8b54e77ab38e', '74420e94c0f2d8cc2a46626d7a13a882', 'https://test.instamojo.com/api/1.1/');

        try {
            $response = $api->paymentRequestCreate([
                'purpose'                 => 'Online Vazhipad',
                'amount'                  => $vname->price,
                'buyer_name'              => $request->name,
                'phone'                   => $request->phone,
                'send_email'              => true,
                'email'                   => Auth::guard('web')->user()->email,
                'allow_repeated_payments' => false,
                'redirect_url'            => url('/online_vazhipad/thankyou'),
                'webhook'                 => url('/online_vazhipad/webhook'),
            ]);
            $cart = new Cart();
            $cart->user_id = Auth::guard('web')->user()->id;
            $cart->vtype = $request->vtype;
            $cart->prathishta = $request->prathishta;
            $cart->vname = $request->vname;
            $cart->date = $request->date;
            $cart->phone = $request->phone;
            $cart->longurl = $response['longurl'];
            $cart->star = $request->star;
            $cart->price = $vname->price;
            $cart->name = $request->name;
            $cart->save();

            Session::flash('success', 'Item Successfully added to cart');

            return redirect()->back();
        } catch (Exception $e) {
            return 'Error: '.$e->getMessage();
        }
    }

    public function thankyou()
    {
        return view('online_vazhipad.instamojo.thankyou');
    }

    public function webhook()
    {
        return view('online_vazhipad.instamojo.webhook');
    }
}
