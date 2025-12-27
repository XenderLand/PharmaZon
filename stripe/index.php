<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html>
  <head> 
    <title>Buy cool new product</title>
    <link rel="stylesheet" href="style.css ">
    <script src="https://www.paypal.com/sdk/js?client-id=ARb-D4V8Ge9Ue-LfbCla7KDvxQn0RYeHq9OSJ7XoYn5VV0zgLDmNxHnaCZSj-G-mM5J-IWJ5U8QbsFfj"></script>
  </head>
  <body>
    
      <div class="container">
      <h1>Stripe Checkout Integraion</h1>
  <div class="panel">
  
  <div class="overlay hidden" ><div class="overlay-content" ><img src="https://i.imgur.com/EHyR2nP.png" 
  alt="processing..." /></div>  </div>  

  <div class="panel-heading">
      <h3 class="panel-title">Change <?php echo $itemPrice; ?> with PayPal</h3>


  
        <p><b> Item Name: </b><?php echo $itemName;?></b></p>
        <p><b> Price: </b><?php echo $itemPrice. ' ' .strtoupper($currency);?></b></p>


  </div> 
  <div class="panel-heading">
    <div id="paymentResponse" class="hidden"></div>
    <div id="paypal-button-container"></div>
    
  </div>

        <button class="stripe-button" id="payButton">
          <div class="spinner hidden" id="spinner"></div>
          <span id="buttonText">Pay Now</span>
        </button>
      </div>
    </div>
   

    <script>
      const stripe = stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

      const paybtn = document.querySelector("#payButton");

      paybtn.addEventListener("click", function (evt){
            setLoading(true);

            createCheckoutSession().then(function (data){
              if(data.sessionId){
                stripe.redirectToCheckout({
                  sessionId: data.sessionId,
                }) .then(handleResut);
              }else{
                  handleResult(data);
              }
              
            });
      });

        const createCheckoutSession = function (stripe) {
            return fatch("payment_init.php",{
              method: "POST",
              headers: {
                "content-Type": "application/json",
              },
              body: JSON.stringify({
                createCheckoutSession: 1,
              }),

            }).then(function (result){
              return result.json();
            });
        };

        const handleResult = function (result) {
          if (result.error){
            showMessage(result.error.message);
          }
          setLoading(false);
        };

        function setLoading(inLoading) {
          if (isLoading) {
            payBtn.disabled = true;
            document.querySelector("#spinner").classList.remove("hiddden");
            document.querySelector("#buttonText").classList.add("hiddden");
          }else{
            payBtn.disabled = false;
            document.querySelector("#spinner").classList.add("hiddden");
            document.querySelector("#buttonText").classList.remove("hiddden");
          }
        }

        function showMessage(messageText) {
          const messageContainer = document.querySelector("#paymentResponse");
          messageContainer.classList.remove("hidden");
          messageContainer.textContent = messageText;

          setTimeout(function(){
            messageContainer.classList.addd("hidden");
            messageText.textContent = "";
          }, 5000);
        }


    </script>
  </body>
</html>