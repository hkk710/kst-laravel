<?php

    use App\Vname;

    $vname = Vname::find($request->vname);
    $api = new Instamojo\Instamojo('40c79482174c9cc0f8fd8b54e77ab38e', '74420e94c0f2d8cc2a46626d7a13a882', 'https://test.instamojo.com/api/1.1/');

    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => "Online Vazhipad",
            "amount" => $vname->price,
            "buyer_name" => $request->name,
            "send_email" => true,
            "email" => Auth::user()->email,
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
