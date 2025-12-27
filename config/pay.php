<?php


session_start();

include("connect.php");



if(isset($_POST['credit-btn']))
{ 
    $region = $_POST["region"];
    $cardno = $_POST['cardno'];
    $validtill = $_POST['validtill'];
    $cvv = $_POST['cvv'];



$cate_query="INSERT INTO creditcard (region ,cardno, validtill, cvv)
VALUES ('$region', '$cardno', '$validtill','$cvv')";

$cate_query_run = mysqli_query($con, $cate_query);

if($cate_query_run)
{
    echo "running";

    $_SESSION['message'] = 'Successfully';
    header('Location:../home.php');


}
else
{
$_SESSION['message'] = 'Invalid Infomation';
header('Location:../config/paymeny.php');
}


}


if(isset($_POST['mmpay-btn']))
{ 
    $network = $_POST["network"];
    $phoneno = $_POST['phoneno'];



$cate_query="INSERT INTO mobilemoney (network ,phoneno)
VALUES ('$network', '$phoneno')";

$cate_query_run = mysqli_query($con, $cate_query);

if($cate_query_run)
{

    $_SESSION['message'] = 'Successfully';
    header('Location:../home.php');


}
else
{
$_SESSION['message'] = 'Invalid Infomation';
        header('Location:../config/paymeny.php');
}


} 

?>
