<?php 

// var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstname = htmlspecialchars($_POST["firstname"]);
	$lastname = htmlspecialchars($_POST["lastname"]);
	$favouritepet = htmlspecialchars($_POST["favouritepet"]);

	if (empty($firstname)) {
		header("Location: ../index.php");
		exit();
	}

	echo "These are the data, that the user sumbitted";
	echo "<br>";
	echo $firstname;
	echo "<br>";
	echo $lastname;
	echo "<br>";
	echo $favouritepet;

	header("Location: ../index.php");
}
else {
	header("Location: ../index.php");
}