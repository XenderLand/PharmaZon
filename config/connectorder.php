<?php


session_start();

include("connect.php");
include("../functions/myfunctions.php");


if(isset($_POST['order-btn']))
{
    $name = $_POST["name"];
    $number = $_POST['number'];
    $payment = $_POST["payment"];
    $region = $_POST["region"];
    $quantity = $_POST["quantity"];
    $date = $_POST["date"];
    $address = $_POST["address"];
    $message = $_POST["message"];


$order_query="INSERT INTO order_info (name , number, payment, region, quantity, date, address, message )
VALUES ('$name', '$number', '$payment', '$region', '$quantity', '$date', '$address', '$message')";

$order_query_run = mysqli_query($con, $order_query);

if($order_query_run)
{

        $_SESSION['message'] = 'Successfully';
        header('Location:../config/checkout.php');


}
else
{
   
        $_SESSION['message'] = 'Invalid Infomation';
        header('Location:../config/paymeny.php');
}


}

?>


   
