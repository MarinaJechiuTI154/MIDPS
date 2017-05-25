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
				<div id="footer"><br><br><br>
			<center><img width="25%" src="images/zar.png"></center>
		</div> <!-- end of footer -->
				<div class="leftcont">
				<p class="text4"><br>
				<center><strong><h4>About Yahtzee</h4></strong><br><center>
				Yahtzee is a dice game made by Milton Bradley (now owned by Hasbro), which was first marketed as "Yatzie" by the National Association Service of Toledo, Ohio, in the early 1940s. Yatzie was included in a game set called "LUCK - 15 Grand Dice Games". It was marketed under the name of Yahtzee by game entrepreneur Edwin S. Lowe in 1956. Lowe is also responsible for introducing Bingo to the U.S. market.[1] The game is a development of earlier dice games such as Poker Dice, Yacht and Generala. It is also similar to Yatzy, which is popular in Scandinavia.<br>

The object of the game is to score points by rolling five dice to make certain combinations. The dice can be rolled up to three times in a turn to try to make various scoring combinations. A game consists of thirteen rounds. After each round the player chooses which scoring category is to be used for that round. Once a category has been used in the game, it cannot be used again. The scoring categories have varying point values, some of which are fixed values and others where the score depends on the value of the dice. A Yahtzee is five-of-a-kind and scores 50 points; the highest of any category. The winner is the player who scores the most points.<br>

Yahtzee was marketed by the E.S. Lowe Company from 1956 till 1973. In 1973, the Milton Bradley Company purchased the E.S. Lowe Company and assumed the rights to produce and sell Yahtzee. During Lowe's ownership over 40 million Yahtzee games were sold worldwide. The game has maintained its popularity. According to current owner Hasbro, 50 million Yahtzee games are sold each year. A classic edition is currently being marketed by Winning Moves.<br>
				<strong>This online version of YAHTZEE was made by my team"Echipa Racheta".</strong> <br>
				<strong>The game is made using Javascript, HTML and CSS, with jQuery and a couple of jQuery plugins used for animations.</strong> <br>
		

				</p>
				
			</div>
				
				<div class="col col-md-1"></div>
			</div>
			<div class="col col-md-2"></div>
		</div>
	</div>
	



	 <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>