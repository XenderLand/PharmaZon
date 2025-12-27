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

		mysqli_query($con,"update orders set paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
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

	    <title>PharmaZon | Payment Method</title>
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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
				<li class='active'>Payment Method</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

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
				
</style>

<section>
	<!-- panel-heading -->
    <div class="paycontainer">
        <div class="title">
            <h4>Select a <span style="color: #6064b6">Payment</span> method</h4>
        </div>

	    <form name="payment" method="post">
            <input type="radio" name="paymethod" value="visa" id="visa" >
            <input type="radio" name="paymethod" value="mastercard" id="mastercard">
            <input type="radio" name="paymethod" value="paypal" id="paypal">
            <input type="radio" name="paymethod" value="AMEX" id="AMEX">




            <div class="category">
                <label for="visa" class="visaMethod">
                    <div class="imgName">
                        <div class="imgContainer visa">
                            <img src="https://i.ibb.co/vjQCN4y/Visa-Card.png"  alt="">
                        </div>
                        <span class="name">VISA</span>
                    </div>
                    <span class="check" ><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="mastercard" class="mastercardMethod">
                    <div class="imgName">
                        <div class="imgContainer mastercard">
                            <img src="https://i.ibb.co/vdbBkgT/mastercard.jpg" alt="">
                        </div>
                        <span class="name">Mastercard</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="paypal" class="paypalMethod">
                    <div class="imgName">
                        <div class="imgContainer paypal">
                            <img src="https://i.ibb.co/KVF3mr1/paypal.png" alt="">
                        </div>
                        <span class="name">Paypal</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="AMEX" class="amexMethod">
                    <div class="imgName">
                        <div class="imgContainer AMEX">
                            <img src="https://i.ibb.co/wQnrX86/American-Express.jpg" alt="">
                        </div>
                        <span class="name">AMEX</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>
                       
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">submit</button>

                   
                <style>
                  

                    .paycontainer{
                        width: 400px;
                        border-radius: 8px;
                        padding: 40px;
                        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1),
                                    0 5px 12px -2px rgba(0, 0, 0, 0.1),
                                    0 18px 36px -6px rgba(0, 0, 0, 0.1);
                       
                        margin-left: 40rem;
                        padding-bottom: 2rem;
                    }

                    .paycontainer .title{
                        font-size: 20px;
                        font-family: Arial, Helvetica, sans-serif;
                    }

                    .paycontainer form input{
                        display: none;
                    }

                    .paycontainer form .category{
                        margin-top: 10px;
                        padding-top: 20px;

                        display: grid;
                        grid-template-columns: repeat(2, 1fr);
                        grid-gap: 15px;
                    }

                    .category label{
                         width: 100%; 
                         height: 65px; 
                        height: 145px;
                        padding: 20px;
                        box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
                        display: flex;
                         justify-content: space-between; 
                        justify-content: center;
                        align-items: center;
                        cursor: pointer;
                        border-radius: 5px;
                        position: relative;
                    }

                    /* label:nth-child(2), label:nth-child(3){
                        margin: 15px 0;
                    } */


                    #visa:checked ~ .category .visaMethod,
                    #mastercard:checked ~ .category .mastercardMethod,
                    #paypal:checked ~ .category .paypalMethod,
                    #AMEX:checked ~ .category .amexMethod{
                        box-shadow: 0px 0px 0px 1px #6064b6;
                    }


                    #visa:checked ~ .category .visaMethod .check,
                    #mastercard:checked ~ .category .mastercardMethod .check,
                    #paypal:checked ~ .category .paypalMethod .check,
                    #AMEX:checked ~ .category .amexMethod .check{
                        display: block;
                    }


                    label .imgName{
                        display: flex;
                        /* justify-content: space-between;
                        */
                        justify-content: center;
                        align-items: center;
                        flex-wrap: wrap;
                        flex-direction: column;
                        gap: 10px;
                    }

                    .imgName span{
                        /* margin-left: 20px; */
                        font-family: Arial, Helvetica, sans-serif;

                        position: absolute;
                        top: 72%;
                        transform: translateY(-72%);
                    }

                    .imgName .imgContainer{
                        width: 50px;
                        display: flex;
                        justify-content: center;
                        align-items: center;

                        position: absolute;
                        top: 35%;
                        transform: translateY(-35%);
                    }

                    img{
                        width: 50px;
                        height: auto;
                    }

                    .visa img{
                        width: 80px;
                        /* margin-left: 5px; */
                    }

                    .mastercard img{
                        width: 65px;
                    }

                    .paypal img{
                        width: 80px;
                    }

                    .AMEX img{
                        width: 50px;
                    }

                    .check{
                        display: none;
                        position: absolute;
                        top: -4px;
                        right: -4px;
                    }

                    .check i{
                        font-size: 18px;
                    }


                </style>
            </div>

        </form>
    </div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->
					  
					  	
					</div><!-- /.checkout-steps -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
</section>
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