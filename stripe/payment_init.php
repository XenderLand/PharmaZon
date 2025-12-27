<?php

require_once 'config.php';

require_once '/stripe-php/init.php';

$stripe = new \Stripe\StripeClient(STRIPE_API_KEY);

 $response = array(
    'status' => 0,
    'error' => array(
            'message' => 'Invalid Request!' 
    )
    );

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input = file_get_contents('php://input');
        $request = json_decode($input);
    }
    if (json_last_error() !== JSON_ERROR_NONE){
        http_response_code(400);
        echo json_encode($response);
        exit;
    }

    if(!empty($request->createCheckoutSession)){
        $stripeAmount = round($productPrice*100, 2);

        try {

        } catch(Exception $e) {
            $api_error = $e->getMessage();

        }
    }
?>