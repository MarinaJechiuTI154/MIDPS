<?php
session_start();
    //Login Form----------------------------------
   
        if (array_key_exists('username', $_POST) OR array_key_exists('password', $_POST)) {  
        
        $link = mysqli_connect("localhost","root","","authentication");
        
            if (mysqli_connect_error()) {
        
                die ("Eroare la conectarea la db");
        
            } 
        if ($_POST['username'] == '') {
            
            //echo "<p>Email address is required.</p>";
            
        } else if ($_POST['password'] == '') {
            
            //echo "<p>Password is required.</p>";
            
        } else {
            $query = "SELECT `id` FROM `users` WHERE username = '".mysqli_real_escape_string($link, $_POST['username'])."' AND password='".mysqli_real_escape_string($link, $_POST['password'])."'";
            $result = mysqli_query($link, $query);
        
        if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $_POST['username'];
            header ("Location: my_profil.php");
                
            } else {
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your inserted username or password is not correct!</strong></p></div>';
                //echo"<p>Wrong Password or Email, Try Again !</p>";
                }   
            }    
        }  
?>


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
                                            <h2>Logare</h2>
                                        </div>
                                    </div>                                </div>
                                
                             <div class="text-center margin-top-10 margin-bottom-50">
                                <div class="row">
                           

                        <form method="post"  action="logare.php">
                        	<div class="container">
                        		<div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
			                            <table>
			                                <tr>
			                                    <td> <p>Username:</p></td>
			                                    <td><input type="text" name="username" class = "textInput" > </td>
			                                </tr>

			                                <tr>
			                                    <td><p>Password:</p></td>
			                                    <td><input type="password" name="password" class = "textInput" > </td>
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