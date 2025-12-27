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
    <title>DziDzi Shop</title>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">                    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    
</head>
<body>
<header>
            <nav class="navbar">
        <a class="active" href="#home">Home</a>
        <a href="#dishes">Dishes</a>
        <a href="#about">about</a>
        <a href="#menu">Menu</a>
        <a href="#restaurant">restaurants</a>
        <a href="#review">Review</a>
        <a href="#order">Order</a>

    </nav>
    <form method="get" action="config/search.php">
        <label for="search-input"></label>
        <input type="text" placeholder="search here..." name="query" id="search-input">
        <button type="submit">Search</button>
    </form>

    <div class="start">
        <a href="login.php" class="get-started-btn">Logout</a> 

    

    </div>
   

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-shopping-cart" id="bars"><span>0</span></i> 
 
        </div>
    
</header>
                     



<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close" ></i>
        
   
    </form>
<section>
    
    
     </section>

    <section class="check" id="check">
   
    <form action="../config/billingaddress.php" method="POST" enctype="multipart/form-data">
                     <h1 class="heading">Checkout</h1>
                    <h3 class="sub-heading">Billing Address</h3>

                <div class="inputBox">
                    <div class="input">
                        <span>Name</span>
                        <input type="text" placeholder="Enter your full name" >
                    </div>
                        <div class="input">
                            <span>E-mail</span>
                            <input type="text" placeholder="Enter your email" >
                            
                        </div>
                        </div>
                    <div class="inputBox">
                            <div class="input">
                                <span>Your number</span>
                                <input type="text" placeholder="Enter your number" >
                            </div>
                                <div class="input">
                                    <span>Location </span>
                                    <input type="text" placeholder="Enter your location" >
                                    
                                </div>
                                </div>
                                <div class="inputBox">
                                    <div class="input">
                                        <span>Your address</span>
                                    <textarea name="" placeholder="Enter your address" id="" cols="42" rows="10"></textarea>       
                                    </div>
                                        <div class="input">
                                            <span>Post address</span>
                                            <textarea name="" placeholder="Enter your post address" id="" cols="42" rows="10"></textarea>       
                                            
                                        </div>
                                    
                                </div>
                            
                                <div>
                                        <button type="submit" class="btn" name="billing-btn">order now</button>

                                    </div>

                  

                        
           
        </div>
                               
     </form>


    </section>

 







<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="javascript/script.js"></script>

<script src="javascript/cart.js"></script>




</body>
</html>