<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

	$cars = array("Mercedes", "Isuzu", "Land Rover", "Mazda"); 
	echo "My favorite car is".$cars[0]. " ,".$cars[1]." ,".$cars[2]. ".";

	echo "<br>";

	//ASSOCIATIVE ARRAY

	$age = array("peter" => "25", "mumo" => "20", "Joe" => "30");

	// $age['peter'] => "25";
	// $age['mumo'] => "20";

	echo "Peter is" .$age['peter']. "Years old";

	echo "<br>";

	foreach ($age as $x => $x_value) {
		// code...
		echo "Key =".$x .", Value=". $x_value;
		echo "<br>";

	}

	 ?>

</body>
</html>