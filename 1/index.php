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
		$object = null //initial
	?>
	<p>hi <?php echo $string ?></p>
</body>
</html>