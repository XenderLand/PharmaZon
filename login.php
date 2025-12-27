<?php
        session_start();
        error_reporting(0);
        include('includes/config.php');
        // Code user Registration
        if(isset($_POST['submit']))
        {
        $name=$_POST['fullname'];
        $email=$_POST['emailid'];
        $contactno=$_POST['contactno'];
        $password=md5($_POST['password']);
        $query=mysqli_query($con,"insert into users(name,email,contactno,password) values('$name','$email','$contactno','$password')");
        if($query)
        {
            echo "<script>alert('You are successfully register');</script>";
        }
        else{
        echo "<script>alert('Not register something went worng');</script>";
        }
        }
        // Code for User login
        if(isset($_POST['login']))
        {
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $query=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'");
        $num=mysqli_fetch_array($query);
        if($num>0)
        {
        $extra="my-cart.php";
        $_SESSION['login']=$_POST['email'];
        $_SESSION['id']=$num['id'];
        $_SESSION['username']=$num['name'];
        $uip=$_SERVER['REMOTE_ADDR'];
        $status=1;
        $log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
        $host=$_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        exit();
        }
        else
        {
        $extra="login.php";
        $email=$_POST['email'];
        $uip=$_SERVER['REMOTE_ADDR'];
        $status=0;
        $log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
        $host  = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        header("location:http://$host$uri/$extra");
        $_SESSION['errmsg']="Invalid email id or Password";
        exit();
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

	    <title>Pharmazon | Login </title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">                    

	    
	    <!-- Customizable CSS -->
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
<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
    	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>



	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

    <style>
                body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: var(--white);
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
                *{
                font-family: Georgia, 'Times New Roman', Times, serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                text-decoration: none;
                outline: none; border: none;
                text-transform: capitalize;
                transition: all .2s linear;
                }
                .class{
                
                background-image: url(Medicine/roberto-sorin-RS0-h_pyByk-unsplash.jpg);
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                width: 100%;
                background-position: center;
                background-size: cover;
                padding: 2rem 9%;
                
                }                

                .log-container{
                padding-bottom: 15rem;

                }

                
                .sign-container{
                padding-top: 6rem;

                }
                
                .log-box{
                position: relative;
                width: 400px;
                height: 585px;
                background: transparent;
                border: 3px solid  #ff9204;
                border-radius: 2rem;
                backdrop-filter: blur(10px);
                display: flex;
                justify-content: center;
                align-items: center;
                
                }
                
                .sign-box{
                position: relative;
                width: 400px;
                height: 685px;
                background: transparent;
                border: 3px solid  #ff9204;
                border-radius: 2rem;
                backdrop-filter: blur(10px);
                display: flex;
                justify-content: center;
                align-items: center;
                
                }
                
                
                .inputbox{
                    position: relative;
                    margin: 30px 0;
                    width: 100%;
                    border-bottom: 3px solid #000000;
                
                }
                .inputbox label{
                    position: absolute;
                    top: 30%; left: 5px;
                    transform: translateY(-50%);
                    color: var(--black);
                    font-size: 1.2rem;
                    pointer-events: none;
                    transition: .5s;
                
                }
                    input:focus ~ label,
                    input:valid ~ label{
                        top: -5px;
                    }
                .inputbox input{
                    width: 100%;
                    height: 50px;
                    background: transparent;
                    border: none;
                    outline: none;
                    font-size: 1rem;
                    padding: 0 45px 0 5px;
                    color: #fff;

                } 
                .inputbox img{
                    position: absolute;
                    right: 8px;
                    top: 20px;
                    
                } 
                
                .forget{
                    margin: -15px 0 15px;
                    font-size: 1rem;
                    color: #000000;
                    display: flex;
                    justify-content: center;
                    height: 40px;
                
                }
                
                .forget label input{
                    margin-left: 3px;
                
                }
                .forget label a{
                    color: var(--yellow);
                    text-decoration: none;
                
                }
                .forget label a:hover{
                    text-decoration: var(--yellow);
                }
                
                .register{
                    font-size: 1.5rem;
                    color: #000000;
                    text-align: center;
                    margin: 15px 0 10px;
                    
                }
                .register a{
                    text-decoration: none;
                    color: var(--black);
                    font-size: 1.1rem;
                
                }
                .register a:hover{
                    text-decoration: underline;
                    color: var(--yellow);
                    
                    }
                   .log-box h2{
                        color: var(--orange);
                        align-content: center;
                        display: flex;
                        justify-content: center;
                        font-weight: 600;
                        padding-bottom: 3rem;

                    }
                    .btn{
                    display: inline-block;
                    font-size: 1rem;
                    color: #000000;
                    background: var(--yellow);
                    border-radius: .7rem;
                    cursor: pointer;
                    padding: .5rem 1rem;
                  
                    }
                    
                    .btn:hover{
                    color: var(--yellow);
                    background: var(--black);
                    letter-spacing: .1rem;
                    font-weight: bolder;

                    }
</style>
    <div class="class">

    <?php
echo htmlentities($_SESSION['errmsg']);
?>
<?php
echo htmlentities($_SESSION['errmsg']="");
?>
        <div class="log-container">
            <div class="log-box">
                <div class="form-value">
                <form class="register-form outer-top-xs" method="post">
                        <h2>Login</h2>
                        <div class="inputbox">
                            <img src="PNG icons/envelope(1).png" width="20" height="20"  alt="">
                            <input type="email" required  name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                            <label for=""> Email</label>
                        </div>
                        <div class="inputbox">
                            <img src="PNG icons/eye-crossed(1).png" width="20" height="20"  alt="">
                            <input type="password" required  name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
                            <label for=""> Password</label>
                        </div>
                        <div class="forget">
                            <label for=""><input type="checkbox">Remember Me  <a href="forgot-password.php" class="forgot-password pull-right" >Forget Password?</a></label>
                            
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button" name="login">Login</button>
                        <div class="register">
                             <a href="signup.php">Sign Up</a>

                        </div>
                    </form>
        
                </div>
            </div>
    
        </div>
    </div>
       

    <?php include('includes/footer.php');?>

    <script src="https://kit.fontawesome.com/293855f914.js" ></script>

</body>
</html>