<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<p>This is <?php echo "awesome " ?>a paragraph</p>
	<?php echo "this is also a paragraph";?>
	<?php 
		echo "Hello world!"
	?>

	<?php 
		$name = "Dani kross";
		echo $name;
		//scalar types (1 value)
		$string = "string";
		$int = 1231;
		$float = 2.343;
		$bool = true;
		$test = $name;

		//array type
		$names = array("Daniel", "Bella" ,"Frida" );
		$namesss = ["Daniel2","Bella2","Frida2"];
		
		//Object type
		$object = null; //initial

		// superglobals
		echo $_SERVER["DOCUMENT_ROOT"];
		echo "<br>";
		echo $_SERVER["PHP_SELF"];
		echo "<br>";
		echo $_SERVER["SERVER_NAME"];
		echo "<br>";
		echo $_SERVER["REQUEST_METHOD"];
		
		echo $_GET["name"];
		
		echo "<br>";
		echo $_REQUEST["name"];
		echo "<br>";
		echo $_FILES["name"];
		echo $_COOKIE["name"];
		echo "<br>";
		$_SESSION["username"] = "Krossing";
		echo $_SESSION["username"];
		echo "<br>";
		$_ENV[""];

	?>
	<p>hi <?php echo $string ?></p>
	<hr>
	<?php 
		//string operator
		$a = "hi ";
		$b = "and bye";
		$c = $a . $b;
		echo "c " . $c . "<br>";

		// Arithmetic operator
		echo 1 + 2;
		echo 1 % 2;
		echo 10 ** 3 . "<br>";
		$aa = 2;
		$aa += 4;
		echo $aa;
		// Comparison operator
		$ca = 2;
		$cb = "2";
		if ($ca == $cb) {
			echo "<br> this is true";
		} else {
			echo "<br> this is false";
		}
		//logical operators
		$la = 4;
		$lb = 4;

		$ca = 2;
		$cd = 6;

		if ($la == $lb and $ca == $cd) {
			echo "<br> this with and is true";
		} 
		if ($la == $lb or $ca == $cd) {
			echo "<br> this with or is true";
		} 

		// incrementing-decrementing

		$ia = 1;
		echo "<br>" . ++$ia;
		echo "<br>" . $ia++ . " " . $ia;
		

	?>
	<hr>
	conditions
	<?php 
		$bool = true;
		$a = 1;
		$b = 4;

		$result = match ($a) {
			1,3,5 => "Variable a is 1",
			2 => "Variable a is 2",
			default => "Default",
		};

		echo "<br>result is " . $result . "<br>";

		switch ($a) {
			case 1: echo "The first case is correct";
			break;
			case 3: echo "The second case is correct";
			break;
			default: echo "None of the cases were true";
		}

		if ($a < $b && !$bool) {
			echo "First condition is true";
		}
		else if ($a < $b && !$bool) {
			echo "Second condition is true";
		} else {
			echo "None of the conditions were true!";
		}
	?>
</body>
</html>