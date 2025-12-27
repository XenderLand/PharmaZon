<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PharmaZon</title>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">      
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >


    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    
</head>
<body>
 <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
            <h2><span class="fas fa-hospital" ></span> <span>PharmaZon</span> 
                </h2>
            </div>
            <div class="sidebar-menu">
         
                <ul>
                   
                    <li>

                        <a href="admin.php" class="active"><span class="las la-igloo"></span>   
                            <span>Dashboard</span></a>
                     
                    </li>
                    <li>
                        <a href="customers.php" ><span class="las la-users"></span>    
                            <span>Customers</span></a>
                      
                    </li>
                    <li>
                        <a href="orderX.php" ><span class="las la-shopping-bag"></span>    
                            <span>Orders</span></a>

                    </li>
                   
                     <li>
                        <a href="category.php" ><span class="las la-home"></span>    
                            <span>Category</span></a>      
                    </li>
                   
                    <li>
                        <a href="products.php"><span class="las la-receipt"></span>    
                            <span>Products</span></a>
                        
                    </li>
                    <li>
                    <a href="logout.php"><span class="las la-door-closed"></span>    
                            <span>Logout</span></a>
                        
                    </li>
                </ul>

            </div>
        </div>
        <div class="main-content">
            <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-arrows-alt"></span>
                    </label>
                    Dashboard
                </h2>

                <div class="search-wrapper">
                    <ion-icon name="search"></ion-icon>
                    <input type="search" placeholder="Search here"> 

                </div>
                <div class="user-wrapper">
                    <img src="../Medicine/pills-pharmacy-wallpaper-preview.jpg" width="50px" height="50px" alt="">
                <h4>PharmaZon</h4>
                <small>Admin</small>

                </div>
            

            </header>
            
          
            <main>

                <div class="cards">
                     
                      <div class="card-single">
                          <div>
                          <h2>6</h2>
                          <span>Customers</span>
                     </div>
                    <div>
                    <ion-icon name="bag-handle"></ion-icon>
                     </div>
                     </div>



                     <div class="card-single">
                    <div>
                 <h2>25</h2>
                     <span>Orders</span>
                    </div>
                 <div>
                  <ion-icon name="restaurant"></ion-icon> 
                    </div>
                     </div>



                     <div class="card-single">
                          <div>
                             <h2>6</h2>
                             <span>Pharmacies</span>
                         </div>  
                            <div>
                             <ion-icon name="people"></ion-icon> 
                          </div>
                     </div>


                    <div class="card-single"> 
                         <div>
                             <h2>Gh$ 254,26</h2>
                              <span>Income</span>
                         </div>
                         <div>
                             <ion-icon name="card"></ion-icon>
                         </div>

                   </div>
                   </div>
            
     


<section>
<div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3>Orders</h3>
                              
                            </div>
                            <?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>
                            <div class="card-body">
                               <div class="table-responsive">
                                <table width="100%" >
                                    <thead>
                                    <tr>
                                    <th>#</th>
											<th> Name</th>
											<th width="50">Email /Contact no</th>
											<th>Shipping Address</th>
											<th>Product </th>
											<th>Qty </th>
											<th>Amount </th>
											<th>Order Date</th>
											<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>


<?php 
 $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
$query=mysqli_query($con,"select users.name as username,users.email as useremail,users.contactno as usercontact,users.shippingAddress as shippingaddress,users.shippingCity as shippingcity,users.shippingState as shippingstate,users.shippingPincode as shippingpincode,products.productName as productname,orders.quantity as quantity,orders.orderDate as orderdate,products.productPrice as productprice,orders.id as id  from orders join users on  orders.userId=users.id join products on products.id=orders.productId where orders.orderDate Between '$from' and '$to'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>										
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['username']);?></td>
											<td><?php echo htmlentities($row['useremail']);?>/<?php echo htmlentities($row['usercontact']);?></td>
										
											<td><?php echo htmlentities($row['shippingaddress'].",".$row['shippingcity'].",".$row['shippingstate']."-".$row['shippingpincode']);?></td>
											<td><?php echo htmlentities($row['productname']);?></td>
											<td><?php echo htmlentities($row['quantity']);?></td>
											<td><?php echo htmlentities($row['quantity']*$row['productprice']);?></td>
											<td><?php echo htmlentities($row['orderdate']);?></td>
											<td>    <a href="updateorder.php?oid=<?php echo htmlentities($row['id']);?>" title="Update order" target="_blank"><i class="icon-edit"></i></a>
											</td>
											</tr>

										<?php $cnt=$cnt+1; } ?>
										</tbody>
								</table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->




        </main>
        </div>





        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

       

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="../javascript/script.js"></script>

<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>


</body>
</html>
<?php } ?>