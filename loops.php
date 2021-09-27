<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loops</title>
</head>
<body>

	<?php 
		//While loop --
		//do...While -- 
		//for loop --
		//foreach

	//While Loop
	echo "<h1> Increment Values from 1 to 10 </h1>";
	$x = 1; //initialize ie. set the starting value
	while ($x <= 10) { //loop as long as $x(variable is less than or equal to 10)
		echo "This is no. $x <br>"; //display the result
		$x++; // increment the value by 1.
	}

	echo "<br>";

	//While Loop
	echo "<h1> Decrement Values from 10 to 1</h1>";
	$x = 10; //initialize ie. set the starting value
	while ($x >= 1) { //loop as long as $x(variable is less than or equal to 10)
		echo "This is no. $x <br>"; //display the result
		$x--; // increment the value by 1.
	}

	echo "<br>";
	echo "<h1> Even Numbers from 0 to 20</h1>";

	$y = 0;

	while ($y <= 20) {
		// code...
		if ($y%2==0) {
			// code...
			echo "$y is an Even Number <br>";
		}

		$y++;
	}

	 ?>



</body>
</html>