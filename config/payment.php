
<?php
session_start();
if(!isset($_SESSION['message'])){
    header('Location:login.php');
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DziDzi</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="../css/style1.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

</head>
<body>

    <header>
        <a href="index.html" class="logo"><i class="fas fa-utensils"></i>dzidzi</a>
       
        <nav class="navbar">
            <a class="active" href="#home">Home</a>
            <a href="#dishes">Dishes</a>
            <a href="#about">about</a>
            <a href="#menu">Menu</a>
            <a href="#restaurant">restaurants</a>
            <a href="#review">Review</a>
            <a href="#order">Order</a>
    
        </nav>
       
    
        <div class="start">
            <a href="login.php" class="get-started-btn">Logout</a> 
    
        
    
        </div>
       
    
            <div class="icons">
                <i class="fas fa-bars" id="menu-bars"></i>
     
               
    
            </div>
        </div>
        
    </header>
    
<section>

    <div class="payment">

        <div class="payment-box">
            <form action="config/pay.php" method="POST" enctype="multipart/form-data">

                <div class="payment-value">
                    <h6>Checkout</h6>
                    <h1>Payment Method</h1>
                        <label for="region">region
                            <select name="region" id="Region">
                            <option value="Accra">Accra</option>
                            <option value="Cape Coast">Cape Coast</option>
                            <option value="Takoradi">Takoradi</option>
                            <option value="Kumasi">Kumasi</option>
                            <option value="Ho">Ho</option>
                            <option value="Tamale">Tamale</option>
                            </select>
                        </label>
                        <label for="cardno">Card Number
                            <input type="text" name="cardno" id="cardno" maxlength="19" onkeypress="cardspace()">
                        </label>
                        <div class="float">
                            <label for="validtill">valid till
                                <input type="text" name="validtill" id="validtill" maxlength="7" onkeypress="addslashes()">
                            </label>
                            <label for="ccv">CVV
                                <input type="text" name="cvv" id="cvv" maxlength="3">
                            </label> 
                        </div>
                            <label for="checkbox">
                                <input type="checkbox" name="checkbox" id="checkbox">
                                <p>Payment Address is the same as the Delivery Address</p>
                            </label>
                            <button type="submit" class="btn-primary" name="credit-btn">Pay Gh$ 55 </button>

                
                   
                </div>
            </form>
        </div>
                       
    </div>
    
         
        <div class="payment">

            <div class="payment-box">

                <div class="payment-value">
                    <h6>Checkout</h6>
                    <h1>Mobile Money</h1>
                    <form action="config/pay.php" method="POST" enctype="multipart/form-data">
                        <label for="network">Network
                            <select name="network" id="Network">
                            <option value="airtel">AirtelTigo</option>
                            <option value="mtn">MTN</option>
                            <option value="vodafone">vodafone</option>
                           
                            </select>
                        </label>
                        <label for="phoneno">Phone Number
                            <input type="text" name="phoneno" id="phoneno" maxlength="10" >
                        </label>
                       
                          
                            <button type="submit" class="form-control" name="mmpay-btn">Pay Gh$ 55 </button>

                
                    </form>
                </div>
            </div>
                       
         </div>
         
           
        <div class="payment">

            <div class="pay-container">
                <h1>PayPal</h1>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="email@example.com">
                    <input type="hidden" name="lc" value="US">
                    <input type="hidden" name="item_name" value="Product Name">
                    <input type="hidden" name="amount" value="10.00">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="button_subtype" value="services">
                    <input type="hidden" name="no_note" value="1">
                    <input type="hidden" name="tax_rate" value="0.000">
                    <input type="hidden" name="shipping" value="0.00">
                    <input type="hidden" name="btn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
           
                       
         </div>
       
        
      
   
   
 
       

</section>
    
    



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="javascript/script.js"></script>

<script src="javascript/cart.js"></script>


</body>
</html>