<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	build-in functions

	<?php 
		$string = "some String";
		echo strlen($string) . "<br>";
		echo strpos($string, "g", ) . "<br>";
		echo str_replace("some", "exceptional", $string) . "<br>";
		echo strtolower($string) . "<br>";
		echo strtoupper($string) . "<br>";
		echo substr($string, 2 ,2) . "<br>";
		echo substr($string, 2 ,-2) . "<br>";
		echo print_r(explode( " ",$string )) . "<br>";

		$number = -5.5;
		echo abs($number) . "<br>";
		echo round($number) . "<br>";
		echo pow(3,2) . "<br>";
		echo sqrt(9) . "<br>";
		echo rand(1, 100) . "<br>";
		
		$array = ["apple", "banana", "orange"];
		$array2 = ["car", "bicycle", "boat"];
		echo is_array($array) . "<br>";
		array_push($array, "kiwi");
		print_r($array);
		array_pop($array);
		print_r($array);
		echo '<br>';
		print_r(array_reverse($array));
		print_r(array_merge($array, $array2));
		echo '<br>'; 	

		$date = "2023-04-20 12:22:33";
		echo date("Y-m-d H:i:s") . "<br>";
		echo time() . "<br>";
		echo strtotime($date) . "<br>";
		


	?>
</body>
</html>