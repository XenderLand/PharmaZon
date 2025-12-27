<?php

session_start();
include('../include/config.php');

if(isset($_POST['update-product-btn']))
{
	$productname=$_POST['productName'];
	$productprice=$_POST['productprice'];
	$productavailability=$_POST['productAvailability'];
	$productimage1=$_FILES["productimage1"]["name"];

$query=mysqli_query($con,"select max(id) as pid from products");
	$result=mysqli_fetch_array($query);
	 $productid=$result['pid']+1;
	$dir="productimages/$productid";
if(!is_dir($dir)){
		mkdir("productimages/".$productid);
	}

	move_uploaded_file($_FILES["productimage1"]["tmp_name"],"productimages/$productid/".$_FILES["productimage1"]["name"]);
$sql=mysqli_query($con,"insert into products(productName,productPrice,productAvailability,productImage1,) values('$productname','$productprice','$productavailability','$productimage1',)");




            redirect("../PharmAdmin/products.php","Product Added Successfully");


        }
        else
        {
            redirect("../PharmAdmin/admin.php","Something Went Wrong");
        }


    




?> 