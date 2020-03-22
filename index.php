<?php

$team1 = "Chiefs";
$team1Color = "red";

$team2 = "49ers";
$team2Color = "gold";

$players = [
	'Alex',
	'Andy',
	'Ben',
	'Beverage',
	'Cody',
	'Chuy',
	'Durbin',
	'Endicott',
	'Jeff',
	'Joel',
	'Tony',
	'Wheeler'
];

shuffle($players);

$slots = [];
for($i = 0; $i < 100; $i++){
	
	$slots[] = $players[0];

	$takenOut = array_shift($players);
	$players[] = $takenOut;

}

shuffle($slots);

$numbers = [0,1,2,3,4,5,6,7,8,9];
shuffle($numbers);

?>

<!doctype>
<html>
<head>
	<title>Squares</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div class="squares-wrap">
		<?php

			echo '<h1 style="color: ' . $team1Color . ';">'. $team1 .'</h1>';

			for($i = 0; $i < 11; $i++){

				if($i == 1) shuffle($numbers);
				
				for($j = 0; $j < 11; $j++){
					
					if($i == 0 && $j == 0) echo '<div class="square no-border"></div>';
					if($i == 0 && $j != 0) echo '<div class="number">' . $numbers[$j - 1] . '</div>';
					if($i > 0 && $j == 0) echo '<div class="number side-number">' . $numbers[$i - 1] .'</div>';
					if($i > 0 && $j > 0){
						echo' <div class="square ' . $slots[0] . '">' . $slots[0] . '</div>';
						array_shift($slots);
					}
				}
			}

			echo '<h1 class="team2" style="color: ' . $team2Color . ';">'. $team2 .'</h1>';
		?>
	</div>
</body>
</html>