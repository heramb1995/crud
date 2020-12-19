<?php
	$content  = $_REQUEST['content'];
	$category = $_REQUEST['category'];
	$id       = $_REQUEST['id'];
	$con = mysqli_connect("localhost","root","","herambdb");
	$query ="UPDATE blogs SET content='.$content.',category='.$category.' WHERE blog_id=$id";
	mysqli_query($con,$query) or die(mysqli_error($con));
	header("location:loggedIn.php?msg=Updated Successfully..");
?>