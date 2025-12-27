<?php
session_start();
error_reporting(0);
include('../includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
		
		}else{
			$message="Product ID is invalid";
		}
	}
		echo "<script>alert('Product has been added to the cart')</script>";
		echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

        <title>PharmaZon</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">                    




	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="../css/all.min.css">
	    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="../assets/css/main.css">
	    <link rel="stylesheet" href="../assets/css/green.css">
	    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
		<link rel="stylesheet" href="../assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="../assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="../assets/css/animate.min.css">
		<link rel="stylesheet" href="../assets/css/rateit.css">
		<link rel="stylesheet" href="../assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="../assets/css/config.css">

		<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="../assets/images/favicon.ico">

	</head>
    <body class="cnt-home"></body>
<style>
                            body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 0;
                        background-color: #eee;
                    }
                    
                    :root{
                        --green: #27ae60;
                        --orange: rgb(255, 139, 7);
                        --black:#000000;
                        --red:rgb(255, 7, 7);
                        --yellow:rgb(255, 139, 7);
                        --light-color:#666;
                        --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
                        --white: #ffffff;
                        
                    }
                    
                                        
                    .add-cart{
                        margin-top: 1rem;
                        display: inline-block;
                        font-size: 1rem;
                        color: #000000;
                        background: var(--yellow);
                        border-radius: 1rem;
                        cursor: pointer;
                        padding: 1rem 2rem;
                                }
                                
                .btn{
                margin-top: 1rem;
                display: inline-block;
                font-size: 1rem;
                color: #000000;
                background: var(--yellow);
                border-radius: 1rem;
                cursor: pointer;
                padding: 1rem 2rem;
                }
                
            .btn:hover{
            color: var(--yellow);
                background: var(--black);
                letter-spacing: .1rem;
                font-weight: bolder;
            
            }
            
                 
                    
                    .OnlineShop .medic-container {
                        padding-top: 1rem;
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
                        gap: .5rem;
                        cursor: pointer;
                        padding: 1rem 1rem;
                        
                    }      
                    
                    
                    .OnlineShop .medic-container .shop{
                        padding: 1rem;
                        background: var(--orange);
                        border-radius:  .5rem;
                        border: .2rem solid rgba(0, 0, 0, 0.562);
                        box-shadow: var(--box-shadow);
                        position: relative;
                        overflow: hidden;
                        text-align: center;
                    
                    
                    }
                    
                    .OnlineShop .medic-container .shop:hover{
                        color: var(--yellow);
                        background: var(--black);
                        letter-spacing: .1rem;
                    }
                    
                    .OnlineShop .medic-container .shop .pag{
                        color: var(--black);
                    }
                    
                    .OnlineShop .medic-container .shop a:hover{
                        color: var(--yellow);
                        background: var(--black);
                        letter-spacing: .1rem;
                    }
                    
                    
                    
                    
                    .OnlineShop .box-container{
                        padding-top: 1rem;
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
                        gap: 1.5rem;
                        
                        
                        
                        
                        }
                        .OnlineShop .box-container .box{
                        
                        padding: 1rem;
                        background: #fff;
                        border-radius:  1rem;
                        border: .7rem solid #e4a451;
                        box-shadow: var(--box-shadow);
                        position: relative;
                        overflow: hidden;
                        text-align: center;
                        
                        }
                        .OnlineShop .box-container .box .fa-eye{
                            position: absolute;
                            top: 1.5rem ;
                            background: #eee;
                            border-radius: 50%;
                            height: 3rem;
                            width: 3rem;
                            line-height: 3rem;
                            font-size: 1.5rem;
                            color:blue;
                        
                        
                        }
                        .OnlineShop .box-container .box .fa-heart{
                        position: absolute;
                            top: 1.5rem ;
                            background: #eee;
                            border-radius: 50%;
                            height: 3rem;
                            width: 3rem;
                            line-height: 3rem;
                            font-size: 1.5rem;
                            color: var(--red);
                        
                        }
                        
                        
                        .OnlineShop .box-container .box .fa-heart{
                        right: -15rem;
                        
                        }
                        
                        .OnlineShop .box-container .box .fa-eye{
                        left: -15rem;
                        }
                        
                        .OnlineShop .box-container .box:hover .fa-heart{
                        right: 1.5rem;
                        
                        }
                        
                        .OnlineShop .box-container .box:hover .fa-eye{
                        left: 1.5rem;
                        }
                        
                        .OnlineShop .box-container .box .fa-eye:hover{
                        color:blue;
                        background: var(--yellow);
                        
                        }
                        
                        .OnlineShop .box-container .box .fa-heart:hover{
                        color: var(--red);
                        background: var(--yellow);
                        
                        }
                        
                        .OnlineShop .box-container .box img{
                        border-radius: 10%;
                        margin: 1rem 0;
                        width: 40vh;
                        height: 55%;
                        
                        }
                        
                        .OnlineShop .box-container .box .pag{
                        color: var(--black);
                        font-size: 1.7rem;
                        }
                        .OnlineShop .box-container .box h3{
                        color: var(--black);
                        font-size: 1.5rem;
                        }
                        
                        
                        .OnlineShop .box-container .box .stars{
                        padding: .5rem 0;
                        
                        }
                        .OnlineShop .box-container .box .stars i{
                        font-size: 1.2rem;
                        color: gold;
                        outline-color: black;
                        
                        }
                        
                        .OnlineShop .box-container .box span{
                        color: var(--yellow);
                        font-size: 1.5rem;
                        font-weight: bolder;
                        margin-right: 1rem;
                        
                        }
                        .OnlineShop .box-container .box span:hover{
                        color: var(--black);
                        }
                    
                        

                    
                    
                        .product-container {
                            height: 70vh;
                            background-image: url(/Medicine/pharm4.jpg);
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                            padding-top: 5rem;
                        
                        }
                        .OnlineShop h2{
                        font-size: 2rem;
                        padding: 1rem;
                        color: var(--black);
                        background:#ff9204;
                        border-radius: 1rem;
                        margin-top: 5rem;
                        align-content: center;
                        justify-content: center;
                        display: flex;
                        width: 50%;
                        margin-left: 25%;
                        
                        }
                        
                        .product-images {
                            display: flex;
                            justify-content: center;
                            margin-bottom: 10px;
                            border-radius: .5rem;
                        }
                        
                        .product-images img {
                            max-width: 350px;
                            height: auto;
                            border: 1rem solid #ff9204;
                            padding: 5px;
                            margin: 0 10px;
                            border-radius: 1rem;
                    
                        }
                        
                        .product-details {
                            margin-bottom: 5rem;
                            background-color: #eee;
                    
                        }
                        
                        .product-name {
                            font-size: 3rem;
                            align-content: center;
                            justify-content: center;
                            display: flex;      
                            background-color: #eee;
                    
                        }
                        
                        .product-price {
                            font-size: 20px;
                            color: var(--orange);
                            margin-bottom: 20px;
                            display: flex;
                            align-content: center;
                            justify-content: center;
                            padding: 1rem;
                            background: var(--black);
                    
                    
                        
                        }
                        
                        .product-description {
                            max-width: 1700px;
                            font-size: 1.3rem;
                            color: var(--black);
                            background:#04c7bdd5;
                            display: flex;
                            align-content: center;
                            justify-content: center;
                            text-align: center;
                            padding: 2rem;
                        }
                        
                        .product-preview {
                            text-align: center;
                    
                            
                        }
                        
                        .box-container h2 {
                            font-size: 20px;
                            margin: 0;
                            margin-bottom: 10px;
                            background-color: #eee;
                    
                        }
                        
                        .product-preview img {
                        max-width: 1900px;
                        height: auto;
                            border: 1px solid  #f3bc75;
                            padding: 5px;
                            background-color:  #f3bc75;
                    
                        }
                        
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                        
                    
                        @media(max-width:991px){
                        html{
                            font-size: 55%;
                    
                        }
                        }header{
                        padding: 1rem 2rem;
                        }
                    
                        section{
                        padding: 2rem;
                        }
                    
                        @media(max-width:768px){
                        header .icons  #menu-bars{
                            display: inline-block;
                        }
                        
                        @media(max-width:450px){
                        html{
                            font-size: 50%;
                    
                        }
                    }
                    
                    }
</style>
    	<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('../PharmAdmin/includes/main-header.php');?>
<?php include('../includes/menu-bar.php');?>
</header>

<!-- ============================================== HEADER : END ============================================== -->

   <SECTion>
    <div class="product-container">
       
        <div class="product-images">
            <img src="../PNG icons/first-aid-box.png" alt="Product Image 1">
           
        </div>
        <div class="product-details">
            <h1 class="product-name">Herbal Products</h1>
            <p class="product-price">Herbal Products</p>

           
            <p class="product-description">Martins Liver Salt has various flavours that relives 
                upset stomach, heartburn, biliousness, acidity, indigestion and constipation.
                It stimulates the flow of liver bile to speed digestion and helps to keep you healty.
                Each convenient sachet contains a single measured 5 gm dose.  </p>
        </div>

   </section>
      <section class="OnlineShop" id="OnlineShop">
        <h2>Product Preview</h2>

        <div class="box-container">

        <div class="box">
                 
                 <img src="../Medicine/home-first-aid-kit-large-f1-500x500.jpg"  alt="" class="product-img">

                 <a href="../products/martinLiver.php" class="product-title"> <h3>Martins Liver Salt </h3> </a>

                 <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                 </div>
                 <span class="price">$55.00</span>
                 <a class="btn add-cart " >Add to Cart</a>
             </div>
             
             <div class="box"> 
               
                 <img src="../Medicine/LUFART-DS-min.png"  alt="" class="product-img">
                 <a href="/products/martinLiver.php"  class="product-title"><h3> Lufart DS </h3> </a>

                 <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                 </div>
                 <span class="price">$16.10</span>
                 <a class="btn add-cart " >Add to Cart</a>
             </div>
             
             <div class="box">
                
                 <img src="../Medicine/583-1.jpg"  alt="" class="product-img">
                 <a href="/products/martinLiver.php" class="product-title"><h3>Himalaya's Confido</h3> </a>

                 <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                 </div>
                 <span class="price">$45.00</span>
                 <a class="btn add-cart " >Add to Cart</a>
             </div>
             
        </div>
      </section>
   
  


    
<?php include('../includes/footer.php');?>
	
	<script src="../assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="../assets/js/bootstrap.min.js"></script>
	
	<script src="../assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	
	<script src="../assets/js/echo.min.js"></script>
	<script src="../assets/js/jquery.easing-1.3.min.js"></script>
	<script src="../assets/js/bootstrap-slider.min.js"></script>
    <script src="../assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="../assets/js/lightbox.min.js"></script>
    <script src="../assets/js/bootstrap-select.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
	<script src="../assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	<script src="javascript/swiper-bundle.min.js"></script>

	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>