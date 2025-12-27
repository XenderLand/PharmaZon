<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit'])){
		if(!empty($_SESSION['cart'])){
		foreach($_POST['quantity'] as $key => $val){
			if($val==0){
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['quantity']=$val;

			}
		}
			echo "<script>alert('Your Cart hasbeen Updated');</script>";
		}
	}
// Code for Remove a Product from Cart
if(isset($_POST['remove_code']))
	{

if(!empty($_SESSION['cart'])){
		foreach($_POST['remove_code'] as $key){
			
				unset($_SESSION['cart'][$key]);
		}
			echo "<script>alert('Your Cart has been Updated');</script>";
	}
}

// code for insert product in order table


if(isset($_POST['submitcheckout'])) 
{
	

	$quantity=$_POST['quantity'];
	$pdd=$_SESSION['pid'];
	$value=array_combine($pdd,$quantity);


		foreach($value as $qty=> $val34){


mysqli_query($con,"insert into orders(userId,productId,quantity) values('".$_SESSION['id']."','$qty','$val34')");
header('location:payment-method.php');
}
}
if(isset($_POST['shopaddress']))
{
	$fullName=$_POST['fullName'];
	$number=$_POST['number'];
	$address=$_POST['address'];
	$region=$_POST['region'];
	$city=$_POST['city'];


$query=mysqli_query($con,"insert into shippingaddress(fullName,number,address,region,city) 
values('$fullName','$number','$address','$region','$city')");
header('location:payment-method.php');

if($query)
{
	echo "<script>alert('Shipping Address Updated');</script>";
  header('location:payment-method.php');

}
else{
echo "<script>alert(' something went worng');</script>";
}

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


	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<!-- Demo Purpose Only. Should be removed in production : END -->

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
<!-- ============================================== HEADER : END ============================================== -->



<div class="container">
      
<div class="checkoutLayout">
         
        <form name="shipping" method="post" >

	        <div class="right">
                <h1>Shipping</h1>
                  <div class="form">
                    <div class="group">
                      <label for="">Full Name</label>
                      <input type="text" name="fullName" id="">
                    </div>
                    <div class="group">
                      <label for="">Phone Number </label>
                      <input type="text" name="number" id="">
                    </div>
                    <div class="group">
                      <label for="">Address</label>
                      <input type="text" name="address" id="">
                    </div>
                    <div class="group">
                      <label for="">Region</label>
                      <select name="region" id="">
                        <option value="">Choose...</option>
                        <option value="Accra">Accra</option>
                        <option value="Takoradi">Takoradi</option>
                        <option value="Cape Coast">Cape Coast</option>
                        <option value="Kumasi">Kumasi</option>
                      </select>          
                    </div>
                    <div class="group">
                      <label for="">City</label>
                      <select name="city" id="">
                        <option value="">Choose...</option>
                        <option value="Accra">Accra</option>
                        <option value="Secondi">Sekondi</option>
                        <option value="Tema">Tema</option>
                        <option value="Takoradi">Takoradi</option>
                        <option value="Kasoa">Kasoa</option>
                        <option value="Winneba">Winneba</option>
                        <option value="Takwa">Takwa</option>
                        <option value="Kumasi">cape Coast</option>
                        <option value="Mallam">Mallam</option>
                        <option value="Mallam">Circle</option>
                      </select>          
                    </div>
                

                </div>
    
       <div class="return">
                
                <div class="row">
                  <div>Total Price</div>
                  <div class="totalPrice"><?php echo $_SESSION['tp']="$totalprice". ".00"; ?></span></div>

                </div>


        </div>
       
              <button type="submit" name="shopaddress" class="btn">CHECKOUT</button>
             
              </form>
             
            </div>
          </div>
          </div>
	
		
		
		
<?php echo include('includes/brands-slider.php');?>
</div>
</div>
<?php include('includes/footer.php');?>


	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
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
