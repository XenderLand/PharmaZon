<?php


session_start();

include("connect.php");
include("../functions/myfunctions.php");


if(isset($_POST['register-btn']))
{ 
    $name = $_POST["name"];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];



$cate_query="INSERT INTO signup (name ,email, number, password)
VALUES ('$name', '$email', '$number','$password')";

$cate_query_run = mysqli_query($con, $cate_query);

if($cate_query_run)
{

    $_SESSION['message'] = 'Registered Successfully';
    header('Location:../login.php');


}
else
{
$_SESSION['message'] = 'Invalid Infomation';
        header('Location:../signup.php');
}


}


else if(isset($_POST['login-btn']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];


$login_query = "SELECT * FROM signup WHERE email='$email' AND password='$password'";

$login_query_run = mysqli_query($con, $login_query);

if($login_query_run)
{

            $num=mysqli_num_rows($login_query_run);
    if($num>0){

            session_start();
                      
             $_SESSION['message'] = 'Welcome! Login Successfully';
             header('Location:../home.php');
         
              }

     else
        { 
            $_SESSION['message'] = 'Something Went Wrong! Try Again!';
            header('Location:../login.php');
        }


}

}

?>
