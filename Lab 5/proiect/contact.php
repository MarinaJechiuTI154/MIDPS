<?php require 'register.php' ?>
<?php require 'login.php' ?>
<?php require 'logout.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Yahtzee</title>
	
	<link rel="stylesheet" href="css/style.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<div id="wrapper">
		<div class="row">
			<div class="col col-md-5"></div>
			<div class="col col-md-2">
				<h1 id="logo">Yahtzee!!!</h1>
			</div>
			<div class="col col-md-5"></div>
		</div>
		<div class="nav navbar-inverse" id="menu">
			<div class="container-fluid">
			<div class="col col-md-1"></div>
			<div class="col col-md-9">
				<div class="form-group">
					<?php require 'header.php' ?>
				</div>			
			</div>
			<div class="col col-md-2">
				<div class="btn-group btn-group-vertical btn-group-sm">
					<button class="btn btn-info" data-toggle="modal" data-target="#myModal">sing up</button>
					<div id="myModal" class="modal fade" tabindex="-1">
					  <div class="modal-dialog modal-lg">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button class="close" data-dismiss="modal">х</button>
					        <h4 class="modal-title">Sing Up</h4>
					      </div>
					      <div class="modal-body">
					      	<div class="form-group">
					      		<div class="container">
								    <form class="form-horizontal" method="post" action="about.php">
								    
								     <div class="form-group has-success">
								      <label for="text" class="col-sm-2 control-label">User</label>
								      <div class="col-sm-3">
								       <input type="text" name="username" class="form-control input-xs" id="user" placeholder="Username" required>
								      </div>
								     </div>
								     <div class="form-group has-success">
								      <label for="mail" class="col-sm-2 control-label">Email</label>
								      <div class="col-sm-3">
								       <input type="text" name="email" class="form-control input-xs" id="mail" placeholder="Email" required>
								      </div>
								     </div>
								     <div class="form-group has-success">
								      <label for="pass" class="col-sm-2 control-label">Password</label>
								      <div class="col-sm-3">
								       <input type="password" name="password" class="form-control input-xs" id="pass" placeholder="Password" required>
								      </div>
								     </div>
								     <div class="form-group has-success">
								      <label for="pass" class="col-sm-2 control-label">Confirm Password</label>
								      <div class="col-sm-3">
								       <input type="password" name="password2" class="form-control input-xs" id="pass2" placeholder="Password" required>
								      </div>
								     </div>
								     <div class="row">
								     	<div class="col col-md-3"></div>
								     	<button type="submit" name="submit" class="btn btn-info">Submit</button>
								     </div>
								        <div style="margin-left: 175px;">
								      <?php
              					if(isset($_SESSION['message'])) {
                  				  echo "<div style='color:#FF0000';id='error_msg'>".$_SESSION['message']."</div>";
                  				unset($_SESSION['message']);
            					  }
          							?>
								    </form>
								     </div>
								</div>
					      	</div>
					      </div>
					      <div class="modal-footer">
					        <button class="btn btn-danger" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
					<button class="btn btn-danger" data-toggle="modal" data-target="#myModalExit">log out</button>
					<form class="form-horizontal" method="post" action="Game.php">
					<div id="myModalExit" class="modal fade" tabindex="-1">
					  <div class="modal-dialog modal-sm">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button class="close" data-dismiss="modal">х</button>
					        <h4 class="modal-title">LOG OUT</h4>
					      </div>
					      <div class="modal-body">
					      	<button type="submit2" name="submit2" class="btn btn-danger btn-block">EXIT</button>
					      	
					      </div>
					      <div class="modal-footer">
					        <button class="btn btn-primary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
					</form>
				</div>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col col-md-2"></div>
			<div class="col col-md-8" id="content">
				<div class="col col-md-1"></div>
				<!-- here -->




	
       <div class="containerul" style="color: rgb(200,200,200)">
          <div class="row">
               
                    <div class="section-title";  >

                    	<h3> </h3>
                       <h2 style="display: inline">Telefon: 068641458</h2> <h2 style="display: inline">Email: photo@gmail.com</h2>
                         <h3> </h3>
                    </div>
                    
                </div>
            </div>
            
          
         
         <div class="row">
           
           <div class="col-md-6">   
                 
               <div class="row">
                  <form>
                    
					  <div class="col-sm-6">
						<div class="form-group">
						  <input type="text" id="name" class="form-control" placeholder="Nume">
						 </div>
                        </div>
								
                       <div class="col-sm-6">
					    <div class="form-group">
						 <input type="email" id="email" class="form-control" placeholder="Email-ul dumneavoastră">
						 </div>
                        </div>
                        
                        <div class="col-sm-6">
						  <div class="form-group">
							<input type="text" id="address" class="form-control" placeholder="De unde sunteți?">
						   </div>
                          </div>
								
                         
								
                       <div class="col-sm-12">
					    <div class="textarea-message form-group">
					      <textarea id="message" class="textarea-message form-control" placeholder="Mesajul dumneavoastră" rows="5"></textarea>
					       <button type="submit1" name="submit1" class="btn btn-success">Submit</button>  
						  </div>
                         </div>
                   
                   
                   
                       
                  </form>
                   
				</div>
               </div>
    
     <!-- Contact End -


	 
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>