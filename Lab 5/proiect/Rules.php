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
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<link href='http://fonts.googleapis.com/css?family=Zeyada' rel='stylesheet' type='text/css'>
        <script src="lib/jquery-1.7.1.min.js" type="text/javascript" ></script>
		<link href="css/yahtzee.css" type="text/css" rel="stylesheet" media="screen, projection" />
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
								    <form class="form-horizontal" method="post" action="Rules.php">
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
				<div class="col col-md-10" id="game">
					<div class="row">
						<div class="col col-md-2"></div>
						<div class="col col-md-6">
			<div style="font-size: 12px; margin-left: -50px; margin-top: 350px; ">
				<div class="dice empty" id="dice1"></div>
				<div class="dice empty" id="dice2"></div>
				<div class="dice empty" id="dice3"></div>
				<div class="dice empty" id="dice4"></div>
				<div class="dice empty" id="dice5"></div>
				<div class="dice empty" id="dice6"></div>
				<div class="clear"></div>
				</div>
				<div style="font-size: 12px;margin-left: 60px; margin-top: 350px; ">
				<button class="btn btn-warning" href="javascript:void(0)" id="launchBtn">Roll Dice</button><br>
			</div>
			<div style="width: 55%;font-size: 11px;float: left;  margin-left: 405px;margin-top: -437px;">
				<div class="col ">
							<table class="table table-bordered table-hover table-responsive" id="tab">
						<tr>
							<th style="text-align: center;">Combination</th>
							<th style="text-align: center;">Score</th>
						</tr>
					<tbody>		
							<tr>
								<td>
									<span id="oneLabel">
										Ones
									</span>
								</td>
								<td style="text-align: center;">
									<span id="oneScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="oneKeep" data-id="one" class="keep">Keep</a>
									<a href="javascript:void(0)"id="oneTrash" data-id="one" class="trash">Trash</a>
								</td>

							</tr>
						
							<tr>
								<td>
									<span id="twoLabel">
										Twos
									</span>
								</td>
								<td style="text-align: center;">
									<span id="twoScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="twoKeep" data-id="two" class="keep">Keep</a>
									<a href="javascript:void(0)"id="twoTrash" data-id="two" class="trash">Trash</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="threeLabel">
										Threes
									</span>
								</td>
								<td style="text-align: center;">
									<span id="threeScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="threeKeep" data-id="three" class="keep">Keep</a>
									<a href="javascript:void(0)"id="threeTrash" data-id="three" class="trash">Trash</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="fourLabel">
										Fours
									</span>
								</td>
								<td style="text-align: center;">
									<span id="fourScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="fourKeep" data-id="four" class="keep">Keep</a>
									<a href="javascript:void(0)"id="fourTrash" data-id="four" class="trash">Trash</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="fiveLabel">
										Fives
									</span>
								</td>
								<td style="text-align: center;">
									<span id="fiveScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="fiveKeep" data-id="five" class="keep">Keep</a>
									<a href="javascript:void(0)"id="fiveTrash" data-id="five" class="trash">Trash</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="sixLabel">
										Sixes
									</span>
								</td>
								<td style="text-align: center;">
									<span id="sixScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="sixKeep" data-id="six" class="keep">Keep</a>
									<a href="javascript:void(0)"id="sixTrash" data-id="six" class="trash">Trash</a>
								</td>
							</tr>
							<tr>
								<td>
									<span id="upper_score">
										Sum
									</span>
								</td>
								<td style="text-align: center; color: blue; ">
									<span id="upperScore" class="score">&nbsp;</span>
								</td>
								<td></td>
							</tr>
							<tr>
								<td>
									<span id="bonusscore">
										Bonus
									</span>
								</td>
								<td style="text-align: center;color: blue; ">
									<span id="bonus" class="score">&nbsp;</span>
								</td>
								<td></td>
							</tr>
					</tbody>
				</table>
				</div>
				</div>
				<div style="width: 55%;font-size: 11px;float: left; margin-left: 405px; margin-top: -41px; ">
				<div class="col ">
							<table class="table table-bordered table-hover table-responsive" id="tab">
					<thead>
						<tr>
							<th style="text-align: center;">Combination</th>
							<th style="text-align: center;">Score</th>
						</tr>
					</thead>
					<tbody>
						
							<tr>
								<td>
									<span id="threeOfAKindLabel">
										Three of a kind
									</span>
								</td>
								<td style="text-align: center;">
									<span id="threeOfAKindScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="threeOfAKindKeep" data-id="threeOfAKind" class="keep">Keep</a>
									<a href="javascript:void(0)"id="threeOfAKindTrash" data-id="threeOfAKind" class="trash">Trash</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="fourOfAKindLabel">
										Four of a kind
									</span>
								</td>

								<td style="text-align: center;">
									<span id="fourOfAKindScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="fourOfAKindKeep" data-id="fourOfAKind" class="keep">Keep</a>
									<a href="javascript:void(0)"id="fourOfAKindTrash" data-id="fourOfAKind" class="trash">Trash</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="fullLabel">
										Full House
									</span>
								</td>
								<td style="text-align: center;">
									<span id="fullScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="fullKeep" data-id="full" class="keep">Keep</a>
									<a href="javascript:void(0)"id="fullTrash" data-id="full" class="trash">Trash</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="smallStraightLabel">
										Small straight
									</span>
								</td>
								<td style="text-align: center;">
									<span id="smallStraightScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="smallStraightKeep" data-id="smallStraight" class="keep">Keep</a>
									<a href="javascript:void(0)"id="smallStraightTrash" data-id="smallStraight" class="trash">Trash</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="largeStraightLabel">
										Large straight
									</span>
								</td>
								<td style="text-align: center;">
									<span id="largeStraightScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="largeStraightKeep" data-id="largeStraight" class="keep">Keep</a>
									<a href="javascript:void(0)"id="largeStraightTrash" data-id="largeStraight" class="trash">Trash</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="yahtzeeLabel">
										YAHTZEE
									</span>
								</td>
								<td style="text-align: center;">
									<span id="yahtzeeScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="yahtzeeKeep" data-id="yahtzee" class="keep">Keep</a>
									<a href="javascript:void(0)"id="yahtzeeTrash" data-id="yahtzee" class="trash">Trash</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<span id="luckLabel">
										Chance
									</span>
								</td>
								<td style="text-align: center;">
									<span id="luckScore" class="score">&nbsp;</span>
								</td>
								<td>
									<a href="javascript:void(0)"id="luckKeep" data-id="luck" class="keep">Keep</a>
									<a href="javascript:void(0)"id="luckTrash" data-id="luck" class="trash">Trash</a>
								</td>
							</tr>
							<tr>
								<td>
									<span id="lower_score">
										Sum
									</span>
								</td>
								<td style="text-align: center;color: blue;">
									<span id="lowerScore" class="score">&nbsp;</span>
								</td>
								<td></td>
							</tr>
							<tr>
								<td>
									<span id="total_score">
										TOTAL SCORE
									</span>
								</td>
								<td style="text-align: center; color: blue;">
									<span id="totalScore" class="score">&nbsp;</span>
								</td>
							</tr>
						
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div> <!-- End -->

<script src="js/yahtzee.js" type="text/javascript" ></script>
<script type="text/javascript">
			$(document).ready(function () {
				$(".dice").click(function(evt) {
					if( $(this).hasClass("selected") )
						$(this).removeClass("selected");
					else
						$(this).addClass("selected");
				});
				
				$(".keep").click(function(evt) {
					console.log("Keeping " + $(this).attr('data-id'));
					Yahtzee.keep($(this).attr('data-id'));
				});
				
				$(".trash").click(function(evt) {
					console.log("Trashing " + $(this).attr('data-id'));
					Yahtzee.trash($(this).attr('data-id'));
				});
				
				$("#launchBtn").click(function() {
					Yahtzee.shuffle();
					Yahtzee.findCombinaisons();
					if( Yahtzee.launch < 3 )
						Yahtzee.findPossibilities();
				});
			});
		</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>