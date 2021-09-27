<?php

	//block of statements 

	/*

	function - keyword salutations() - functionName{ function_Name, functionName, 
	//set of statements
	}

	*/

	echo "<h1> Functions</h1>";

	function sayHello()
	{
		echo "Good Morning Class";
	}

	sayHello();

	echo "<br>";

	//adding Numbers
	function addNumbers(){
		echo (20+30);
	}

	addNumbers();

	//Arguments in form of variables

	/*
	function addTwoNumbers($num1, $num2)
	{
		//statements
	}

	//call the function e.g. addTwonumbers(20, 30)
	*/

	echo "<br>";
	echo "<h1>Functions with Variables</h1>";

	function addTwoNumbers($num1, $num2)
	{
		echo "<br>";
		echo $num1+$num2;
	}

	//call the function
	addTwoNumbers(50,570);
	addTwoNumbers(122,57);
	addTwoNumbers(458,114);

	echo "<br>";

	//String

	function sayMyName($name){
		echo "<br>";
		echo "Hello, $name";
	}

	sayMyName("Cyber Crafts");
	sayMyName("MalidiFour");
	sayMyName("Allan");

	//45,56,90,65,78,49

	//create a function that will receive the above --- of marks nad caculate their average

	//create an array
	$marks = array(45,56,90,65,78,49);

	function findAverageMarks($marks)
	{
		$countMarks = count($marks);

		//print($countMarks);

		$sum = 0;
		for ($i=0; $i < $countMarks; $i++) { 
			$sum+=$marks[$i]; // $sum = $sum + $marks[$i]
		}

		//calculate average
		$average = $sum/$countMarks;

		//print_r($average);

		//echo the Average Mark.
		//echo "The Average is $average";
		return $average;
	}

	echo "<br";

	$avg = findAverageMarks($marks);
	echo "The Average Marks is".$avg;



	





	?>
