<?php
/*
$sensitiveData = "Krossing";
$salt = bin2hex(random_bytes(16));
$pepper = "ASecretPepperString";

echo "<br>" . $salt;

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo "<br>" . $hash;

// -------

$sensitiveData = "Krossing";

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash("sha256", $dataToHash);

echo "<br>";
if ($storedHash === $verificationHash) {
	echo "The data are the same";
	echo "<br>";
	echo $storedHash;
	echo "<br>";
	echo $verificationHash;
} else {
	echo "the data are not the same";
}

*/

// hashing password below

$pwdSignup = "Krossing";
$options = [
	'cost' => 12
];
$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "Krossing";


if (password_verify($pwdLogin, $hashedPwd)) {
	echo "They are the same";
} else {
	echo "They are not the same";
}
