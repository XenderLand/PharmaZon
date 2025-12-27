<div class="bar-menu">


    
    <nav class="navbar">
        <a class="active"href="index.php">Home</a>
        <a href="#OnlineShop">Online Shop</a>
        <a  href="#product">products</a>
        <a href="#health">Health Tips</a>
        <a href="#about">About</a>
       

    </nav>
    <div class="start">
      
<?php if(strlen($_SESSION['login']))
    {   ?>
				<i href="#"><a class="icon fa fa-user"></a>Welcome -<?php echo htmlentities($_SESSION['username']);?></i>
				<?php } ?>

          <a href="../my-account.php" class="other-btn">My Account</a> 

					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
            <a href="../login.php" class="get-started-btn">Login</a> 
            <a href="../signup.php" class="get-started-btn">Signup</a>   
            <a href="PharmAdmin/adlogin.php" class="get-started-btn">Admin</a>   

<?php }
else{ ?>
	
        <a href="logout.php" class="get-started-btn">Logout</a>   

				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->
            
        </div>
    </div>
   

			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->

    </div>

        </div>


<style>

              :root{
                --green: #27ae60;
                --orange: rgb(255, 139, 7);
                --black:#000000;
                --red:rgb(255, 7, 7);
                --yellow:rgb(255, 139, 7);
                --light-color:#666;
                --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
                --white: #ffffff;
                
              }

              html{
              font-size: 100%;
              overflow-x: hidden;
              scroll-padding-top: 5.5rem;
              scroll-behavior: smooth;
              }

              .head{
                text-align:center;
                color: var(--black);
                font-size: 1rem;
                text-transform: uppercase;

              }

              .bar-menu{
                  position:static;
                  top: 0; left: 0; right: 0;
                  background: #fff;
                  padding: .1px .7rem ;
                  display: flex;
                  align-items: center;
                  justify-content: space-between;
                  z-index: 1000;
                  box-shadow: var(--box-shadow);

                }

                .bar-menu .logo{
                  color: var(--black);
                  font-size: 1.5rem;
                  font-weight: bolder;

                } 
                .bar-menu .logo i{
                  color:var(--yellow);
                  
                }
                
                .bar-menu .start{
                margin-left: 15%;
                

              }
              .bar-menu .navbar{
                height: 1rem;
              }
              .bar-menu .navbar a{ 
                  font-size:1rem ;
                  border-radius: 0.8rem;
                  padding:0.5rem 1.5rem;
                  color:var(--black);


                } 
                .bar-menu .navbar a.active,
                .bar-menu .navbar a:hover{
                  color:var(--black);
                  background: var(--yellow);
                }
                header .icons a{
                  cursor: pointer;
                  margin-left: 2rem;
                  height: 4rem;
                  line-height: 4.5rem;
                  width: 4rem;
                  text-align: center;
                  font-size: 1.5rem;
                  color: var(--black);
                  border-radius: 50%;
                  background: var(--orange);

                }
                header .icons a:hover{
                  color:var(--orange);
                  background: var(--black);
                  transform:rotate(360deg);

                }
                header .icons img span{
                  color: var(--black);
                  font-family: 'Times New Roman', Times, serif;
                  font-size: .5rem;
                }

                .start .get-started-btn {
                  margin-bottom: 3rem;
                  background: var(--black);
                  color: #fff;
                  border-radius: 50px;
                  padding: 1rem 1rem;
                  white-space: nowrap;
                  transition: 0.3s;
                  font-size: 1rem;
                  display: inline-block;
                }
                .start .get-started-btn{
                  justify-content: none;
                }
                
                .start .get-started-btn:hover {
                  background: var(--yellow);
                  color: #000000;
                }
                
                .start .other-btn {
                  background: var(--white);
                  color: #000000;
                  border-radius: 5px;
                  padding: .7rem .7rem;
                  white-space: nowrap;
                  transition: 0.3s;
                  font-size: .8rem;
                  display: inline-block;
                  border: .2rem solid var(--yellow);
                }
                .start .other-btn{
                  justify-content: none;
                }
                
                .start .other-btn:hover {
                  background: var(--yellow);
                  color: #000000;
                }
                
                .start i  {
                  background: var(--white);
                  color: #000000;
                  border-radius: 5px;
                  padding: .7rem .7rem;
                  white-space: nowrap;
                  transition: 0.3s;
                  font-size: .8rem;
                  display: inline-block;
                  border: .2rem solid var(--black);
                }
                .start i a  {
                  background: var(--orange);
                  color: #000000;
                  border-radius: 5px;
                  padding: .7rem .7rem;
                  white-space: nowrap;
                  transition: 0.3s;
                  font-size: .8rem;
                  display: inline-block;
                }
</style>

    