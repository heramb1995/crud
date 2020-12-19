<?php
	if(isset($_POST["submit"])){
	$uname = $_POST["username"];
	$pass  = $_POST["password"]; 
	$con = mysqli_connect("localhost","root","","herambdb");
	$query = "select * from auth where username='".$uname."' and password='".$pass."'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	
	if (mysqli_num_rows($result) == 1) {
		echo header("location:loggedIn.php?msg=logged in successfully...");
	} else {
		echo "Fail";
	}
}

?>