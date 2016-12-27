<?php

    use App\Vname;

    $vname = Vname::find($_POST['vname']);
    $product_name = $vname->name;
    $price = $vname->price;
    $name = $_POST["name"];
    $phone = '';
    $email = Auth::user()->email;


    include 'src/instamojo.php';

    $api = new Instamojo\Instamojo('40c79482174c9cc0f8fd8b54e77ab38e', '74420e94c0f2d8cc2a46626d7a13a882','https://test.instamojo.com/api/1.1/');


    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $product_name,
            "amount" => $price,
            "buyer_name" => $name,
            "phone" => $phone,
            "send_email" => true,
            "send_sms" => true,
            "email" => $email,
            'allow_repeated_payments' => false,
            "redirect_url" => "http://localhost:8000/online_vazhipad/thankyou",
            "webhook" => "http://localhost:8000/online_vazhipad/webhook"
            ));
        //print_r($response);

        $pay_ulr = $response['longurl'];

        //Redirect($response['longurl'],302); //Go to Payment page

        header("Location: $pay_ulr");
        exit();

    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
?>
