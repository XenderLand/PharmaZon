<?php

session_start();
include("connect.php");
include("../functions/myfunctions.php");


if(isset($_POST['add-menu-btn']))
{
$Food = $_POST["Food"];
$Price = $_POST['Price'];
$Photo = $_FILES['Photo']['name'];
$Location = $_POST['Location'];
$City = $_POST['City'];
$Region = $_POST['Region'];
$Delivery = $_POST['Delivery'];
$Payment = $_POST['Payment'];

$path = "../uploads";
$Photo_ext = pathinfo($Photo,PATHINFO_EXTENSION);
$filename = time(). '.'.$Photo_ext;


$cate_query="INSERT INTO food (Food ,Price, Photo, Location, 
city, region, Delivery, Payment)
VALUES ('$Food', '$Price', '$Photo',
 '$Location', '$City', '$Region', '$Delivery', '$Payment')";

$cate_query_run = mysqli_query($con, $cate_query);

if($cate_query_run)
{
    move_uploaded_file($_FILES["Photo"]['tmp_name'], $path.'/'.$filename);

    redirect("../RestaurantAdmin/admin.php","Profile Updayed Successfully");


}
else
{
    redirect("../RestaurantAdmin/admin.php","Something Went Wrong");
}


}






?> 