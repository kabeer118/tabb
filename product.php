<?php
$search_value= $_POST["InputSearch"];
$servername = "localhost";
	$username = "root";
	$password = "";
	$db="tabbib";
	$conn = mysqli_connect($servername, $username, $password,$db) or die("connection not established");
	$sql ="SELECT * FROM products WHERE name LIKE '%{search_value}%'";
	$result=mysqli_query($conn,$sql) or die("sql query failed");
	$output="";
	if (mysqli_num_rows($result)>0) {
		while ($row =mysqli_fetch_assoc($result)) {
			
			mysqli_close($conn);
			echo $output;
		}
		}
		else{
			echo "No Record Found";
		}
	}



  ?>