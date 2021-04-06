<?php

$servername = "localhost";
	$username = "root";
	$password = "";
	$db="tabbib";
	$conn = mysqli_connect($servername, $username, $password,$db);

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$CPassword=$_POST['CPassword'];
	//echo "$name , $email , $phone , $password , $CPassword";

	$sql = "INSERT INTO `users`( `name`, `email`, `phone`, `password`,`CPassword`) 
	VALUES ('$name','$email','$phone','$password','$CPassword')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));

		
		}
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>
 