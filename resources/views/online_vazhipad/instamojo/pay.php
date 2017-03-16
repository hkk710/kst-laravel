<?php

    use App\Vname;

    $vname = Vname::find($request->vname);
    $api = new Instamojo\Instamojo(config('instamojo.api_key'), config('instamojo.auth_token'), 'https://test.instamojo.com/api/1.1/');

    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => "Online Vazhipad",
            "amount" => $vname->price,
            "buyer_name" => $request->name,
            "phone" => $request->phone,
            "send_email" => true,
            "email" => Auth::guard('web')->user()->email,
            "allow_repeated_payments" => false,
            "redirect_url" => url('/online_vazhipad/thankyou'),
            "webhook" => url('/online_vazhipad/webhook')
        ));
        $pay_ulr = $response['longurl'];

        //Redirect($response['longurl'],302); //Go to Payment page

        header("Location: $pay_ulr");
        exit();
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
?>
