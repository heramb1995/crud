<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php
	$id      = $_REQUEST['id'];
	$con     = mysqli_connect("localhost","root","","herambdb");
	$query   = "select * from blogs where blog_id=$id";
	$result  = mysqli_query($con,$query);
	$result1 = mysqli_fetch_assoc($result); 
?>

	<form action="update.php" method="post" class="form-group">
		<input type="hidden" value="<?php echo $id; ?>" name="id">
        	Content:
			<div>
				<textarea style="width:700px;" name="content">
					<?php echo $result1['content']; ?>
				</textarea>
			</div><br>
        		Created on
			<div>
				<?php echo $result1['created_on'];?>
			</div>
			<div>
				<input type="submit" value="Update" class="btn btn-success">
				<a href="loggedIn.php" class="btn btn-danger">Back</a>
			</div>
	</form>