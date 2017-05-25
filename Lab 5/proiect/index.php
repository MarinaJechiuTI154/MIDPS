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
	<style>
		#content {
			color: orange;
			text-shadow: 1px 1px 1px black
		}
	</style>
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
								    <form class="form-horizontal" method="post" action="index.php">
			
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
			<center><img width="50%" src="images/iah.png"></center>
		</div> 
				<div class="leftcont">
				<h3 class="news"><center><strong>Yahtzee Rules</h3></center></strong>
				<p class="text4">
					
				The objective of YAHTZEE is to get as many points as possible by rolling five dice and getting certain combinations of dice.<br>

				<center><strong>Gameplay</strong> <br></center>


				In each turn a player may throw the dice up to three times. A player doesn't have to roll all five dice on the second and third throw of a round, he may put as many dice as he wants to the side and only throw the ones that don't have the numbers he's trying to get. For example, a player throws and gets 1,3,3,4,6. He decides he want to try for the large straight, 1,2,3,4,5. So, he puts 1,3,4 to the side and only throws 3 and 6 again, hoping to get 2 and 5.<br>
				In this game you click on the dice you want to keep. They will be moved down and will not be thrown the next time you press the 'Roll Dice' button. If you decide after the second throw in a turn that you don't want to keep the same dice before the third throw then you can click them again and they will move back to the table and be thrown in the third throw.<br>
				<br>
			    <center> <strong>Upper section combinations</strong><br></center>

				<strong>Ones:</strong> Get as many ones as possible.<br>
				<strong>Twos:</strong> Get as many twos as possible.<br>
				<strong>Threes:</strong> Get as many threes as possible.<br>
				<strong>Fours:</strong> Get as many fours as possible.<br>
				<strong>Fives:</strong> Get as many fives as possible.<br>
				<strong>Sixes:</strong> Get as many sixes as possible.<br>
				<br>
				For the six combinations above the score for each of them is the sum of dice of the right kind. E.g. if you get 1,3,3,3,5 and you choose Threes you will get 3*3 = 9 points. The sum of all the above combinations is calculated and if it is 63 or more, the player will get a bonus of 35 points. On average a player needs three of each to reach 63, but it is not required to get three of each exactly, it is perfectly OK to have five sixes, and zero ones for example, as long as the sum is 63 or more the bonus will be awarded.<br>
				<br>
				<center><strong>Lower section combinations</strong><br></center>

				<strong>Three of a kind:</strong> Get three dice with the same number. Points are the sum all dice (not just the three of a kind).<br>
				<strong>Four of a kind:</strong> Get four dice with the same number. Points are the sum all dice (not just the four of a kind).<br>
				<strong>Full house:</strong> Get three of a kind and a pair, e.g. 1,1,3,3,3 or 3,3,3,6,6. Scores 25 points.<br>
				<strong>Small straight:</strong> Get four sequential dice, 1,2,3,4 or 2,3,4,5 or 3,4,5,6. Scores 30 points.<br>
				<strong>Large straight:</strong> Get five sequential dice, 1,2,3,4,5 or 2,3,4,5,6. Scores 40 points.<br>
				<strong>Chance:</strong> You can put anything into chance, it's basically like a garbage can when you don't have anything else you can use the dice for. The score is simply the sum of the dice.<br>
				<strong>YAHTZEE:</strong> Five of a kind. Scores 50 points. You can optionally get multiple Yahtzees, see below for details.<br>
				<br>
				<center><strong>Strategy tips</strong><br></center>
				Try to get the bonus. Focus on getting good throws with fives and sixes, then it won't matter if you put 0 in the ones or twos. You can always put in 0 for a combination if you don't have it, even if you have some other combination. E.g. if you had 2,3,4,5,6 and the only things you had left were Ones and Sixes, then it would be better to put 0 in Ones than to put only 6 in Sixes.<br><br>
				<center><strong>Maximum score</strong><br></center>
				The maximum possible score without multiple Yahtzees is 375, and you would get that by getting 5 ones (5), 5 twos (10), 5 threes (15), 5 fours (20), 5 fives (25), 5 sixes (30), get the bonus points (35), five sixes (30) for three of a kind, five sixes (30) for four of a kind, get a full house (25), get a small straight (30), get a large straight (40), five sixes for chance (30), get a YAHTZEE (50). 5 + 10 + 15 + 20 + 25 + 30 + 35 + 30 + 30 + 25 + 30 + 40 + 30 + 50 = 375!<br><br>
				<center><strong>YAHTZEE vs. YATZY</strong><br><center>
				In Scandinavia this game is called YATZY and has different rules, scoring and combinations. If you're from Denmark, Sweden or Iceland and are playing this game and thinking there's something wrong with it, then no, there's nothing wrong, they are just different rules. Check <strong>Wikipedia </strong>for a detailed list of the differences between the two games.
				Anyway, I hope you enjoy the game. If you have any questions or comments, send them to <strong>admin@cardgames.io.</strong>
				<center><strong>Back to game</strong><br></center><br>
				

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