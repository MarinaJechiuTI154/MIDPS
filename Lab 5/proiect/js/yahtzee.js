//are loc schimbul de biti
var SMALL_STRAIGHT_MASK1 = (1 << 0) + (1 << 1) + (1 << 2) + (1 << 3);
var SMALL_STRAIGHT_MASK2 = (1 << 1) + (1 << 2) + (1 << 3) + (1 << 4);
var SMALL_STRAIGHT_MASK3 = (1 << 2) + (1 << 3) + (1 << 4) + (1 << 5);
var LARGE_STRAIGHT_MASK1 = (1 << 0) + (1 << 1) + (1 << 2) + (1 << 3) + (1 << 4);
var LARGE_STRAIGHT_MASK2 = (1 << 1) + (1 << 2) + (1 << 3) + (1 << 4) + (1 << 5);
var INCOMPLETE_STRAIGHT_MASK1 = (1 << 0) + (1 << 1) + (1 << 2);
var INCOMPLETE_STRAIGHT_MASK2 = (1 << 1) + (1 << 2) + (1 << 3);
var INCOMPLETE_STRAIGHT_MASK3 = (1 << 2) + (1 << 3) + (1 << 4);
var INCOMPLETE_STRAIGHT_MASK4 = (1 << 3) + (1 << 4) + (1 << 5);
Yahtzee = {	
		launch : 0,
		dices : [],
		combinaisons : [],
		pair : false,
		doublePair : false,
		three_of_a_kind : false,
		four_of_a_kind : false,
		full : false,
		yahtzee : false,
		small_straight : false,
		large_straight : false,
		total_score : false,
		straight : 0,
		scoreUp : 0,
		scoreDown: 0,
		keptCombinaisons: [],
		
		clear: function(all) {
			if( all )
				Yahtzee.launch = 0;
			Yahtzee.pair = false;
			Yahtzee.doublePair = false;
			Yahtzee.three_of_a_kind = false;
			Yahtzee.four_of_a_kind = false;
			Yahtzee.full = false;
			Yahtzee.yahtzee = false;
			Yahtzee.small_straight = false;
			Yahtzee.large_straight = false;
			Yahtzee.total_score = false;
			Yahtzee.straight = 0;
			
			if( all )
				//reseteaza zarurile 
				for( var i = 0; i < 5; i++ ) {
					Yahtzee.dices[i] = 0;
					$("#dice" + (i+1)).removeClass().addClass("dice").addClass("empty");
				}
			
			for( var i = 0; i < 6; i++ ) {
				Yahtzee.combinaisons[i] = 0;
			}
			
			$(".possibility").each(function(incr, elt) {
				$(elt).removeClass("possibility");
				$(elt).empty();
			});
			//sterge keep dupa selectare
			$(".keep").each(function(incr, elt) {
				$(elt).attr('style', 'visibility:hidden;');
			})
			// sterge tash dupa selectare
			$(".trash").each(function(incr, elt) {
				$(elt).attr('style', 'visibility:hidden;');
			})
		},
		
		shuffle: function() {
			// nu permite sa arunci zarurile mai multe de 3 ori
			if($("#launchBtn").hasClass("disabled") )
				return false;
			
			if( Yahtzee.launch == 3 )
				Yahtzee.clear(true);
			else
				Yahtzee.clear(false);
			
			Yahtzee.launch++;
			// functia pentru aruncarea random a zarurilor
			for( var i = 0; i < 5; i++ ) {
				var html = $("#dice" + (i+1));
				if( !html.hasClass("selected") ) {
					var value = Math.round(5*Math.random());
					Yahtzee.dices[i] = value;
					html.removeClass().addClass("dice").addClass("face" + (value + 1));
				}
			}
			// conditia ca ai voie doar de 3 ori sa arunci zarurile
			$("#launch").html(Yahtzee.launch);
			if( Yahtzee.launch == 3 )
				$("#launchBtn").addClass("disabled");
		},
		
		findCombinaisons: function() {
			for( var i = 0; i < 5; i++) {
				Yahtzee.combinaisons[Yahtzee.dices[i]]++;
				Yahtzee.straight = Yahtzee.straight | (1 << Yahtzee.dices[i]);
			}
			
			for( var i = 0; i < 6; i++ ) {
				var value = Yahtzee.combinaisons[i];
				switch( value ) {
				case 2:
					if( Yahtzee.pair )
						Yahtzee.doublePair = true;
					Yahtzee.pair = true;
					break;
				case 5:
					Yahtzee.yahtzee = true;
				case 4:
					Yahtzee.four_of_a_kind = true;
				case 3:
					Yahtzee.three_of_a_kind = true;
					break;
				}
				
			}
			
			Yahtzee.full = Yahtzee.pair && Yahtzee.three_of_a_kind && !Yahtzee.doublePair;
			
			if( (Yahtzee.straight & LARGE_STRAIGHT_MASK1) == LARGE_STRAIGHT_MASK1 ) {
				Yahtzee.large_straight = true;		
				Yahtzee.small_straight = true;		
			} else if( (Yahtzee.straight & LARGE_STRAIGHT_MASK2) == LARGE_STRAIGHT_MASK2 ) {
				Yahtzee.large_straight = true;
				Yahtzee.small_straight = true;
			} else if( (Yahtzee.straight & SMALL_STRAIGHT_MASK1) == SMALL_STRAIGHT_MASK1 ) {
				Yahtzee.small_straight = true;		
			} else if( (Yahtzee.straight & SMALL_STRAIGHT_MASK2) == SMALL_STRAIGHT_MASK2  ) {
				Yahtzee.small_straight = true;
			} else if( (Yahtzee.straight & SMALL_STRAIGHT_MASK3) == SMALL_STRAIGHT_MASK3  ) {
				Yahtzee.small_straight = true;		
			}
			
			if( Yahtzee.three_of_a_kind && Yahtzee.keptCombinaisons.indexOf("threeOfAKind") == -1 )
				$("#threeOfAKindKeep").attr('style', 'visibility:visible;');
			if( Yahtzee.four_of_a_kind && Yahtzee.keptCombinaisons.indexOf("fourOfAKind") == -1 )
				$("#fourOfAKindKeep").attr('style', 'visibility:visible;');
			if( Yahtzee.full && Yahtzee.keptCombinaisons.indexOf("full") == -1 )
				$("#fullKeep").attr('style', 'visibility:visible;');
			if( Yahtzee.yahtzee && Yahtzee.keptCombinaisons.indexOf("yahtzee") == -1 )
				$("#yahtzeeKeep").attr('style', 'visibility:visible;');
			if( Yahtzee.small_straight && Yahtzee.keptCombinaisons.indexOf("smallStraight") == -1 )
				$("#smallStraightKeep").attr('style', 'visibility:visible;');
			if( Yahtzee.large_straight && Yahtzee.keptCombinaisons.indexOf("largeStraight") == -1 )
				$("#largeStraightKeep").attr('style', 'visibility:visible;');
			if( Yahtzee.total_score && Yahtzee.keptCombinaisons.indexOf("total_score ") == -1 )
				$("#total_score ").attr('style', 'visibility:visible;');
			
			if( Yahtzee.combinaisons[0] > 0 && Yahtzee.keptCombinaisons.indexOf("one") == -1 )
				$("#oneKeep").attr('style', 'visibility:visible;');
			if( Yahtzee.combinaisons[1] > 0  && Yahtzee.keptCombinaisons.indexOf("two") == -1 )
				$("#twoKeep").attr('style', 'visibility:visible;');
			if( Yahtzee.combinaisons[2] > 0  && Yahtzee.keptCombinaisons.indexOf("three") == -1 )
				$("#threeKeep").attr('style', 'visibility:visible;');
			if( Yahtzee.combinaisons[3] > 0  && Yahtzee.keptCombinaisons.indexOf("four") == -1 )
				$("#fourKeep").attr('style', 'visibility:visible;');
			if( Yahtzee.combinaisons[4] > 0  && Yahtzee.keptCombinaisons.indexOf("five") == -1 )
				$("#fiveKeep").attr('style', 'visibility:visible;');
			if( Yahtzee.combinaisons[5] > 0  && Yahtzee.keptCombinaisons.indexOf("six") == -1 )
				$("#sixKeep").attr('style', 'visibility:visible;');
			
			if( Yahtzee.keptCombinaisons.indexOf("luck") == -1 )
				$("#luckKeep").attr('style', 'visibility:visible;');
			
			$(".trash").each(function(incr, elt){
				var html = $(elt)
				if( Yahtzee.keptCombinaisons.indexOf(html.attr('data-id')) == -1 )
					html.attr('style', 'visibility:visible;');
			});
		},
		
		keep: function(id) {
			var score = 0;
			switch(id) {
			case "one" :
				score = Yahtzee.combinaisons[0] * 1;
				Yahtzee.scoreUp += score;
				break;
			case "two" :
				score = Yahtzee.combinaisons[1] * 2;
				Yahtzee.scoreUp += score;
				break;
			case "three" :
				score = Yahtzee.combinaisons[2] * 3;
				Yahtzee.scoreUp += score;
				break;
			case "four" :
				score = Yahtzee.combinaisons[3] * 4;
				Yahtzee.scoreUp += score;
				break;
			case "five" :
				score = Yahtzee.combinaisons[4] * 5;
				Yahtzee.scoreUp += score;
				break;
			case "six" :
				score = Yahtzee.combinaisons[5] * 6;
				Yahtzee.scoreUp += score;
				break;
			case "threeOfAKind" :
			case "fourOfAKind" :
			case "luck" :
				$.each(Yahtzee.dices, function(index, elt){score += (elt + 1)});
				Yahtzee.scoreDown += score;
				break;
			case "full" :
				score = 25;
				Yahtzee.scoreDown += score;
				break;
			case "smallStraight" :
				score = 30;
				Yahtzee.scoreDown += score;
				break;
			case "largeStraight" :
				score = 40;
				Yahtzee.scoreDown += score;
				break;
			case "yahtzee" :
				score = 50;
				Yahtzee.scoreDown += score;
				break;
			}
			
			$("#" + id + "Score").html(score);
			
			Yahtzee.keptCombinaisons.push(id);
			Yahtzee.clear(true);
			
			if( Yahtzee.keptCombinaisons.length < 13 )
				$("#launchBtn").removeClass("disabled");
			else
				Yahtzee.show_game_over();
		},
		
		trash : function(id) {
			$("#" + id + "Score").html(0).addClass('trashed');
			$("#" + id + "Label").attr('style', 'text-decoration:line-through;');
			Yahtzee.keptCombinaisons.push(id);
			Yahtzee.clear(true);
			if( Yahtzee.keptCombinaisons.length < 13 )
				$("#launchBtn").removeClass("disabled");
			else
				Yahtzee.show_game_over();
		},
		
		show_game_over: function() {
			$("#upperScore").append(Yahtzee.scoreUp);
			if( Yahtzee.scoreUp > 63 ) {
				$("#bonus").append(35);
				Yahtzee.scoreUp += 35;
			} else
				$("#bonus").append(0);
			$("#lowerScore").append(Yahtzee.scoreDown);
			$("#upperScore").append(Yahtzee.upperScore);
			$("#totalScore").append(Yahtzee.scoreDown + Yahtzee.scoreUp);
			<?php
//conectare la baza de date
					$db=mysqli_connect("localhost","root","","yahtzee");
					$txt = @$_SESSION['username'];
					$totalScore=totalScore;
					        $sql="INSERT INTO results(username, score) VALUES('$txt', '$x')"; 
					        mysqli_query($db,$sql);  
					  
					?>
			$("#scorePanel").show();
		}
		
}
