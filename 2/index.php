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
	?>
</body>
</html>