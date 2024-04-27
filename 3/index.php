<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
		$test = "Daniel";

		echo $test . "<br>";


		function myFunction() {
			$localVar = "localvar";
			
			global $test; //get access to global scope
			$GLOBALS['test']; //alternative global scope access
			echo "global var test in function doesnt work" . $test;
			return $localVar;
		}
		function withStaticFun() {
			static $staticVar = 0;
			$staticVar++;

			return $staticVar . "<br>";
		}

		echo myFunction();
		echo withStaticFun();
		echo withStaticFun();
		echo $localVar;
	?>
</body>
</html>