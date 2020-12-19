<?php
	$content  = $_REQUEST['content'];
	$category = $_REQUEST['category'];
	$con = mysqli_connect("localhost","root","","herambdb");
	$query = "insert into blogs(content,category) values('".$content."','".$category."')";
	mysqli_query($con,$query);
	header("location:loggedIn.php");
?>