<?php
/*
	Conditional statement 5 types 
	if()
	if else 
	if elseif else 
	nested if  
	switch
*/

	/*$a=50;
	$b=50;
	if($a==$b)
	{
		echo "a is equal to b";
	}

*/

/*
	$a=30;
	$b=40;
	if ($a>$b) {
		echo "a is greater than b";
	}
	else{
		echo "a is less than b";
	}
*/

/*
	$a=20;
	$b=30;
	$c=40;
	if ($a>$b) {
		echo "a is greter than b";
	}
	elseif ($a>$c) {
		echo "a is greter than c";
	}
	elseif ($b>$c) {
		echo "b is greter than c";
	}
	else{
		echo "a is less than b & c";
	}
*/

/*
	$a=20;
	$b=20;
	if ($a<$b) {
		if($a==$b){
			echo "a equal to b";
		}
		else{
			echo "a not equal to b";
		}
	}
	else{
		echo "all condition false";
	}
*/

	switch (20) {
		case "10":
			echo "answer is 10";
			break;
		
		case "20":
			echo "answer is 20";
			break;

		case "30":
			echo "answer is 30";
			break;
		
		default:
			echo "condition is false";
			break;
	}

/*
	Difference between if elseifelse vs switch

	- If condition true when switch break flow: means not check all case & if elseif check all condition
	- As per speed switch fast
	- switch use most of all
*/
 ?>
