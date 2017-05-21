
<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['register_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);
     if($password==$password2)
     {           //Create User
           // $password=md5($password); //hash password before storing forinde security purposes
            $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
            mysqli_query($db,$sql);
            $_SESSION['message']="You are now logged in";
            $_SESSION['username']=$username;
            header("location:my_profil.php");  //redirect home page
    }
    else
    {
      $_SESSION['message']="The two password do not match";
     }
}
?>﻿

<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title>Servicii foto</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/aparat.png">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/aparat.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

 </head>

  <body>
    
    
	
	<!-- Preloader Start -->
    <div id="preloader">
	  <div class="loader"></div>
    </div>
    <!-- Preloader End -->

    
    
    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-3">
                        <div class="logo">
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="index.php">Acasă <div class="ripple-wrapper"></div></a>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="home-section-background" >
            <div class="display-table">
                <div class="display-table-cell">
 
                        <!-- Logare Start -->


                        <section id="logare" class="logare-section section-space-padding-1">
                           <div class="container">
                              <div class="row">
                                    <div class="col-sm-12">
                                        <div class="section-title">
                                            <h2>Înregistrare</h2>
                                        </div>
                                    </div>
                                </div>
                                
                             <div class="text-center margin-top-10 margin-bottom-50">
                                <div class="row">
                           

                        <form method="post"  action="inregistrare.php">
                        	<div class="container">
                        		<div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
			                            <table>
			                                <tr>
			                                    <td> <p>Username:</p></td>
			                                    <td><input type="text" name="username" class = "textInput" > </td>
			                                </tr>

			                                <tr>
			                                    <td><p>Email:</p></td>
			                                    <td><input type="email" name="email" class = "textInput" > </td>
			                                </tr>

			                                <tr>
			                                    <td><p>Password:</p></td>
			                                    <td><input type="password" name="password" class = "textInput" > </td>
			                                </tr>

			                                <tr>
			                                    <td><p>Password again:</p></td>
			                                    <td><input type="password" name="password2" class = "textInput" > </td>
			                                </tr>

			                                <tr>
			                                    <td></td>
			                                    <td><input type="submit" name="register_btn" value="Register"> </td>
			                                </tr>

			                             </table>
	                            	</div>
	                			</div>
	                		</div>
	                     </form>
	           </div>
	        </div>
	         </section>
                         <!-- LogareEnd -->

                    
                </div>
            </div>
        </div>
        
    </header>
    <!-- Home & Menu Section End-->
    


  

     <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC0HAKwKinpoFKNGUwRBgkrKhF-sIqFUNA"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
  </body>
 </html>