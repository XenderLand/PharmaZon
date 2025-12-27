<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">                    
    <link rel="stylesheet" href="pharma.css ?v=<?php echo time(); ?>">
</head>

<body>

    

    <header>
        <a href="../index.php" class ="logo"><i class="fas fa-hospital"></i>PharmaZon</a>
    
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#OnlineShop">Online Shop</a>
            <a class="active" href="#product">products</a>
            <a href="#health">Health Tips</a>
            <a href="#about">About</a>
    
        </nav>
        <form method="get" action="config/search.php">
            <label for="search-input"></label>
            <input type="text" placeholder="search here..." name="query" id="search-input">
            <button type="submit">Search</button>
        </form>
    
       

        <div class="start">
            <a href="../logout.php" class="get-started-btn">Logout</a> 
        </div>

           <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <a  class="fas fa-shopping-cart"  id="bars" > </a>


          </div>
        
    </header>
   <SECTion>
    <div class="product-container">
       
        <div class="product-images">
            <img src="../PNG icons/5929159_avatar_doctor_health_hospital_medical_icon.png" alt="Product Image 1">
           
        </div>
        <div class="product-details">
            <h1 class="product-name">Consult Our Pharmacist</h1>
            <p class="product-price"> Contact out qualified healthcare professionals for any health concerns</p>

           
            <p class="product-description">We can offer clinical advice and over-the counter madicines 
                for a range of minor illness, such as coughs, colds, sore throats, tummy trouble and 
                aches and pains. We can work closely with doctor and nurse to give lifestyle advise, guidance and general health information.            
                </p>
        </div>
 
   </section>
      <section class="OnlineShop" id="OnlineShop">
        <h2>Contact For Help</h2>

        <div class="box-container">

            <div class="box">
              
                <img src="../PNG icons/5296520_bubble_chat_mobile_whatsapp_whatsapp logo_icon.png" alt="Product Preview">


                <a href="https://api.whatsapp.com/send?phone=+223261760077&text=Welcome%20to%20PharmaZon%20how%20may%20i%20help%20you?" target="_blank" class="pag"><h3>Chat on WhatsApp</h3> </a>


               
            </div>
            <div class="box">
              
                <img src="../PNG icons/phone-call(1).png" alt="Product Preview">

                <a href="../products/martinLiver.php" class="pag"><h3>Call Us</h3> </a>


             
                <span>0246094635</span>
            </div>
            <div class="box">
              
                <img src="../PNG icons/5296499_fb_facebook_facebook logo_icon.png" alt="Product Preview">
                

                <a href="https://www.facebook.com/your_page" target="_blank" class="pag"><h3>Facebook</h3> </a>


            </div>
        </div>
      </section>
   
  


    
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Locations</h3>
            <a href="RestaurantHome/rhudan.php">Takoradi</a>
            <a href="#">Cape Coast</a>
            <a href="#">Accra</a>
            <a href="#">Kumasi</a>
            <a href="#">Volta </a>
        </div>
        <div class="box">
            <h3>Quick Links</h3>
            <a href="#home">Home</a>
            <a href="#OnlineShop">Online Shop </a>
            <a href="#about">About</a>
            <a href="#product">Product</a>
            <a href="#health">Health Tips </a>
        
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="www.facebook.com">Facebook</a>
            <a href="www.twitter.com">Twitter</a>
            <a href="www.instagram.com">Instagram</a>
        </div>
<div class="credit">copyright @ 2023 by <span>PharmaZon</span> </div>
    </div>
</section>


</body>
</html>
