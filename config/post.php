<?php

session_start();
include("connect.php");
include("../functions/myfunctions.php");


if(isset($_POST['product-btn']))
        {
        $name = $_POST["name"];
        $price = $_POST['price'];
        $popular = isset($_POST['popular']) ? '1':'0';


        $image = $FILES['image']['name'];

        $path = "../uploads";
        $image_ext = pathinfo($image,PATHINFO_EXTENSION);
        $filename = time(). '.'.$image_ext;


        $cate_query="INSERT INTO products (name ,price, popular, image)
        VALUES ('$name', '$price', '$popular',
        '$image')";

        $cate_query_run = mysqli_query($con, $cate_query);

        if($cate_query_run)
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

            redirect("../RestaurantAdmin/account.php","Product Added Successfully");


        }
        else
        {
            redirect("../RestaurantAdmin/account.php","Something Went Wrong");
        }


        }
if(isset($POST['add_category_btn']))
{
    
}
if(isset($POST['add_category_btn']))
{
    
}
if(isset($POST['add_product_btn']))
{
     
}





?> 