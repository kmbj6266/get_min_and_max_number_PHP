<?php

function get_max ($value)
{
	$max = 0;

	for ($counter = 0; $counter < count($value); $counter ++) 
	{ 
		$current_value = $value[$counter];

		if($counter == 0 OR $max < $current_value)
		{
			$max = $current_value;
		}
	}

	$max = array('max' => $max);
	return $max;
}

function get_min ($value)
{
	$min = 0;

	for ($counter = 0; $counter < count($value); $counter ++) 
	{ 
		$current_value = $value[$counter];

		if($counter == 0 OR $min > $current_value)
		{
			$min = $current_value;
		}
	}

	$min = array('min' => $min);
	return $min;
}

$myarray = array(5,10,15,20,25,30);

echo "My array values are: 5, 10, 15, 20, 25, & 30. "."<br>";

$output1 = get_min($myarray);
$output2 = get_max($myarray);

echo "The minimum number is "; 
foreach ($output1 as $answer1) {
	echo "$answer1"."."."<br>";
}

echo "The maximum number is "; 
foreach ($output2 as $answer2) {
	echo "$answer2".".";
}

?>
