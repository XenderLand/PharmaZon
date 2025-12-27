
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

if(isset($_POST['submit']))
{
	$category=$_POST['category'];
	$description=$_POST['description'];
$sql=mysqli_query($con,"insert into category(categoryName,categoryDescription) values('$category','$description')");
$_SESSION['msg']="Category Created !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from category where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Category deleted !!";
		  }

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

                        <a href="admin.php"><span class="las la-igloo"></span>   
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
                        <a href="category.php"  class="active"><span class="las la-home"></span>    
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
            

                   <div class="wrapper">
		<div class="container">
			<div class="row">
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Category</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="Category" method="post" >
									
<div class="control-group">
<label class="control-label" for="basicinput">Category Name</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="category" class="span8 tip" required>
</div>
</div>


<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												<textarea class="span8" name="description" rows="5"></textarea>
											</div>
										</div>

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Create</button>
											</div>
										</div>
									</form>
							</div>
						</div>



             <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3>Category</h3>
                              
                            </div>
                            <div class="card-body">
                               <div class="table-responsive">
                                <table width="100%" >
                                    <thead>
                                    <tr>
                                         <th>#</th>
											<th> Category</th>
											<th>Description </th>
											<th>Creation date</th>
											<th>Last Updated</th>
											<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>

<?php $query=mysqli_query($con,"select * from category");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['categoryName']);?></td>
											<td><?php echo htmlentities($row['categoryDescription']);?></td>
											<td> <?php echo htmlentities($row['creationDate']);?></td>
											<td><?php echo htmlentities($row['updationDate']);?></td>
											<td>
											<a href="edit-category.php?id=<?php echo $row['id']?>" ><i class="icon-edit"></i></a>
											<a href="category.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
							</div>
						</div>						

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

                    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" ></script>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

       


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="../javascript/script.js"></script>


</body>
</html>
<?php } ?>