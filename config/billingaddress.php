<?php


session_start();

include("connect.php");
include("../functions/myfunctions.php");


if(isset($_POST['billing-btn']))
{
    $name = $_POST["name"];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $location = $_POST["location"];
    $address = $_POST["address"];
    $message = $_POST["message"];


$order_query="INSERT INTO billing_info (name , email, number, location, address, message )
VALUES ('$name', '$email', '$number', '$location','$address', '$message')";

$order_query_run = mysqli_query($con, $order_query);

if($order_query_run)
{

        $_SESSION['message'] = 'Successfully';
        header('Location:../config/payment.php');


}
else
{
   
        $_SESSION['message'] = 'Invalid Infomation';
        header('Location:../config/checkout.php');
}


}

?>


   
