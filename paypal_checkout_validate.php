<?php

include_once 'config.php';

class PaypalCheckout{
    public $paypalAuthAPL = PAYPAL_SANDBOX? 'https://api-m.sandbox.paypal.com/v1/oauth2/token':
    'https://api-m.paypal.com/v1/oauth2/token';
    public $paypalAPI = PAYPAL_SANDBOX?'https://api-m.sandbox.paypal.com/v2/checkout':
    'https://api-m.paypal.com/v2/checkout';
    public $paypalClientID = PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_ID:PAYPAL_PROD_CLIENT_ID;
    public $paypalSecret = PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_SECRET:PAYPAL_PROD_CLIENT_SECRET;

     //   PUBLIC function validate($order_id){
  //          $ch - curl_init();
    //            curl_setopt($ch, CURLOPT_URL, $this-> paypalAuthAPI);
      //          curl_setopt($ch, CURLOPT_HEADER, false);
        //        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this-> paypalAuthAPI);
          //      curl_setopt($ch, CURLOPT_POST, true);
            //    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

  //              curl_setopt($ch, CURLOPT_USERPWD, $this->paypalSecret);
    //            curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
      //          $auth_response = json_decode(curl_exec($ch));
        //        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
          //      curl_close($ch);
            //    if ($http_code != 200 && !empty($auth_response->error)){
              //      throw new Exception('Errpr '.$auth_response->error.': '.$auth_response->error_description);
                }
 //           if (empty($auth_response)){
   //             return false;

     //       }else{
       //         if ( !empty($auth_response->access_token)){}
         //   }
        //}
//};


?>