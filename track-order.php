<?php 
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlySports</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">                    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.scss">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">




    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <style>
    
    </style>
</head>
<body>
<header>
<?php include('includes/main-header.php');?>
</header>

<style>
    

                    :root{
                    --green: #27ae60;
                    --orange: rgb(255, 139, 7);
                    --black:#000000;
                    --fade: #202020;
                    --red:rgb(255, 7, 7);
                    --white: #fff;
                    --light-color:#666;
                    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);

                    
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
                    background-color: var(--black);

                    }

                    html{
                    font-size: 62.5%;
                    overflow-x: hidden;
                    scroll-padding-top: 5.5rem;
                    scroll-behavior: smooth;
                    }

                    section{

                    padding: 2rem 9%;
                    }


                    section:nth-child(even){
                    background:var(--black);
                    }


                    .sub-heading{
                    text-align: center;
                    color: var(--orange);
                    font-size: 2rem;
                    padding: 2rem;

                    }

                    .heading{
                    text-align: center;
                    color: var(--white);
                    font-size: 3rem;
                    padding-bottom: 2rem;
                    text-transform: uppercase;

                    }

                    header{
                        position: fixed;
                        top: 0; left: 0; right: 0;
                        background: var(--black);
                        padding: 1rem 7% ;
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        z-index: 1000;
                        box-shadow: var(--box-shadow);
                    }
                    
                    header .logo{
                        color:var(--orange);
                        font-size: 3rem;
                        font-weight: bolder;

                    } 
                    header .logo i{
                        color:var(--white);
                        
                    }
                    header .navbar a.active,
                    header .navbar a:hover{
                        color:var(--black);
                        background: var(--orange);
                        border-radius: 1.7rem;
                    }
                    
                    
                            /* Style the navigation bar */
                            .navbar {
                                background-color: var(--black);
                                overflow: hidden;

                            }

                            /* Style the navigation links */
                            .navbar a {
                                float: left;
                                font-size: 16px;
                                color: white;
                                text-align: center;
                                padding: 14px 16px;
                                text-decoration: none;
                            }

                            /* Change color on hover */
                            .navbar a:hover {
                                background-color: #ddd;
                                color: black;
                            }

                            /* Create a dropdown container */
                        .navbar .dropdown {
                                float: left;
                                overflow: hidden;
                            }

                            /* Style the dropdown button */
                            .navbar .dropdown .dropbtn {
                                font-size: 16px;
                                border: none;
                                outline: none;
                                color: white;
                                padding: 14px 16px;
                                background-color: inherit;
                                font-family: inherit;
                                margin: 0;
                            }

                            /* Style the dropdown content (hidden by default) */
                            .navbar .dropdown-content {
                                display: none;
                                position: absolute;
                                background-color: var(--black);
                                min-width: 160px;
                                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                            }

                            /* Style the dropdown links */
                            .navbar .dropdown-content a {
                                float: none;
                                color: var(--white);
                                padding: 12px 16px;
                                text-decoration: none;
                                display: block;
                                text-align: left;
                            }

                            /* Change color on hover */
                            .navbar .dropdown-content a:hover {
                                background: var(--orange);
                                border-radius: 1.7rem;        }

                            /* Show the dropdown menu when hovering over the dropdown button */
                            .navbar .dropdown:hover .dropdown-content {
                                display: block;
                            }

                    header .icons i,
                    header .icons a{
                    cursor: pointer;
                    margin-left: 2rem;
                    height: 4rem;
                    line-height: 4.5rem;
                    width: 4rem;
                    text-align: center;
                    font-size: 1.7rem;
                    color: var(--black);
                    border-radius: 50%;
                    background: #eee;

                    }
                    header .icons i:hover,
                    header .icons a:hover{
                    color:#fff;
                    background: var(--orange);
                    transform:rotate(360deg);

                    }
                    header .icons i span{
                    color: var(--orange);
                    font-family: 'Times New Roman', Times, serif;
                    font-size: 2rem;
                    }



                    header .icons #menu-bars{
                    display: none;

                    }



                    .btn{
                    margin-top: 1rem;
                    display: inline-block;
                    font-size: 1.7rem;
                    color: var(--black);
                    background:  var(--orange);
                    border-radius: 1rem;
                    cursor: pointer;
                    padding: 2rem 3rem;


                    }
                    .btn:hover{

                    background: var(--black);
                    letter-spacing: .1rem;
                    border: .2rem solid var(--orange);
                    color: var(--orange);

                    }

                    .get-started-btn {
                    background: var(--orange);
                    color: var(--black);
                    border-radius: 50px;
                    padding: 1rem 1.5rem;
                    white-space: nowrap;
                    font-size: 1.2rem;
                    display: inline-block;

                    }
                    header .get-started-btn{
                    justify-content: none;
                    }

                    .get-started-btn:hover {
                    background: var(--black);
                    color: var(--orange);
                    border: .2rem solid var(--orange);


                    }


                    header form {
                    text-align: center;
                    display: flex;

                    }
                    header input{
                    width: 25rem;
                    height: 4rem;
                    color: var(--orange); 
                    font-size: 1.5rem;
                    padding-left: 2rem;
                    border-radius: 4rem;
                    border: .2rem solid var(--orange);
                    display: flex;
                    }
                    header label{
                    padding-left: 1rem;
                    font-size: 2rem;
                    color: var(--orange);
                    cursor: pointer;
                    display: flex;


                    } 
                    header form button{
                    font-size: 1.5rem;
                    padding: 1rem 1.5rem;
                    color: var(--black);
                    cursor: pointer;
                    border-radius: 4rem;
                    background: var(--orange);

                    }

                    header form button:hover {
                    background: var(--orange);
                    color: var(--black);
                    }

                    header form button[type="submit"]:hover {
                    background-color: var(--black);
                    color: var(--orange);
                    border: .2rem solid var(--orange);

                    }


                    @media (max-width: 768px) {
                    .get-started-btn {
                        margin: 0 48px 0 0;
                        padding: 6px 18px;
                    }
                    }
                    .teams img{
                    margin-top: 10rem;
                    border-radius: 1.5rem;
                    
                    }


                    .review .slide{

                    display: flex;
                    background: var(--black);
                    border: 0.2rem solid var(--orange);
                    padding: 2rem;
                    box-shadow: var(--orange);
                    border-radius: 1rem;
                    position: relative;


                    }
                    .review .slide .user{
                    overflow: hidden;
                    display: flex;
                    gap: 1.5rem;
                    align-items: center;
                    background: var(--black);
                    margin: 0;
                    }

                    .review .slide .user img{
                    height: 35rem;
                    width: 70vh;
                    border-radius: 1rem;

                    }
                    .review .slide .user span{
                    color: var(--white);
                    font-size: 2.5rem;
                    font-weight: 700;
                    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                    font-style: italic;

                    }
                    .review .slide .user-info a h3 {
                    color: var(--black);
                    font-size: 2rem;
                    background: var(--orange);
                    font-weight: 700;



                    }
                    .review .slide .user-info p{
                    font-size: 1.5rem;
                    line-height: 1.8rem;
                    color: var(--white);
                    background: var(--black);
                    margin-bottom: 2rem;
                    margin-top: 1rem;


                        
                    }
                    .review .slide .user-info a{
                    display: inline-block;
                    padding: 0.5rem 0.5rem;
                    font-weight: 500;
                    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                    line-height: 1;
                    margin-right: 15rem;
                    margin-top: 3rem;
                    text-align: center;
                    white-space: nowrap;
                    font-size: 1.3rem;
                    color: var(--black);
                    background: var(--orange);
                    vertical-align: baseline;
                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                    
                    }
                    

                    .profile{
                    position: relative;
                    display: block;
                    padding-top: 9rem;
                    background: var(--black);
                    height: 700px; width: 100%;


                    }
                    .page{
                    position: relative;
                    display: flex;
                    align-items: center;



                    }
                    .page img{
                    border-radius: 50%;
                    border: .5rem solid var(--orange);


                    }

                    .page h4{
                    font-size: 3rem;
                    font-weight: 700;
                    color: #fff;
                    align-content: center;
                    display: flex;



                    }
                    .page small{
                    font-size: 3rem;
                    font-weight: 600;
                    color: var(--orange);
                    display: flex;
                    align-content: center;

                    }

                    .page h5{
                    font-size: 2rem;
                    font-weight: 500;
                    color: var(--orange);
                    display: flex;
                    align-content: center;

                    }
                    .details{
                    display: flex;
                    gap: 15rem;
                    font-size: 1rem;
                    background: var(--orange);
                    padding: 1.5rem;
                    font-weight: 300;
                    }

                    .details h3{
                    color: var(--black);
                    font-size: 1.5rem;
                    }
                    .details span{
                    color: #fff;
                    background: var(--black);
                    padding: 1rem;
                    border-radius: 2rem;
                    font-size: 1.5rem;
                    }

                    .container{
                    width: 100%;
                    height: 100vh;
                    display: flex;
                    align-items: center;
                    flex-direction: column;
                    font-size: 1.5rem;
                    color: var(--orange);

                    }

                    iframe{
                    width: 100%;
                    height: 350px;
                    padding-top: -15rem;
                    }


                    .photos{
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(390px,1fr));
                    gap: 20px;
                    }

                    .photos img{
                    max-width: 100%;
                    display: block;
                    height: 100%;
                    object-fit: cover;
                    
                    }
                    
                    .latest .box-container{
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(48rem, 1fr));
                    gap: 1.5rem;
                    
                    
                    }
                    .latest .box-container .box{
                    
                    padding: 1rem;
                    background: var(--black);
                    border-radius:  1rem;
                    border: .2rem solid var(--orange);
                    box-shadow: var(--orange);
                    position: relative;
                    overflow: hidden;
                    text-align: center;
                    
                    }
                    
                    .latest .box-container .box img{
                    border-radius: 7%;
                    margin: 1rem 0;
                    width: 100%;
                    height: 0vh;
                    translate:   var(--cubic-in);
                    ;
                    
                    }
                    
                    .latest .box-container .box a{
                    color: var(--white);
                    font-size: 1.5rem;
                    cursor: pointer;
                    }
                    
                    
                    
                    .latest .box-container .box span{
                    color: var(--orange);
                    font-size: 2rem;
                    font-weight: bolder;
                    margin-right: 1rem;
                    
                    
                    }





                    
                    .click a{
                    display: inline-block;
                    padding: 0.5rem 0.5rem;
                    font-weight: 700;
                    line-height: 1.5rem;
                    text-align: center;
                    white-space: nowrap;
                    margin-right: 22rem;

                    margin-top: 2rem;
                    
                    background: var(--orange);
                    vertical-align: baseline;
                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

                    }
                    

                    .trending .row{
                    display: flex;
                    flex-wrap: wrap;
                    gap: 1rem;
                    align-items: center;
                    margin-top: 2rem;

                    }

                    .trending .row .image{
                    flex: 1 1 80rem;

                    }


                    .trending .row .card{
                    flex: 1 1 10rem;

                    }

                    .trending .row .card{
                    background: #fff;
                    border-radius: 10px;
                    }
                    .trending .row .card-header{
                    padding: 5rem;
                    }
                    .trending .row .card-header{
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    border-bottom: 1px solid var(--light-color);

                    }
                    .card-header button{
                    background: var(--orange);
                    border-radius: 10px;
                    color: #fff;
                    font-size: .8rem;
                    padding: .8rem 1rem;
                    border: 1.3px solid var(--orange);
                    }

                    .card table{
                    border-collapse: collapse;
                    }
                    .card table h2{
                    position: absolute;
                    color: var(--white);
                    font-size: 2rem;
                    }
                    .card thead tr{
                    border-top: 3px solid var(--white);
                    border-bottom: 3px solid  var(--white);
                    }
                    .card thead td{
                    font-weight: 900;
                    color: var(--orange);

                    }
                    .card tbody tr{
                    color: var(--white);

                    }
                    .card td{
                    padding: 1rem 1rem;
                    font-size: 1.5rem;
                    color: var(--white);
                    }
                    .card td .status{
                    display: inline-block;
                    height: 15px;
                    width: 15px;
                    border-radius: 50%;
                    margin-right: 1rem;

                    }
                    tr td:last-child{
                    display: flex;
                    align-items: center;
                    }

                    .table-responsive{
                    width: 100%;
                    overflow-x: auto;

                    }

                    .trending .image .box-container{
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(48rem, 1fr));
                    gap: 1.5rem;
                    } 
                    .trending .image .box-container .box{
                    background: #fff;
                    border: .3rem solid rgb(255, 255, 255) ;
                    border-radius: .5rem;
                    box-shadow: var(--box-shadow);
                    }
                    .trending .image .box-container .box .image{
                    height: 25rem;
                    width: 100%;
                    padding: 1.5rem;
                    overflow: hidden;
                    position: relative;


                    }
                    .trending .image .box-container .box .image img{
                    height: 100%;
                    width: 100%;
                    border-radius: 1rem;
                    object-fit: cover;
                    transition: all .5s;
                    }
                    .trending .image .box-container .box .image img:hover{
                    transform: scale(1.2);
                    cursor: pointer;
                    }

                    .trending .image .box-container .box .content{
                    padding: 2rem;
                    padding-top: 0;
                    }
                    
                    .trending .image .box-container .box .content a {
                    color: var(--white) ;
                    font-size: 2rem;
                    cursor: pointer;
                    }
                    .trending .image .box-container .box .content p{
                    color: var(--orange) ;
                    font-size: 1.6rem;
                    padding: .5rem 0;
                    line-height: 1.5;
                    
                    }
                    
                    .trending .image .box-container .box .content p:hover{
                    text-decoration: underline;
                    }





                    .card-header button{
                    background: var(--black);
                    border-radius: 10px;
                    color: #fff;
                    font-size: .8rem;
                    padding: .8rem 1rem;
                    border: 1.3px solid var(--orange);
                    }

                    table{
                    border-collapse: collapse;
                    }
                    thead tr{
                    border-top: 3px solid #f0f0f0;
                    border-bottom: 3px solid #f0f0f0;
                    }
                    thead td{
                    font-weight: 900;
                    color: var(--orange);

                    }
                    td{
                    padding: 1rem 1rem;
                    font-size: 2rem;
                    color: #222;
                    }
                    td .status{
                    display: inline-block;
                    height: 15px;
                    width: 15px;
                    border-radius: 50%;
                    margin-right: 1rem;

                    }
                    tr td:last-child{
                    display: flex;
                    align-items: center;
                    }

                    .status.pink{
                    background: deeppink;
                    }

                    .status.purple{
                    background: rebeccapurple;
                    }

                    .status.orange{
                    background: orangered;
                    }

                    .table-responsive{
                    width: 100%;
                    overflow-x: auto;

                    }

                    .customer{
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: .5rem .7rem;
                    }
                    .info{
                    display: flex;
                    align-items: center;
                    }
                    .info img{
                    border-radius: 50%;
                    margin-right: 1rem;

                    }



                    .about .row{
                    display: grid;
                     grid-template-columns: repeat(2, 1fr);
                    gap: 50px;
                    padding: 20px;
                    margin-top: 5rem;

                    }

                    .about .row .image{
                    flex: 1 1 80rem;
                    }
                    .about .row .card{
                    box-sizing: border-box;
                    width: 630px;
                    height: 554px;                    
                    }
  

                    .about .image .box-container{
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(48rem, 1fr));
                    gap: 1.5rem;
                    } 
                    .about .image .box-container .box{
                    background:var(--orange);
                    border: .3rem solid rgb(255, 255, 255) ;
                    border-radius: .5rem;
                    }
                    .about .image .box-container .box .image{
                    height: 25rem;
                    width: 100%;
                    padding: 1.5rem;
                    overflow: hidden;
                    position: relative;


                    }
                    .about .image .box-container .box .image img{
                    height: 100%;
                    width: 100%;
                    border-radius: 1rem;
                    object-fit: cover;
                    transition: all .5s;


                    }
                    .about .image .box-container .box .image img:hover{
                    transform: scale(1.2);
                        cursor: pointer;
                    }

                    .about .image .box-container .box .content{
                    padding: 2rem;
                    padding-top: 0;
                    }

                    .about .image .box-container .box .content a {
                    color: var(--orange) ;
                    font-size: 1rem;
                    cursor: pointer;
                    }
                    .about .image .box-container .box .content p{
                    color: var(--orange) ;
                    font-size: 1.3rem;
                    padding: .5rem 0;
                    line-height: 1.5;
                    }
                    .about .image .box-container .box .content p:hover{
                    text-decoration: underline;
                    }

                    .about .card .slide{
                    box-shadow: var(--box-shadow);
                    border-radius: .5rem;
                    position: relative;
                    }
                    .about .card .slide .user{
                    display: flex;
                    gap: 1rem;
                    align-items: center;
                    padding-bottom: 1rem;
                    overflow: hidden;

                    }
                    .about .card .slide .user  img{
                    height: 13rem; 
                    width: 20rem;
                    object-fit: cover;
                    transition: all .5s;
                    border-radius: 1rem;

                    }
                    .about .card .slide .user  img:hover{
                    transform: scale(1.1);
                    cursor: pointer;
                    }
                    .about .card .slide .user p{
                    color: var(--white);
                    font-size: 1.5rem;
                    padding-bottom: .5rem;


                    }
                    .about .card .slide .user p:hover{
                    color: var(--orange);
                    text-decoration: underline;

                    }









                    
                    .order form{
                    max-width: 90rem;
                    border-radius: .5rem;
                    box-shadow: var(--box-shadow);
                    border: 1rem solid rgba(0,0,0,.2);
                    background: #fff;
                    padding: 1.5rem;
                    margin: 0 auto;

                    } 
                    .order form .inputBox{
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                    }

                    .order form .inputBox .input{
                    width: 49%;
                    }
                    .order form .inputBox .input span{
                    display: block;
                    padding: .5rem 0;
                    font-size: 1.5rem;
                    color: var(--light-color);
                    }

                    .order form .inputBox .input input, 
                    .order form .inputBox .input textarea{
                    background: #eee;
                    border-radius: .5rem;
                    padding: 1rem;
                    font-size: 1.6rem;
                    color: var(--black);
                    text-transform: none;
                    margin-bottom: 1rem;
                    width: 100%;
                    
                    }

                    .order form .inputBox .input input:focus, 
                    .order form .inputBox .input textarea:focus{
                    border: 1rem solid --orange;


                    }

                    .order form .inputBox .input textarea{
                    height: 30rem;
                    resize: none;
                    }

                    .order form .btn{
                    margin-top: 0;  
                    }


                    .footer .box-container{
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
                    gap: 1.5rem;

                    }

                    .footer .box-container .box h3{
                    padding: .5rem;
                    font-size: 2.5rem;
                    color: var(--white);

                    }


                    .footer .box-container .box a{
                    display: block;
                    padding: .5rem 0;
                    font-size: 1.5rem;
                    color: var(--orange);

                    }
                    .footer .box-container .box a:hover{
                    color: var(--orange);
                    text-decoration: underline;

                    }

                    .footer .credit{
                    text-align: center;
                    border-top: 1rem solid var(--orange);
                    font-size: 2rem;
                    color: var(--white);
                    padding: 5rem;
                    padding-top: 1.5rem;
                    margin-top: 1.5rem;


                    }
                    .footer .credit span{
                    color: var(--orange);
                    }

                    /* Create a container to hold the layout */
                    .test .container {
                        display: grid;
                        grid-template-columns: 1fr 3fr 1fr; /* Adjust column widths as needed */
                        grid-gap: 20px; /* Add gap between columns */
                
                }

                /* Style the left sidebar */
                .test .container .sidebar-left {
                    background-color: yellow; /* Sidebar background color */
                    color: #eee; /* Text color */
                    padding: 2px; /* Add padding for content */
                }
                
                .test .container .sidebar-left .card .slide{
                    box-shadow: var(--box-shadow);
                    border-radius: .5rem;
                    position: relative;
                    }
                    .test .container .sidebar-left .card .slide .user{
                    display: flex;
                    gap: 1rem;
                    align-items: center;
                    padding-bottom: 1rem;
                    overflow: hidden;

                    }
                    .test .container .sidebar-left .card .slide .user  img{
                    height: 8rem; 
                    width: 10rem;
                    object-fit: cover;
                    transition: all .5s;
                    border-radius: 1rem;

                    }
                    .test .container .sidebar-left .card .slide .user  img:hover{
                    transform: scale(1.1);
                    cursor: pointer;
                    }
                    .test .container .sidebar-left .card .slide .user p{
                    color: var(--white);
                    font-size: 1.2rem;
                    padding-bottom: .5rem;


                    }
                    .test .container .sidebar-left .card .slide .user p:hover{
                    color: var(--orange);
                    text-decoration: underline;

                    }


                /* Style the main content area */
                .test .container .content {
                    background-color: var(--black); /* Content background color */
                    color: #333; /* Text color */
                    padding: 5px; /* Add padding for content */
                }
               

                    .test .container .content.row .image{
                    flex: 1 1 80rem;
                    }
                     

                    .test .container .content .image .box-container{
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(40rem, 2fr));
                    gap: 1.5rem;
                    } 
                    .test .container .content .image .box-container .box{
                    background:var(--orange);
                    border: .3rem solid rgb(255, 255, 255) ;
                    border-radius: .5rem;
                    }
                    .test .container .content .image .box-container .box .image{
                    height: 25rem;
                    width: 100%;
                    padding: 1.5rem;
                    overflow: hidden;
                    position: relative;


                    }
                    .test .container .content .image .box-container .box .image img{
                    height: 100%;
                    width: 100%;
                    border-radius: 1rem;
                    object-fit: cover;
                    transition: all .5s;


                    }
                    .test .container .content .image .box-container .box .image img:hover{
                    transform: scale(1.2);
                        cursor: pointer;
                    }

                    .test .container .content .image .box-container .box .content{
                    padding: 2rem;
                    padding-top: 0;
                    }

                    .test .container .content .image .box-container .box .content a {
                    color: var(--orange) ;
                    font-size: 1rem;
                    cursor: pointer;
                    }
                    .test .container .content .image .box-container .box .content p{
                    color: var(--orange) ;
                    font-size: 1.3rem;
                    padding: .5rem 0;
                    line-height: 1.5;
                    }
                    .test .container .content .image .box-container .box .content p:hover{
                    text-decoration: underline;
                    }

                /* Style the right sidebar */
                .test .container .sidebar-right {
                    background-color: yellow; /* Sidebar background color */
                    color: #eee; /* Text color */
                    padding: 2px; /* Add padding for content */
                }
                .test .container .sidebar-right .card .slide{
                    box-shadow: var(--box-shadow);
                    border-radius: .5rem;
                    position: relative;
                    }
                    .test .container .sidebar-right .card .slide .user{
                    display: flex;
                    gap: 1rem;
                    align-items: center;
                    padding-bottom: 1rem;
                    overflow: hidden;

                    }
                    .test .container .sidebar-right .card .slide .user  img{
                    height: 8rem; 
                    width: 10rem;
                    object-fit: cover;
                    transition: all .5s;
                    border-radius: 1rem;

                    }
                    .test .container .sidebar-right .card .slide .user  img:hover{
                    transform: scale(1.1);
                    cursor: pointer;
                    }
                    .test .container .sidebar-right .card .slide .user p{
                    color: var(--white);
                    font-size: 1.2rem;
                    padding-bottom: .5rem;


                    }
                    .test .container .sidebar-right .card .slide .user p:hover{
                    color: var(--orange);
                    text-decoration: underline;

                    }


                    
                    .epl .row{
                    display: flex;
                    flex-wrap: wrap;
                    gap: 1rem;
                    align-items: center;
                    margin-top: 2rem;

                    }

                    .epl .row .image{
                    flex: 1 1 80rem;

                    }


                    .epl .row .card{
                    flex: 1 1 10rem;

                    }

                    .epl .row .card{
                    background: #fff;
                    border-radius: 10px;
                    }
                    .epl .row .card-header{
                    padding: 5rem;
                    }
                    .epl .row .card-header{
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    border-bottom: 1px solid var(--light-color);

                    }
                    .card-header button{
                    background: var(--orange);
                    border-radius: 10px;
                    color: #fff;
                    font-size: .8rem;
                    padding: .8rem 1rem;
                    border: 1.3px solid var(--orange);
                    }

                    .card table{
                    border-collapse: collapse;
                    }
                    .card table h2{
                    position: absolute;
                    color: var(--white);
                    font-size: 2rem;
                    }
                    .card thead tr{
                    border-top: 3px solid var(--white);
                    border-bottom: 3px solid  var(--white);
                    }
                    .card thead td{
                    font-weight: 900;
                    color: var(--orange);

                    }
                    .card tbody tr{
                    color: var(--white);

                    }
                    .card td{
                    padding: 1rem 1rem;
                    font-size: 1.5rem;
                    color: var(--white);
                    }
                    .card td .status{
                    display: inline-block;
                    height: 15px;
                    width: 15px;
                    border-radius: 50%;
                    margin-right: 1rem;

                    }
                    tr td:last-child{
                    display: flex;
                    align-items: center;
                    }

                    .table-responsive{
                    width: 100%;
                    overflow-x: auto;

                    }

                    .trending .image .box-container{
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(48rem, 1fr));
                    gap: 1.5rem;
                    } 
                    .trending .image .box-container .box{
                    background: #fff;
                    border: .3rem solid rgb(255, 255, 255) ;
                    border-radius: .5rem;
                    box-shadow: var(--box-shadow);
                    }
                    .trending .image .box-container .box .image{
                    height: 25rem;
                    width: 100%;
                    padding: 1.5rem;
                    overflow: hidden;
                    position: relative;


                    }
                    .trending .image .box-container .box .image img{
                    height: 100%;
                    width: 100%;
                    border-radius: 1rem;
                    object-fit: cover;
                    transition: all .5s;
                    }
                    .trending .image .box-container .box .image img:hover{
                    transform: scale(1.2);
                    cursor: pointer;
                    }

                    .trending .image .box-container .box .content{
                    padding: 2rem;
                    padding-top: 0;
                    }
                    
                    .trending .image .box-container .box .content a {
                    color: var(--white) ;
                    font-size: 2rem;
                    cursor: pointer;
                    }
                    .trending .image .box-container .box .content p{
                    color: var(--orange) ;
                    font-size: 1.6rem;
                    padding: .5rem 0;
                    line-height: 1.5;
                    
                    }
                    
                    .trending .image .box-container .box .content p:hover{
                    text-decoration: underline;
                    }




















                    @media(max-width:991px){
                    html{
                        font-size: 55%;

                    }
                    }header{
                    padding: 1rem 2rem;
                    }

                    section{
                    padding: 2rem;
                    }

                    @media(max-width:768px){
                    header .icons #menu-bars{
                        display: inline-block;
                    }

                    header .navbar{
                        position: absolute;
                        top:100%; left:0%; right:0%;
                        background: #fff;
                        border-top: .1rem solid rgba(0,0,0,.2);
                        border-bottom: .1rem solid rgba(0,0,0,.2);
                        padding: 1rem;
                        clip-path: polygon(0 0, 100% 0, 0 0);
                    }

                    header .navbar.active{
                        clip-path: polygon(0 0, 100% 0,100% 100%, 0 100%);
                    }

                    header .navbar a{ 
                        display: block;
                        padding: 1.5rem;
                        margin: 1rem;
                        font-size: 2rem;
                        background: #eee;

                    }
                    
                    #shoppi-form #cart-box{
                        width: 90%;
                        margin: 0 1rem;
                    
                    }
                    
                    
                    .home .home-slider .slide .content h3{
                    font-size: 5rem;
                    }

                    }

                    @media(max-width:450px){
                    html{
                        font-size: 50%;

                    }
                    
                    .latest .box-container .box img{
                    height: auto;
                    width: 100%;

                    }
                    .order form .inputBox .input{
                    width: 100%;
                    }
                    }
</style>

   <div class="teams">
    <a href="login.html"><img src="photos/kisspng-tottenham-hotspur-f-c-premier-league-dream-league-5af214e203c340.9920525215258144980154.png" style="background: #eee;" width="60" height="60"></a>
    
    <a href="login.html"><img src="photos/kisspng-goodison-park-everton-f-c-premier-league-liverpoo-england-football-5b15f78a4434d2.3458265915281662822794.png" width="60" height="60"></a>
    <a href="login.html"><img src="photos/liverpool.png" width="60" height="60"></a>
    <a href="login.html"><img src="photos/kisspng-fulham-f-c-craven-cottage-reading-f-c-201718-escudos-de-futbol-5b2e020474b647.2826121515297418284781.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/kisspng-leicester-city-f-c-king-power-stadium-premier-lea-premier-league-5aca547edd7cd7.1989168715232093429072.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/kisspng-falmer-stadium-brighton-hove-albion-f-c-premier-5b09db19e99253.3016851715273725699567.png" width="60" height="60">     
    <a href="login.html"><img src="photos/kisspng-serie-a-premier-league-2018-uefa-champions-league-eufa-chamions-league-final-5b48bc419ad2e8.3275821015314934416342.png" style="background: #eee;" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/kisspng-a-f-c-bournemouth-dean-court-brentford-f-c-footb-5bea42f6946aa1.0487456315420792226079.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/kisspng-newcastle-united-f-c-newcastle-upon-tyne-premier-england-soccer-5b27e4948449c7.4917459215293410765419.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" style="background: #eee;" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/kisspng-chelsea-f-c-premier-league-world-cup-chelsea-fc-chelsea-fc-logo-5b35ad52b8d688.9227549215302444347571.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/5a21a8f93f0424.6510683715121553852581.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/man utd.png" width="60" height="60">     </a>
    <a href="login.html"><img src="photos/kisspng-burnley-f-c-premier-league-turf-moor-efl-champion-james-tarkowski-5b1cdd6966a773.8026800015286183454205.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/kisspng-west-ham-united-f-c-premier-league-thames-ironwor-5aec879d5b5848.9743672815254506533742.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/kisspng-brentford-f-c-football-bristol-city-f-c-clip-art-5c4948498272a6.6723522515483065055343.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/city.png" width="60" height="60">     </a>
    <a href="login.html"><img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" style="background: #eee;" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/kisspng-aston-villa-f-c-english-football-league-efl-champ-5b06e6d31acac2.3136082615271789631098.png" width="60" height="60"></a>
    <a href="login.html"><img src="photos/kisspng-newcastle-united-f-c-newcastle-upon-tyne-premier-england-soccer-5b27e4948449c7.4917459215293410765419.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/kisspng-falmer-stadium-brighton-hove-albion-f-c-premier-5b09db19e99253.3016851715273725699567.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/kisspng-west-ham-united-f-c-premier-league-thames-ironwor-5aec879d5b5848.9743672815254506533742.png" width="60" height="60"></a>     
    <a href="login.html"><img src="photos/liverpool.png" width="60" height="60"></a>
    <a href="login.html"><img src="photos/kisspng-goodison-park-everton-f-c-premier-league-liverpoo-england-football-5b15f78a4434d2.3458265915281662822794.png" width="60" height="60"></a>
    <a href="login.html"><img src="photos/kisspng-a-f-c-bournemouth-dean-court-brentford-f-c-footb-5bea42f6946aa1.0487456315420792226079.png" width="60" height="60"></a>     


</div>

   
     
<section class="review" id="review">

    <div class="swiper mySwiper review-slider">
 
   
        <div class="swiper-wrapper wrapper">
                 <?php
                    $ret=mysqli_query($con,"select * from swiper ORDER BY id DESC");
                    while ($row=mysqli_fetch_array($ret)) 
                    {

                ?>
                <div class="swiper-slide slide">

                    <div class="user" href="login.php">
                        <a href="descriptionPage.php?pid=<?php echo htmlentities($row['id']);?>">

                            <img  src="admin/swiperimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['image1']);?>" data-echo="admin/swiperimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['image1']);?>"  alt=""></a>


                        <div class="user-info">
                            <a class="swiper-title" href="login.html"><h3 ><?php echo htmlentities($row['title']);?></h3> </a>
                            <p><?php echo htmlentities($row['subTitle']);?></p>
                                
                                    <a href="home.php" ><?php echo htmlentities($row['league']);?></a></a>
                        </div>
                    </div>
                
                </div>
            <?php } ?>

           
        </div>
        
    </div>
   
   
</section>
<section class="latest" id="latest">  
    <h3 class="sub-heading">Football</h3>
    <h1 class="heading">Latest</h1>  
    <div class="test">
            <div class="container">
                <aside class="sidebar-left">
                <div class="card">
                    <h3 class="sub-heading">Table</h3>
                    <h1 class="heading">Topic of the week </h1>
                    <div class="card-body">
                    <div class=" slide">
    
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>   
                </aside>
        <main class="content">
                <div class="row">
                <div class="image">

            <div class="box-container">
                <?php
                        $ret=mysqli_query($con,"select * from latest ORDER BY id DESC");
                        while ($row=mysqli_fetch_array($ret)) 
                        {

                    ?>

                <div class="box">
                    <div class="image" >
                        <img  src="admin/latestimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['image1']);?>" data-echo="admin/latestimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['image1']);?>"  alt="" >
                        
                    </div>
                    <div class="content" href="login.html">
                           
                                                   
                          <a href="login.html" style="color: #eee; font-size: 2rem;"><?php echo htmlentities($row['title']);?>
                           <p> <?php echo htmlentities($row['subTitle']);?></p></a>
                           <div class="click">
                                <a href="home.php" style="color: black; font-size: 1rem;" ><?php echo htmlentities($row['league']);?></a>
                            </div>
                    </div>
                </div>
                    <?php } ?>

                </div>
            </div>
      
            </div>   
        </main>
        <aside class="sidebar-right">
            <div class="card">
                <h3 class="sub-heading">Table</h3>
                <h1 class="heading">Topic of the week </h1>
                <div class="card-body">
                    <div class=" slide">
    
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>   
             </aside>
            </div>
            </div> 
</section>


<section class="epl" id="epl">
    <h3 class="sub-heading">Football</h3>
    <h1 class="heading">Premier League</h1>

    <div class="row">
     <div class="image">

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <a href="login.html"><img src="photos/shaki.jpg" width="600" height="430" alt="" ></a>
                        
                    </div>
                    <div class="content">
                            <div class="click">
                                 <a href="login.html" style="color: black; font-size: 1rem;" >La Liga</a>
                           </div>
                       <a href="login.html" >people often turn to food delivery services 
                        to satisfy
                        <p>With busy work schedules and limited time, people often turn to food delivery services 
                            to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
        
        
        
                    </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <a href="login.html"><img src="photos/arnold.jpg" width="600" height="430" alt="" ></a>
                            
                        </div>
                        <div class="content">
                            
                            <div class="click">
                                <a href="home.php" style="color: black; font-size: 1rem;" >Premier League</a>
                               </div>
                               <a href="login.php" >people often turn to food delivery services 
                                to satisfy
                                <p>With busy work schedules and limited time, people often turn to food delivery services 
                                    to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
        
        
                        </div>
                    </div>
                        <div class="box">
                            <div class="image">
                                <a href="login.html"><img src="photos/chelsea.jpg" width="500" height="380" alt="" ></a>
                                
                            </div>
                            <div class="content">
                                <div class="click">
                                    <a href="home.php" style="color: black; font-size: 1rem;" >Transfer News</a>
                                   </div>
                                   <a href="login.php" >people often turn to food delivery services 
                                    to satisfy
                                    <p>With busy work schedules and limited time, people often turn to food delivery services 
                                        to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
        
        
                        </div>
                    </div>
                            <div class="box">
                                <div class="image">
                                    <a href="login.html"><img src="photos/classico.jpg" width="500" height="380" alt="" ></a>
                                    
                                </div>
                                <div class="content">
                                    <div class="click">
                                        <a href="home.php" style="color: black; font-size: 1rem;" >La Liga</a>
                                       </div>
                                       <a href="login.php" >people often turn to food delivery services 
                                        to satisfy
                                        <p>With busy work schedules and limited time, people often turn to food delivery services 
                                            to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
                    
                                    </div>
                                </div>
                                 <div class="box">
                                    <div class="image">
                                        <a href="login.html"><img src="photos/conte.jpg" width="600" height="430" alt="" ></a>
                                        
                                    </div>
                                    <div class="content">
                                        <div class="click">
                                            <a href="home.php" style="color: black; font-size: 1rem;" >Premier League</a>
                                           </div>
                                           <a href="login.php" >people often turn to food delivery services 
                                            to satisfy
                                            <p>With busy work schedules and limited time, people often turn to food delivery services 
                                                to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
                        
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="image">
                                            <a href="login.html"><img src="photos/ETH.jpg" width="600" height="430" alt="" ></a>
                                            
                                        </div>
                                        <div class="content">
                                            <div class="click">
                                                <a href="home.php" style="color: black; font-size: 1rem;" >Premier League</a>
                                               </div>
                                               <a href="login.php" >people often turn to food delivery services 
                                                to satisfy
                                                <p>With busy work schedules and limited time, people often turn to food delivery services 
                                                    to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
                            
                                            </div>
                                        </div>
                          </div>
        </div>
  <div class="card">
            <h3 class="sub-heading">Table</h3>
             <h1 class="heading">Premier League</h1>
            <div class="card-body">
               <div class="table-responsive">
                <table width="100%" >
                   
                    <thead>
                    <tr>                      
                        
                        <td>Pos</td>
                        <td>Team</td>
                        <td>P</td>
                        <td> PTS</td>                      


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td> <div class="info">
                            <img src="photos/city.png" 
                              width="30px" height="30px" alt="">
                            <div>Man City</td>
                        <td>4</td>
                        <td>12</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-tottenham-hotspur-f-c-premier-league-dream-league-5af214e203c340.9920525215258144980154.png" 
                            width="30px" height="30px" alt="">
                            <div>Tottenham</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> <div class="info">
                            <img src="photos/liverpool.png" 
                            width="30px" height="30px" alt="">
                            <div>Liverpool</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-west-ham-united-f-c-premier-league-thames-ironwor-5aec879d5b5848.9743672815254506533742.png" 
                            width="30px" height="30px" alt="">
                            <div>West Ham</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>5</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Arsenal</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>6</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-falmer-stadium-brighton-hove-albion-f-c-premier-5b09db19e99253.3016851715273725699567.png" 
                            width="30px" height="30px" alt="">
                            <div>Brighton</td>
                        <td>4</td>
                        <td>9</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>7</td>
                        <td> <div class="info">
                            <img src="photos/5a21a8f93f0424.6510683715121553852581.png" 
                            width="30px" height="30px" alt="">
                            <div>Crystal Palace</td>
                        <td>4</td>
                        <td>7</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>8</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-brentford-f-c-football-bristol-city-f-c-clip-art-5c4948498272a6.6723522515483065055343.png" 
                            width="30px" height="30px" alt="">
                            <div>Brentford</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>9</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Nottm Forest</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>10</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-aston-villa-f-c-english-football-league-efl-champ-5b06e6d31acac2.3136082615271789631098.png" 
                            width="30px" height="30px" alt="">
                            <div>Aston Villa</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>11</td>
                        <td> <div class="info">
                            <img src="photos/man utd.png" 
                            width="30px" height="30px" alt="">
                            <div>Man Utd</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>12</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-chelsea-f-c-premier-league-world-cup-chelsea-fc-chelsea-fc-logo-5b35ad52b8d688.9227549215302444347571.png" 
                            width="30px" height="30px" alt="">
                            <div>chelsea</td>
                        <td>4</td>
                        <td>4</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>13</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-fulham-f-c-craven-cottage-reading-f-c-201718-escudos-de-futbol-5b2e020474b647.2826121515297418284781.png" 
                            width="30px" height="30px" alt="">
                            <div>Fullham</td>
                        <td>4</td>
                        <td>4</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>14</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-newcastle-united-f-c-newcastle-upon-tyne-premier-england-soccer-5b27e4948449c7.4917459215293410765419.png" 
                            width="30px" height="30px" alt="">
                            <div>Newcastle</td>
                        <td>4</td>
                        <td>3</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>15</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Wolves</td>
                        <td>4</td>
                        <td>3</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>16</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-a-f-c-bournemouth-dean-court-brentford-f-c-footb-5bea42f6946aa1.0487456315420792226079.png" 
                            width="30px" height="30px" alt="">
                            <div>Bournemouth</td>
                        <td>4</td>
                        <td>2</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>17</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Sheff Utd</td>
                        <td>4</td>
                        <td>1</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>18</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-goodison-park-everton-f-c-premier-league-liverpoo-england-football-5b15f78a4434d2.3458265915281662822794.png" 
                            width="30px" height="30px" alt="">
                            <div>Everton</td>
                        <td>4</td>
                        <td>12</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>19</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Luton</td>
                        <td>4</td>
                        <td>1</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>20</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-burnley-f-c-premier-league-turf-moor-efl-champion-james-tarkowski-5b1cdd6966a773.8026800015286183454205.png" 
                            width="30px" height="30px" alt="">
                            <div>Burnley</td>
                        <td>4</td>
                        <td>0</td>
                        </td>

                                                                  
                    </tr>
                 
                </tbody>
            
                </table>
               </div>
            </div>
        </div>
    </div>

</section>

<section class="trending" id="trending">
    <h3 class="sub-heading">Football</h3>
    <h1 class="heading">Premier League</h1>

    <div class="row">
        <div class="image">

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <a href="login.html"><img src="photos/shaki.jpg" width="600" height="430" alt="" ></a>
                        
                    </div>
                    <div class="content">
                            <div class="click">
                                 <a href="login.html" style="color: black; font-size: 1rem;" >La Liga</a>
                           </div>
                       <a href="login.html" >people often turn to food delivery services 
                        to satisfy
                        <p>With busy work schedules and limited time, people often turn to food delivery services 
                            to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
        
        
        
                    </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <a href="login.html"><img src="photos/arnold.jpg" width="600" height="430" alt="" ></a>
                            
                        </div>
                        <div class="content">
                            
                            <div class="click">
                                <a href="home.php" style="color: black; font-size: 1rem;" >Premier League</a>
                               </div>
                               <a href="login.php" >people often turn to food delivery services 
                                to satisfy
                                <p>With busy work schedules and limited time, people often turn to food delivery services 
                                    to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
        
        
                        </div>
                    </div>
                        <div class="box">
                            <div class="image">
                                <a href="login.html"><img src="photos/chelsea.jpg" width="500" height="380" alt="" ></a>
                                
                            </div>
                            <div class="content">
                                <div class="click">
                                    <a href="home.php" style="color: black; font-size: 1rem;" >Transfer News</a>
                                   </div>
                                   <a href="login.php" >people often turn to food delivery services 
                                    to satisfy
                                    <p>With busy work schedules and limited time, people often turn to food delivery services 
                                        to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
        
        
                        </div>
                    </div>
                            <div class="box">
                                <div class="image">
                                    <a href="login.html"><img src="photos/classico.jpg" width="500" height="380" alt="" ></a>
                                    
                                </div>
                                <div class="content">
                                    <div class="click">
                                        <a href="home.php" style="color: black; font-size: 1rem;" >La Liga</a>
                                       </div>
                                       <a href="login.php" >people often turn to food delivery services 
                                        to satisfy
                                        <p>With busy work schedules and limited time, people often turn to food delivery services 
                                            to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
                    
                                    </div>
                                </div>
                                 <div class="box">
                                    <div class="image">
                                        <a href="login.html"><img src="photos/conte.jpg" width="600" height="430" alt="" ></a>
                                        
                                    </div>
                                    <div class="content">
                                        <div class="click">
                                            <a href="home.php" style="color: black; font-size: 1rem;" >Premier League</a>
                                           </div>
                                           <a href="login.php" >people often turn to food delivery services 
                                            to satisfy
                                            <p>With busy work schedules and limited time, people often turn to food delivery services 
                                                to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
                        
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="image">
                                            <a href="login.html"><img src="photos/ETH.jpg" width="600" height="430" alt="" ></a>
                                            
                                        </div>
                                        <div class="content">
                                            <div class="click">
                                                <a href="home.php" style="color: black; font-size: 1rem;" >Premier League</a>
                                               </div>
                                               <a href="login.php" >people often turn to food delivery services 
                                                to satisfy
                                                <p>With busy work schedules and limited time, people often turn to food delivery services 
                                                    to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
                            
                                            </div>
                                        </div>
                          </div>
        </div>
        <div class="card">
            <h3 class="sub-heading">Table</h3>
             <h1 class="heading">Premier League</h1>
            <div class="card-body">
               <div class="table-responsive">
                <table width="100%" >
                   
                    <thead>
                    <tr>                      
                        
                        <td>Pos</td>
                        <td>Team</td>
                        <td>P</td>
                        <td> PTS</td>                      


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td> <div class="info">
                            <img src="photos/city.png" 
                              width="30px" height="30px" alt="">
                            <div>Man City</td>
                        <td>4</td>
                        <td>12</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-tottenham-hotspur-f-c-premier-league-dream-league-5af214e203c340.9920525215258144980154.png" 
                            width="30px" height="30px" alt="">
                            <div>Tottenham</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> <div class="info">
                            <img src="photos/liverpool.png" 
                            width="30px" height="30px" alt="">
                            <div>Liverpool</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-west-ham-united-f-c-premier-league-thames-ironwor-5aec879d5b5848.9743672815254506533742.png" 
                            width="30px" height="30px" alt="">
                            <div>West Ham</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>5</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Arsenal</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>6</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-falmer-stadium-brighton-hove-albion-f-c-premier-5b09db19e99253.3016851715273725699567.png" 
                            width="30px" height="30px" alt="">
                            <div>Brighton</td>
                        <td>4</td>
                        <td>9</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>7</td>
                        <td> <div class="info">
                            <img src="photos/5a21a8f93f0424.6510683715121553852581.png" 
                            width="30px" height="30px" alt="">
                            <div>Crystal Palace</td>
                        <td>4</td>
                        <td>7</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>8</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-brentford-f-c-football-bristol-city-f-c-clip-art-5c4948498272a6.6723522515483065055343.png" 
                            width="30px" height="30px" alt="">
                            <div>Brentford</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>9</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Nottm Forest</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>10</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-aston-villa-f-c-english-football-league-efl-champ-5b06e6d31acac2.3136082615271789631098.png" 
                            width="30px" height="30px" alt="">
                            <div>Aston Villa</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>11</td>
                        <td> <div class="info">
                            <img src="photos/man utd.png" 
                            width="30px" height="30px" alt="">
                            <div>Man Utd</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>12</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-chelsea-f-c-premier-league-world-cup-chelsea-fc-chelsea-fc-logo-5b35ad52b8d688.9227549215302444347571.png" 
                            width="30px" height="30px" alt="">
                            <div>chelsea</td>
                        <td>4</td>
                        <td>4</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>13</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-fulham-f-c-craven-cottage-reading-f-c-201718-escudos-de-futbol-5b2e020474b647.2826121515297418284781.png" 
                            width="30px" height="30px" alt="">
                            <div>Fullham</td>
                        <td>4</td>
                        <td>4</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>14</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-newcastle-united-f-c-newcastle-upon-tyne-premier-england-soccer-5b27e4948449c7.4917459215293410765419.png" 
                            width="30px" height="30px" alt="">
                            <div>Newcastle</td>
                        <td>4</td>
                        <td>3</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>15</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Wolves</td>
                        <td>4</td>
                        <td>3</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>16</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-a-f-c-bournemouth-dean-court-brentford-f-c-footb-5bea42f6946aa1.0487456315420792226079.png" 
                            width="30px" height="30px" alt="">
                            <div>Bournemouth</td>
                        <td>4</td>
                        <td>2</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>17</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Sheff Utd</td>
                        <td>4</td>
                        <td>1</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>18</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-goodison-park-everton-f-c-premier-league-liverpoo-england-football-5b15f78a4434d2.3458265915281662822794.png" 
                            width="30px" height="30px" alt="">
                            <div>Everton</td>
                        <td>4</td>
                        <td>12</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>19</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Luton</td>
                        <td>4</td>
                        <td>1</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>20</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-burnley-f-c-premier-league-turf-moor-efl-champion-james-tarkowski-5b1cdd6966a773.8026800015286183454205.png" 
                            width="30px" height="30px" alt="">
                            <div>Burnley</td>
                        <td>4</td>
                        <td>0</td>
                        </td>

                                                                  
                    </tr>
                 
                </tbody>
            
                </table>
               </div>
            </div>
        </div>
    </div>

</section>


<section class="trending" id="trending">
    <h3 class="sub-heading">Football</h3>
    <h1 class="heading">Spanish La Liga</h1>

    <div class="row">
        <div class="image">

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <a href="login.html"><img src="photos/shaki.jpg" width="600" height="430" alt="" ></a>
                        
                    </div>
                    <div class="content">
                            <div class="click">
                                 <a href="login.html" style="color: black; font-size: 1rem;" >La Liga</a>
                           </div>
                       <a href="login.php" >people often turn to food delivery services 
                        to satisfy
                        <p>With busy work schedules and limited time, people often turn to food delivery services 
                            to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
        
        
        
                    </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <a href="login.html"><img src="photos/arnold.jpg" width="600" height="430" alt="" ></a>
                            
                        </div>
                        <div class="content">
                            
                            <div class="click">
                                <a href="home.php" style="color: black; font-size: 1rem;" >Premier League</a>
                               </div>
                               <a href="login.php" >people often turn to food delivery services 
                                to satisfy
                                <p>With busy work schedules and limited time, people often turn to food delivery services 
                                    to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
        
        
                        </div>
                    </div>
                        <div class="box">
                            <div class="image">
                                <a href="login.html"><img src="photos/chelsea.jpg" width="500" height="380" alt="" ></a>
                                
                            </div>
                            <div class="content">
                                <div class="click">
                                    <a href="home.php" style="color: black; font-size: 1rem;" >Transfer News</a>
                                   </div>
                                   <a href="login.php" >people often turn to food delivery services 
                                    to satisfy
                                    <p>With busy work schedules and limited time, people often turn to food delivery services 
                                        to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
        
        
                        </div>
                    </div>
                            <div class="box">
                                <div class="image">
                                    <a href="login.html"><img src="photos/classico.jpg" width="500" height="380" alt="" ></a>
                                    
                                </div>
                                <div class="content">
                                    <div class="click">
                                        <a href="home.php" style="color: black; font-size: 1rem;" >La Liga</a>
                                       </div>
                                       <a href="login.php" >people often turn to food delivery services 
                                        to satisfy
                                        <p>With busy work schedules and limited time, people often turn to food delivery services 
                                            to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
                    
                                    </div>
                                </div>
                                 <div class="box">
                                    <div class="image">
                                        <a href="login.html"><img src="photos/conte.jpg" width="600" height="430" alt="" ></a>
                                        
                                    </div>
                                    <div class="content">
                                        <div class="click">
                                            <a href="home.php" style="color: black; font-size: 1rem;" >Premier League</a>
                                           </div>
                                           <a href="login.php" >people often turn to food delivery services 
                                            to satisfy
                                            <p>With busy work schedules and limited time, people often turn to food delivery services 
                                                to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
                        
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="image">
                                            <a href="login.html"><img src="photos/ETH.jpg" width="600" height="430" alt="" ></a>
                                            
                                        </div>
                                        <div class="content">
                                            <div class="click">
                                                <a href="home.php" style="color: black; font-size: 1rem;" >Premier League</a>
                                               </div>
                                               <a href="login.php" >people often turn to food delivery services 
                                                to satisfy
                                                <p>With busy work schedules and limited time, people often turn to food delivery services 
                                                    to satisfy their hunger cravings without leaving the comfort of their home or office.</p></a>
                            
                                            </div>
                                        </div>
                          </div>
        </div>
        <div class="card">
            <h3 class="sub-heading">Table</h3>
             <h1 class="heading">La Liga</h1>
            <div class="card-body">
               <div class="table-responsive">
                <table width="100%" >
                   
                    <thead>
                    <tr>                      
                        
                        <td>Pos</td>
                        <td>Team</td>
                        <td>P</td>
                        <td> PTS</td>                      


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td> <div class="info">
                            <img src="photos/city.png" 
                              width="30px" height="30px" alt="">
                            <div>Man City</td>
                        <td>4</td>
                        <td>12</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-tottenham-hotspur-f-c-premier-league-dream-league-5af214e203c340.9920525215258144980154.png" 
                            width="30px" height="30px" alt="">
                            <div>Tottenham</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> <div class="info">
                            <img src="photos/liverpool.png" 
                            width="30px" height="30px" alt="">
                            <div>Liverpool</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-west-ham-united-f-c-premier-league-thames-ironwor-5aec879d5b5848.9743672815254506533742.png" 
                            width="30px" height="30px" alt="">
                            <div>West Ham</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>5</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Arsenal</td>
                        <td>4</td>
                        <td>10</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>6</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-falmer-stadium-brighton-hove-albion-f-c-premier-5b09db19e99253.3016851715273725699567.png" 
                            width="30px" height="30px" alt="">
                            <div>Brighton</td>
                        <td>4</td>
                        <td>9</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>7</td>
                        <td> <div class="info">
                            <img src="photos/5a21a8f93f0424.6510683715121553852581.png" 
                            width="30px" height="30px" alt="">
                            <div>Crystal Palace</td>
                        <td>4</td>
                        <td>7</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>8</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-brentford-f-c-football-bristol-city-f-c-clip-art-5c4948498272a6.6723522515483065055343.png" 
                            width="30px" height="30px" alt="">
                            <div>Brentford</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>9</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Nottm Forest</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>10</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-aston-villa-f-c-english-football-league-efl-champ-5b06e6d31acac2.3136082615271789631098.png" 
                            width="30px" height="30px" alt="">
                            <div>Aston Villa</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>11</td>
                        <td> <div class="info">
                            <img src="photos/man utd.png" 
                            width="30px" height="30px" alt="">
                            <div>Man Utd</td>
                        <td>4</td>
                        <td>6</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>12</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-chelsea-f-c-premier-league-world-cup-chelsea-fc-chelsea-fc-logo-5b35ad52b8d688.9227549215302444347571.png" 
                            width="30px" height="30px" alt="">
                            <div>chelsea</td>
                        <td>4</td>
                        <td>4</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>13</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-fulham-f-c-craven-cottage-reading-f-c-201718-escudos-de-futbol-5b2e020474b647.2826121515297418284781.png" 
                            width="30px" height="30px" alt="">
                            <div>Fullham</td>
                        <td>4</td>
                        <td>4</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>14</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-newcastle-united-f-c-newcastle-upon-tyne-premier-england-soccer-5b27e4948449c7.4917459215293410765419.png" 
                            width="30px" height="30px" alt="">
                            <div>Newcastle</td>
                        <td>4</td>
                        <td>3</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>15</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Wolves</td>
                        <td>4</td>
                        <td>3</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>16</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-a-f-c-bournemouth-dean-court-brentford-f-c-footb-5bea42f6946aa1.0487456315420792226079.png" 
                            width="30px" height="30px" alt="">
                            <div>Bournemouth</td>
                        <td>4</td>
                        <td>2</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>17</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Sheff Utd</td>
                        <td>4</td>
                        <td>1</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>18</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-goodison-park-everton-f-c-premier-league-liverpoo-england-football-5b15f78a4434d2.3458265915281662822794.png" 
                            width="30px" height="30px" alt="">
                            <div>Everton</td>
                        <td>4</td>
                        <td>12</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>19</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-201819-premier-league-201718-premier-league-premier-league-darts-5b29cac0ae9df2.2038562915294655367152.png" 
                            width="30px" height="30px" alt="">
                            <div>Luton</td>
                        <td>4</td>
                        <td>1</td>
                        </td>

                                                                  
                    </tr>
                    <tr>
                        <td>20</td>
                        <td> <div class="info">
                            <img src="photos/kisspng-burnley-f-c-premier-league-turf-moor-efl-champion-james-tarkowski-5b1cdd6966a773.8026800015286183454205.png" 
                            width="30px" height="30px" alt="">
                            <div>Burnley</td>
                        <td>4</td>
                        <td>0</td>
                        </td>

                                                                  
                    </tr>
                 
                </tbody>
            
                </table>
               </div>
            </div>
        </div>
    </div>

</section>


<section class="latest" id="latest">

    <h3 class="sub-heading">Football</h3>
    <h1 class="heading">Latest News</h1>
  

                <?php
                    $ret=mysqli_query($con,"select * from latest ORDER BY id DESC");
                    while ($row=mysqli_fetch_array($ret)) 
                    {

                ?>
    <div class="box-container">
                
    
        <div class="box">
              
            <div class="image">

                <img  src="admin/latestimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['image1']);?>" data-echo="admin/latestimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['image1']);?>" width="600" height="430" alt="" >
                
            </div>
            <div class="content">
                <center>
               <a href="home.php"><?php echo htmlentities($row['title']);?></a>
                </center>
                    <div class="click">
                        <a href="home.php" style="color: black; font-size: 1rem;" ><?php echo htmlentities($row['league']);?></a>
                    </div>

            </div>
          
        </div> 
        
     </div>
    <?php } ?>
        
     
</section>

<section class="latest" id="latest">    
    <h3 class="sub-heading">Sports</h3>
    <h1 class="heading">Trending</h1>  
    <div class="test">
            <div class="container">
                <aside class="sidebar-left">
        <div class="card">
                    <h3 class="sub-heading">Table</h3>
                    <h1 class="heading">Topic of the week </h1>
                    <div class="card-body">
                    <div class=" slide">
    
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>   
                </aside>
        <main class="content">
                <div class="row">
                <div class="image">

            <div class="box-container">
                <?php
                        $ret=mysqli_query($con,"select * from trending ORDER BY id DESC");
                        while ($row=mysqli_fetch_array($ret)) 
                        {

                    ?>

                <div class="box">
                    <div class="image" >
                        <img  src="admin/trendingimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['image1']);?>" data-echo="admin/trendingimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['image1']);?>"  alt="" >
                        
                    </div>
                    <div class="content" href="login.html">
                           
                                                   
                          <a href="login.html" style="color: #eee; font-size: 2rem;"><?php echo htmlentities($row['title']);?>
                           <p> <?php echo htmlentities($row['subTitle']);?></p></a>
                           <div class="click">
                                <a href="home.php" style="color: black; font-size: 1rem;" ><?php echo htmlentities($row['league']);?></a>
                            </div>
                    </div>
                </div>
                    <?php } ?>

                </div>
            </div>
      
            </div>   
        </main>
        <aside class="sidebar-right">
            <div class="card">
                <h3 class="sub-heading">Table</h3>
                <h1 class="heading">Topic of the week </h1>
                <div class="card-body">
                    <div class=" slide">
    
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                    <div class="user"  >
                        <a href="login.html"><img src="photos/ETH.jpg" alt=""></a>
    
                        <div class="user-info">
                            <a href="login.html"><p>The only place i trust to get food online. I'm not only amazed by their delivery service but the quality
                                and affordable food they sell here.</p></a>
                          
    
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>   
             </aside>
            </div>
            </div> 
</section>


<section>
        
      

</section>
  

<?php include('includes/footer.php');?>




<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="javascript/swiper-bundle.min.js"></script>


<script>
    
    var swiper = new Swiper(".home-slider", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 7500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      loop:true,
      },
    );
    
  var swiper = new Swiper(".review-slider", {
    spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 7500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      loop:true,
      },
    );
   
  </script>





</body>
</html>