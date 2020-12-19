<?php
	$id    = $_REQUEST['id']; 
	$con   = mysqli_connect("localhost","root","","herambdb");
	$query = "delete from blogs where blog_id=$id";
	mysqli_query($con,$query);
	header("location:loggedIn.php?msg=Record deleted successfully...");
?>