<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{ 
	if (isset($_POST['submit'])) {

		mysqli_query($con,"update orders set 	paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
		unset($_SESSION['cart']);
		header('location:order-history.php');

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

	    <title>Shopping Portal | Payment Method</title>
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
		<link rel="stylesheet" href="assets/css/config.css">
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
    <body class="cnt-home">
	
		
<header class="header-style-1">
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Payment - Paystack </li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<style>
	
</style>

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="checkout-box faq-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
					<h2> Paystack Payment</h2>
					
					<img href="paystack.php" src="PNG icons/1024px-Paystack_Logo.png" width="200" height="80"  alt="payment">

					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
					
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	         Paystack
	        </a>
	     </h4>
    </div>
	
<form id="paymentForm" >

	
        <div class="form-group" >
          <label for="email">Email Address</label>
          <input type="email" id="email-address" required />
        </div>
                <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" id="first-name" />
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" />
        </div>
		<div class="row">
                  <div class="totalPrice">Total Price: Gh$ <?php echo $_SESSION['tp']="$totalprice". ".00"; ?></div>

                </div>
          <button type="submit" name="submit" onclick="payWithPaystack()"> Pay </button>
        </div>
</form>
    <!-- panel-heading -->

	    	


		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->

 <style>

		
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
						/* Styling for form container */
				#paymentForm {
					width: 300px;
					margin: 0 auto;
				}
				
				/* Styling for form groups */
				.form-group {
					margin-bottom: 20px;
				}
				
				/* Styling for labels */
				label {
					display: block;
					font-weight: bold;
					margin-bottom: 5px;
				}
				
				/* Styling for input fields */
				input[type="email"],
				input[type="tel"],
				input[type="text"] {
					width: 100%;
					padding: 8px;
					border: 1px solid #ccc;
					border-radius: 4px;
				}
				
				/* Styling for submit button */
				button[type="submit"] {
					margin-top: 1rem;
				display: inline-block;
				font-size: 1rem;
				color: #000000;
				background: var(--yellow);
				border-radius: 1rem;
				cursor: pointer;
				padding: 1rem 2rem;
				}
				
				button[type="submit"]:hover {
					color: var(--yellow);
				background: var(--black);
				letter-spacing: .1rem;
				font-weight: bolder;
				}
				.row .totalPrice{
					font-size: 1.5rem;
					color: var(--orange);
				}
  </style>
      
      <script src="https://js.paystack.co/v1/inline.js"></script> 
<script >


		var TotalPrice = "<?php echo $_SESSION['tp']="$totalprice". ".00"?>";
		var address = "http://localhost/pharm/order-history.php";

		const paymentForm = document.getElementById('paymentForm');
		paymentForm.addEventListener("submit", payWithPaystack, false);
		function payWithPaystack(e) {
		e.preventDefault();

		let handler = PaystackPop.setup({
			key: 'pk_test_ffe012c03f22b52a9f5cf534237080931a60d3ad', // Replace with your public key
			email: document.getElementById("email-address").value,
			amount: TotalPrice * 100,
			currency: 'GHS',
			
			ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
			// label: "Optional string that replaces customer email"
			onClose: function(){
			alert('Window closed.');
			},
			callback: function(response){
			let message = 'Payment complete! Thanks for Shopping with PharmaZon. Reference: ' + response.reference;
			alert(message);
			window.location.href = "http://localhost/pharm/payment-method.php";
			}
			// Simulate a mouse click:
			
		});

		handler.openIframe();
		}

</script>

 <style>

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
					
                *{
                font-family: Georgia, 'Times New Roman', Times, serif;
               
                }
				
					.flip-card {
					background-color: transparent;
					width: 240px;
					height: 154px;
					perspective: 1000px;
					color: white;
					margin-top: 2rem;
					}

					.heading_8264 {
					position: absolute;
					letter-spacing: .2em;
					font-size: 0.5em;
					top: 2em;
					left: 18.6em;
					}

					.logo1 {
					position: absolute;
					top: 6.8em;
					left: 11.7em;
					}

					.chip {
					position: absolute;
					top: 2.3em;
					left: 1.5em;
					}

					.contactless {
					position: absolute;
					top: 3.5em;
					left: 12.4em;
					}

					.number {
					position: absolute;
					font-weight: bold;
					font-size: .6em;
					top: 8.3em;
					left: 1.6em;
					}

					.valid_thru {
					position: absolute;
					font-weight: bold;
					top: 635.8em;
					font-size: .01em;
					left: 140.3em;
					}

					.date_8264 {
					position: absolute;
					font-weight: bold;
					font-size: 0.5em;
					top: 13.6em;
					left: 3.2em;
					}

					.name {
					position: absolute;
					font-weight: bold;
					font-size: 0.5em;
					top: 16.1em;
					left: 2em;
					}

					.strip {
					position: absolute;
					background-color: black;
					width: 15em;
					height: 1.5em;
					top: 2.4em;
					background: repeating-linear-gradient(
						45deg,
						#303030,
						#303030 10px,
						#202020 10px,
						#202020 20px
					);
					}

					.mstrip {
					position: absolute;
					background-color: rgb(255, 255, 255);
					width: 8em;
					height: 0.8em;
					top: 5em;
					left: .8em;
					border-radius: 2.5px;
					}

					.sstrip {
					position: absolute;
					background-color: rgb(255, 255, 255);
					width: 4.1em;
					height: 0.8em;
					top: 5em;
					left: 10em;
					border-radius: 2.5px;
					}

					.code {
					font-weight: bold;
					text-align: center;
					margin: .2em;
					color: black;
					}

					.flip-card-inner {
					position: relative;
					width: 100%;
					height: 100%;
					text-align: center;
					transition: transform 0.8s;
					transform-style: preserve-3d;
					}

					.flip-card:hover .flip-card-inner {
					transform: rotateY(180deg);
					}

					.flip-card-front, .flip-card-back {
					box-shadow: 0 8px 14px 0 rgba(0,0,0,0.2);
					position: absolute;
					display: flex;
					flex-direction: column;
					justify-content: center;
					width: 100%;
					height: 100%;
					-webkit-backface-visibility: hidden;
					backface-visibility: hidden;
					border-radius: 1rem;
					}

					.flip-card-front {
					box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 2px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -1px 0px inset;
					background-color: #171717;
					}

					.flip-card-back {
					box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 2px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -1px 0px inset;
					background-color: #171717;
					transform: rotateY(180deg);
					}
					
		.breadcrumb .container .breadcrumb-inner li{
				color: var(--orange);
		}
		.panel-heading .unicase-checkout-title{
			color: var(--orange);

		}
		.panel .panel-heading h4{
			color: var(--orange);

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
				.panel-collapse .panel-body{
					font-size: 1rem;
					color: var(--black);
					font-weight: 600;
				}
				


</style>
					  	
					</div><!-- /.checkout-steps -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
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
<?php } ?>