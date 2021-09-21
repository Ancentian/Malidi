<?php

/*
If statement
if(condition){
	code to be executed if the condition is true
}
*/
$age = 3;

if ($age >= 4) {
	echo "She Can go to School";
}

echo "<br>";

/* The if...else...Statement

if(condition){
	code to be executed if the condition is true
} else{
	code to be executed if the condition is false
}

*/
if ($age >= 4) {
	echo "She Can go to School";
} else {
	echo "She can not go to school";
}

/*
If...elseif...else Statement

if(condition){
	code to be executed if the condition is true
} elseif (condition) {
	code to be executed if the first condition is false and the 2nd condition is true
}else{
	code to be executed if all conditions are false
}
*/

$time = 21;

if ($time <= 21) {
	echo "Good Evening Malidi";

} elseif ($time >= 21) {
	echo "Good Night Malidi";
}else {
	
	echo "Its Still Daytime";
}

?>