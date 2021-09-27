<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>For Loop</title>
</head>
<body>

	<?php 

	// for loop executes

	//Count from 5 to 0 

	for ($i=5; $i >= 0; $i--) { 
		// code...
		echo "$i <br>";
	}


		//Foreach Loop

	$array = array("veges","fruits","furniture","salt","knife");

	foreach ($array as $value) {
		// code...
		echo "$value <br>";
	}

	$counties = array("KIsumu", "kiambu ", "Nakuru", "Machakos", "Nyeri");

	echo "No of Items in the array ".count($counties);

	//echo "County ".$counties[1];

	$no = count($counties);

	for($i=0;$i<$no;$i++){
		echo "Counties".$counties[$i]."<br";
	}

		

	 ?>

</body>
</html>