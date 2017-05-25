<?php require 'register.php' ?>
<?php require 'login.php' ?>
<?php require 'logout.php' ?>

<?php
        $db =mysqli_connect("localhost","root","","yahtzee");
        $sql = 'SELECT * FROM results ORDER by score DESC, id ASC LIMIT 10';
        $result = mysqli_query($db, $sql) ;
        $result_length = mysqli_num_rows($result);
 
	/*	for($i = 0; $i < $result_length; $i++)
		{
		     $row = mysqli_fetch_array($result);
		     echo $row['username'] . "\t" . $row['score'] . "\n";
		}
		*/
	  
?>

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
				
				<div style="width: 55%;font-size: 11px;float: left; margin-left: 120px; margin-top: 110px; ">
				<div class="col ">
							<table class="table table-bordered table-hover table-responsive" id="tabel" ; bgcolor="rgb(255,100,020">
					<thead>
						<tr>
							<th style="text-align: left; color : red"; class="score"; >Username</th>
							<th style="text-align: center; color : red"; class="score"; >Score</th>
						</tr>
					</thead>
					<tbody>
						
							<tr>
								<td>
									<span id="1" class="scoreone">
										<?php $row = mysqli_fetch_array($result);
		    							 echo $row['username'] . "\t" . "\n";
		    							 ?>
									</span>
								</td>
								<td style="text-align: center;">
									<span id="1.1 " class="scoreone">
										<?php 
		    						 		echo   $row['score'] . "\n";  ?>
		    						 </span>
								</td>
								<tr>
									<td>
										<span id="2" class="scoreone">
											<?php $row = mysqli_fetch_array($result);
			    							 echo $row['username'] . "\t" . "\n";
			    							 ?>
										</span>
									</td>
								
							
								
										<td style="text-align: center;">
											<span id="2.2 " class="scoreone">
												<?php 
				    						 		echo   $row['score'] . "\n";  ?>
				    						 </span>
										</td>
									 </tr>
						
							<tr>
								<td>
									<span id="3" class="scoreone">
										<?php $row = mysqli_fetch_array($result);
			    							 echo $row['username'] . "\t" . "\n";
			    							 ?>
									</span>
								</td>
								<td style="text-align: center;">
									<span id="3.2" class="scoreone">
										<?php 
				    					echo   $row['score'] . "\n";  ?>
									</span>
								</td>
								
							</tr>
						
							<tr>
								<td>
									<span id="4" class="scoreone">
										<?php $row = mysqli_fetch_array($result);
			    							 echo $row['username'] . "\t" . "\n";
			    							 ?>
									</span>
								</td>
								<td style="text-align: center;">
									<span id="4.1" class="scoreone">
										<?php 
				    					echo   $row['score'] . "\n";  ?>
									</span>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="5" class="scoreone">
										<?php $row = mysqli_fetch_array($result);
			    							 echo $row['username'] . "\t" . "\n";
			    							 ?>
									</span>
								</td>
								<td style="text-align: center;">
									<span id="5.1" class="scoreone">
									<?php 
				    					echo   $row['score'] . "\n";  ?>
									</span>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="6" class="scoreone">
										<?php $row = mysqli_fetch_array($result);
			    							 echo $row['username'] . "\t" . "\n";
			    							 ?>
									</span>
								</td>
								<td style="text-align: center;">
									<span id="6.1" class="scoreone">
									<?php 
				    					echo   $row['score'] . "\n";  ?>
									</span>
								</td>	
							</tr>
						
							<tr>
								<td>
									<span id="7" class="scoreone">
										<?php $row = mysqli_fetch_array($result);
			    							 echo $row['username'] . "\t" . "\n";
			    							 ?>
									</span>
								</td>
								<td style="text-align: center;">
									<span id="7.1" class="scoreone">
									<?php 
				    					echo   $row['score'] . "\n";  ?>
									</span>
								</td>
								<
							</tr>
							<tr>
								<td>
									<span id="8" class="scoreone">
										<?php $row = mysqli_fetch_array($result);
			    							 echo $row['username'] . "\t" . "\n";
			    							 ?>
									</span>
								</td>
								<td style="text-align: center;">
									<span id="8.1" class="scoreone">
										<?php 
				    					echo   $row['score'] . "\n";  ?>
									</span>
								</td>
							</tr>

							<tr>
								<td>
									<span id="9" class="scoreone">
										<?php $row = mysqli_fetch_array($result);
			    							 echo $row['username'] . "\t" . "\n";
			    							 ?>
									</span>
								</td>
								<td style="text-align: center; ">
									<span id="9.1" class="scoreone">
										<?php 
				    					echo   $row['score'] . "\n";  ?>
									</span>
								</td>
							</tr>

							<tr>
								<td>
									<span id="10" class="scoreone">
										<?php $row = mysqli_fetch_array($result);
			    							 echo $row['username'] . "\t" . "\n";
			    							 ?>
									</span>
								</td>
								<td style="text-align: center;">
									<span id="10.1" class="scoreone">
										<?php 
				    					echo   $row['score'] . "\n";  ?>
									</span>
								</td>
							</tr>

					</tbody>
				</table>
				</div>
				<div class="col col-md-1"></div>
			</div>
			<div class="col col-md-2"></div>
		</div>
	</div>


 
</body>
</html>