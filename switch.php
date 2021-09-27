<?php

//SWITCH STATEMENTS

$color = "yellow";

// switch (variable) {
// 	case 'value': if the block of code associated to that that case is matched then that case is executed.
// 		echo
// 		break;
	
// 	default:
// 		// code...
// 		break;
// }

switch ($color) {
	case 'white':
		echo "My favorite color is White";
		break;

	case 'blue':
		echo "My favorite color is Blue";
		break;

	case 'red':
		echo "My favorite color is Red";
		break;

	default:
		echo "Your favorite clor is neither White, Blue nor Red";
		//break;
}


?>