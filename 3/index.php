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


	function myFunction()
	{
		$localVar = "localvar";

		global $test; //get access to global scope
		$GLOBALS['test']; //alternative global scope access
		echo "global var test in function doesnt work" . $test;
		return $localVar;
	}
	function withStaticFun()
	{
		static $staticVar = 0;
		$staticVar++;

		return $staticVar . "<br>";
	}

	echo myFunction();
	echo withStaticFun();
	echo withStaticFun();
	echo $localVar;
	?>
	<hr>
	<!-- constants -->
	<?php
	define("PI", 3.14);
	define("NAME", "Daniel");
	define("IS_TRUE", true);
	echo PI;

	function test()
	{
		echo PI;
	}
	test();
	$name = "danieal";
	echo $name;
	?>
	<!-- loops -->
	<?php
	$test = 5;
	for ($i = 0; $i <= $test; $i++) {
		echo "This is iteration " . $i . "<br>";
	}

	$boolean = true;
	while ($boolean) {
		$boolean = false;
	}
	?>

</body>

</html>