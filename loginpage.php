<?php

	session_start();
	if (isset($_POST['do_login'])) {
	
	

    $servername = "localhost";
	$username = "root";
	$password = "";
	$db="tabbib";
	$conn = mysqli_connect($servername, $username, $password,$db);
	

	$email = ($_POST['email']);
	$password = ($_POST['password']);
	//echo " $email, $password";
    $select_data=mysqli_query($conn,"select * from users where email='$email' and password='$password'") or die("not executed");

 if($row=mysqli_fetch_array($select_data))
     {
     $_SESSION['email']=$row['email'];
     echo "success";
   //  header("Location: http://localhost:80/tabbib/pages/product.html");
     }
     else
    {
    echo "fail";
    }
    exit();
	
		
}	


?>