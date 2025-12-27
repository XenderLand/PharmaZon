<?php
session_start();
error_reporting(0);
include('includes/config.php');
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
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/all.min.css">
	    <link rel="stylesheet" href="css/swiper-bundle.min.css">
	    
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

		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home"></body>
	
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
                body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: var(--white);
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

                html{
                font-size: 100%;
                overflow-x: hidden;
                scroll-padding-top: 5.5rem;
                scroll-behavior: smooth;
                }


                section:nth-child(even){
                background: #eeeeee;
                }


                .sub-head{
                text-align: center;
                color: var(--yellow);
                font-size: 2rem;

                }

                .head{
                text-align: center;
                color: var(--black);
                font-size: 3rem;
                text-transform: uppercase;

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

                .buybtn{
                margin-top: 1rem;
                display: inline-block;
                font-size: 1rem;
                color: var(--orange);
                background: var(--black);
                border-radius: 1rem;
                cursor: pointer;
                padding: 1rem 2rem;
                margin: 1.5rem auto 0 auto;
                }
                
                .buybtn:hover{
                color: var(--yellow);
                background: var(--black);
                letter-spacing: .1rem;
                font-weight: bolder;

                }

                
                
                    
                .home .cover{
                    background-image: url(Medicine/image_1322693248.jpg);
                    height: 65vh;
                    width: 100%;
                    background-size: cover;
                    padding: 5rem 9%;
                    display: flex;
                    align-items: center;
                    gap: 1rem;
                    padding-top: 7rem;
                }

                .home .cover content{
                        flex: 1 1 35rem;
                    }

                    
                    .home .cover .image{
                        flex: 1 0 35rem;
                        padding-left: 3rem;

                    }

                    .home .cover .image img{
                        border-radius: 3rem;
                        
                    }

                    .home .cover .content span{
                        color: var(--black);
                        font-size: 2rem;
                        background: rgba(255, 255, 255, 0.568);
                        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

                    }
                    
                    .home .cover .content h3{
                        color: var(--black);
                        font-size: 2.2rem;
                        background:rgba(255, 255, 255, 0.568);

                    }
                    
                    .home .cover .content h2{
                        color: var(--black);
                        font-size: 1.5rem;
                        background:rgba(255, 255, 255, 0.568);

                    }

                    .home .cover .content h1{
                        color: var(--black);
                        font-size: 2.2rem;
                        background:rgba(255, 255, 255, 0.568);
                        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

                    }
                                            
                    .about .row{
                    display: flex;
                    flex-wrap: wrap;
                    gap: 1.5rem;
                    align-items: center;

                    }

                    .about .row .image{
                    flex: 1 1 30rem;

                    }

                    .about .row .image img{ 
                    border-radius: 3rem;

                    }

                    .about .row .content{
                    flex: 1 1 45rem;
                    
                    
                    }

                    .about .row .content h3{
                    color: var(--black);
                    font-size: 1.5rem;
                    padding: .5rem 0;
                    

                    
                    
                    
                    }

                    .about .row .content p{
                    color: var(--black);
                    font-size: 1.2rem;
                    padding: .5rem 0;
                    line-height: 2;
                    
                    
                    }
                    .about .row .content .icons-container,
                    .about .row .content .ion{
                    display: flex;
                    gap: 1rem;
                    flex-wrap: wrap;
                    padding: 1rem 0;
                    margin-top: .5rem;
                    }
                    .about .row .content .icons-container .icons{
                    background: var(--orange);
                    border-radius: 1rem;
                    border: .3rem solid rgba(0, 0, 0, 0.473);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 1rem;
                    flex: 1 1 17rem;
                    padding: 1rem;


                    }

                    .about .row .content .icons-container .icons1{
                    background: var(--black);
                    border-radius: 1rem;
                    border: .3rem solid rgb(253, 135, 0);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 1rem;
                    flex: 1 1 17rem;
                    padding: 1rem;


                    }
                    .about .row .content .icons-container .icons:hover{
                    letter-spacing: .1rem;
                    cursor: pointer;
                    }


                    .about .row .content .icons-container .icons span{
                    font-size: 1rem;
                    color: var(--black);
                    }

                    .about .row .content .icons-container .icons a{
                    font-size: 1.5rem;
                    color: var(--orange);
                    font-weight: 900;
                    }

                      .OnlineShop .medic-container {
                        margin-bottom: 1rem;
                        display: grid;
                        grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
                        gap: .5rem;
                        cursor: pointer;
                        padding: 3rem .5rem;
                        
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


                        .product .brand-container{
      padding-top: 1rem;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
      gap: 1.5rem;
      cursor: pointer;
    
    
    
    }
    .product .brand-container .box{
      padding: 1rem;
      background: #fff;
      border-radius:  1rem;
      border: .8rem solid #e4a451;
      box-shadow: var(--light-color);
      position: relative;
      overflow: hidden;
      text-align: center;
    
    }
    
    .product .brand-container .box img{
      border-radius: 10%;
      margin: 1rem 0;
      width: 40vh;
      height: 65%;
    
    }
    
    .product .brand-container .box h3{
      color: var(--black);
      font-size: 1.5rem;
    }
    
    
    .product .brand-container .box .stars{
      padding: .5rem 0;
    
    }
    .product .brand-container .box .stars i{
      font-size: 1.2rem;
      color: gold;
      outline-color: black;
      
    }
    
    .product .brand-container .box span{
      color: var(--yellow);
      font-size: 1.5rem;
      font-weight: bolder;
      margin-right: 1rem;
    
    }
    .product .brand-container.box span:hover{
      color: var(--black);
    }
  
    .slide .carousel-item {
      box-shadow: var(--box-shadow);
      border: 0.5rem solid rgba(0,0,0,.2);
      border-radius: .5rem;
      position: relative;
      padding: 2rem;


    }
    .slide .carousel-item p{
      font-size: 1rem;
    }
    .slide .carousel-item img{
      height: 7rem; width: 7rem;
      border-radius: 50%;
      object-fit: cover;    }



    .health .home-slider .slide{

      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      padding-bottom: 5rem;

    }
    
    .health .home-slider .slide .content{
      flex: 1 1 45rem;
    
    }
    .health .home-slider .slide .image{
      flex: 1 0 45rem;
    
    }
    
    .health .home-slider .slide .image img{
      width: 80%;
      border-radius: 5rem;
    }
    
    .health .home-slider .slide .content span{
      color: var(--white);
      font-size: 3rem;
      background: var(--black);


    }
    
    
    .health .home-slider .slide .content h3{
      color: var(--black);
      font-size: 4rem;
      background: var(--orange);

    }
    
    .health .home-slider .slide .content p{
      color: var(--black);
      font-size: 1.1rem;
      line-height: 1.5;
      background: #fff;

    
    }
    
    .swiper-pagination-bullet-active{
      background: var(--black);
    }



    

  @media(max-width:991px){
    html{
        font-size: 55%;

    }
  }header{
    padding: 1rem;
  }

  section{
    padding: 1rem;
  }
  
  @media(max-width:450px){
    html{
        font-size: 50%;

    }

}


</style>
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>

<!-- ============================================== HEADER : END ============================================== -->

<section class="home" id="home">
        <div class="cover">
  
            
                <div class="content">
                    <h1> Order Online</h1>
                    <h3>Welcome To Your One-Stop Pharmacy</h3>
                    <h2>the safest and quickest medicines delivery</h2>
                </div>
                <div class="image">
                    <img src="Medicine/pharm.jpg"  width="550" height="400" alt="">

                </div>
         </div>

    </section>

    <section class="about" id="about">
        <h3 class="sub-head">About</h3>
        <h1 class="head">Why Choose us?</h1>
    
        <div class="row">
            <div class="image">
                <img src="Medicine/pharm1.jpg" width="670" height="450" alt="">
    
            </div>
            <div class="content">
                <h3>We are a leading Pharmaceutical
                          Company in Ghana </h3>
                <p> DziDzi is a game-changer in this fast-paced world we live in today. 
                    With busy work schedules and limited time, people often turn to food delivery services 
                    to satisfy their hunger cravings without leaving the comfort of their home or office. 
                  </p>
                     <div class="icons-container">
                        <div class="icons">
                        <img src="PNG icons/trolley.png" width="30" height="30"  alt="">
                            <span>Free delivery</span>
                        </div>
                        <div class="icons">
                            <img src="PNG icons/dollar_10471176.png" width="30" height="30"  alt="">
                            <span>Easy Payment</span>
                        </div>
                        <div class="icons">
                            <img src="PNG icons/phone-call(1).png" width="30" height="30"  alt="">
                            <span>24/7 Service</span>
                        </div>
                        <div class="icons">
                            <img src="PNG icons/planet-earth_3594282.png" width="30" height="30"  alt="">
                            <span>Quality Products</span>
                        </div>
                        <div class="icons">
                            <img src="PNG icons/6014551_asian_coronavirus_doctor_male_icon.png" width="60" height="60"  alt="">
                            
                            <a href="Pharmacist/pharmacist.php" class="pag"><span>Consult A Pharmacist</span></a>
                            <img src="PNG icons/first-aid-kit.png" width="60" height="60"  alt="">


                        </div>
                       
                     </div>
                   
            </div>
        </div>


       
    </section>
   
    
    <section class="OnlineShop" id="OnlineShop">

        


        <h3 class="sub-head">Online Shop</h3>
        <h1 class="head">Products Available In Shop</h1>

            <div class="medic-container">
                <div class="shop">
                    <a href="ProductCat/firstAid.php" class="pag"><h4>First Aid</h4></a>
               
                </div>
                <div class="shop">
                    <a href="ProductCat/painkiller.php" class="pag"><h4>Pain Relief</h4></a>

                </div>
                <div class="shop">
                    <a href="ProductCat/SexualHealth.php"  class="pag"><h4>Sexual Health</h4></a>

                </div>
                <div class="shop">
                    <a href="ProductCat/Vitamins.php"  class="pag"><h4>Vitamins & Minerals</h4></a>

                </div>
                <div class="shop">
                    <a href="ProductCat/Cough.php"  class="pag"><h4>Cough, Cold & Flu</h4></a>

                </div>
                <div class="shop">
                    <a href="ProductCat/Eye.php" class="pag"><h4>Eye care</h4></a>

                </div>
                <div class="shop">
                    <a href="ProductCat/Baby.php"  class="pag"><h4>Baby & Child</h4></a>

                </div>
                <div class="shop">
                    <a href="ProductCat/Stomach.php"  class="pag"><h4>Stomach & owel</h4></a>

                </div>
                <div class="shop">
                    <a href="ProductCat/firstAid.php"  class="pag"><h4>Oral Care</h4></a>

                </div>
                <div class="shop">
                    <a href="ProductCat/firstAid.php"  class="pag"><h4>Allergy & Hayfever</h4></a>

                </div>
                <div class="shop">
                    <a href="ProductCat/Skin.php"  class="pag"><h4>Skin Care</h4></a>

                </div>
                <div class="shop">
                    <a href="ProductCat/Herbal.php"  class="pag"><h4>Herbal Medicines</h4></a>

                </div>
        </div>

            
            <div class="box-container">

                                
                        <?php
                    $ret=mysqli_query($con,"select * from products");
                    while ($row=mysqli_fetch_array($ret)) 
                    {
                        # code...


                    ?>
                    <div class="box">
   
            <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">

            <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="60" height="40" alt=""></a>

            <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>" style="color: var(--black); font-size:1.5rem;" class="name"><?php echo htmlentities($row['productName']);?></a>


            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="price">Gh$ <?php echo htmlentities($row['productPrice']);?></span>
        

            <a class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></a>


            
        </div>
        
        <?php } ?>
	
		
                
              
            </div>

    
    </section>

    <section class="product" id="product">

        <h3 class="sub-head">Brands</h3>
        <h1 class="head">Available Brands</h1>
    <div class="brand-container">

    <?php
$ret=mysqli_query($con,"select * from products");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
<div class="box">
   
            <a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">

            <img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="60" height="40" alt=""></a>

            <a href="./products/martinLiver.php?pid=<?php echo htmlentities($row['id']);?>" class="name"><?php echo htmlentities($row['productName']);?></a>


            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span class="price">Gh$ <?php echo htmlentities($row['productPrice']);?></span>
        


            <a class="btn add-cart " >Add to Cart</a>

            
        </div>
        
        <?php } ?>
	
		
    </div><!-- /.home-owl-carousel -->
</div><!-- /.product-slider -->
</div>
      
    </div>

</div>
    </section>

    


 
<section class="health" id="health">
    <h3 class="sub-head">Health Tips</h3>
    <h1 class="head">Random Tips From Our Professionals</h1>
    <div class="swiper mySwiper home-slider">
        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span> Health Tips</span>
                    <h3>Limit sugary drinks</h3>
                    <p>Sugary drinks like sodas, fruit juices, and sweetened teas are the 
                        primary source of added sugar in the American diet.
                        Unfortunately, findings from several studies point to 
                        sugar-sweetened beverages increasing risk of heart disease 
                        and type 2 diabetes, even in people who are not carrying excess 
                        body fat.
                        </p>
                </div>
                <div class="image">
                    <img src="Medicine/pharm1.jpg" width="520" height="470" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span> Health Tips</span>
                    <h3>Eat nuts and seeds</h3>
                    <p>Some people avoid nuts because they are high in fat. 
                        However, nuts and seeds are incredibly nutritious. 
                        They are packed with protein, fiber, and a variety 
                        of vitamins and minerals.
                        Nuts may help you lose weight and reduce the risk of 
                        developing type 2 diabetes and heart disease.
                        Additionally, one large observational study noted that 
                        a low intake of nuts and seeds was potentially linked 
                        to an increased risk of death from heart disease, stroke, 
                        or type 2 diabetes.
                        </p>
                </div>
                <div class="image">
                    <img src="Medicine/pharm2.jpg" width="520" height="470" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span> Health Tips</span>
                    <h3>Avoid ultra-processed foods</h3>
                    <p>Ultra-processed foods (UPFs) are foods containing ingredients 
                        that are significantly modified from their original form. 
                        They often contain additives like added sugar, highly refined oil, 
                        salt, preservatives, artificial sweeteners, colors, and flavors as well.
                        Examples include:
                        •	snack cakes 
                        •	fast food 
                        •	frozen meals
                        •	packaged cookies
                        •	chips
                        UPFs are highly palatable, meaning they are easily overeaten, and activate
                         reward-related regions in the brain, which can lead to excess calorie 
                         consumption and weight gain. Studies show that diets high in ultra-processed
                          food can contribute to obesity, type 2 diabetes, heart disease, and other 
                          chronic conditions.
                        </p>
                </div>
                <div class="image">
                    <img src="Medicine/pharm4.jpg"width="520" height="470" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span> Health Tips</span>
                    <h3>Don’t fear coffee</h3>
                    <p>Despite some controversy over it, coffee is loaded with health benefits.
                        It’s rich in antioxidants, and some studies have linked coffee intake to
                         longevity and a reduced risk of type 2 diabetes, Parkinson’s and Alzheimer’s
                          diseases, and numerous other illnesses.
                        The most beneficial intake amount appears to be 3–4 cups per day, although 
                        pregnant people should limit or avoid it completely because it has been 
                        linked to low birth weight (18).
                        However, it’s best to consume coffee and any caffeine-based items in 
                        moderation. Excessive caffeine intake may lead to health issues like 
                        insomnia and heart palpitations. To enjoy coffee in a safe and healthy way, 
                        keep your intake to less than 4 cups per day and avoid high-calorie, 
                        high-sugar additives like sweetened creamer.
                        </p>

                </div>
                <div class="image">
                    <img src="Medicine/ciprofloxacin-injection-1652680542-6340774.jpeg"width="520" height="470" alt="">
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="content">
                    <span> Health Tips</span>
                    <h3>Don’t fear coffee</h3>
                    <p>Despite some controversy over it, coffee is loaded with health benefits.
                        It’s rich in antioxidants, and some studies have linked coffee intake to
                         longevity and a reduced risk of type 2 diabetes, Parkinson’s and Alzheimer’s
                          diseases, and numerous other illnesses.
                        The most beneficial intake amount appears to be 3–4 cups per day, although 
                        pregnant people should limit or avoid it completely because it has been 
                        linked to low birth weight (18).
                        However, it’s best to consume coffee and any caffeine-based items in 
                        moderation. Excessive caffeine intake may lead to health issues like 
                        insomnia and heart palpitations. To enjoy coffee in a safe and healthy way, 
                        keep your intake to less than 4 cups per day and avoid high-calorie, 
                        high-sugar additives like sweetened creamer.
                        </p>

                </div>
                <div class="image">
                    <img src="Medicine/ciprofloxacin-injection-1652680542-6340774.jpeg" width="520" height="470" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

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