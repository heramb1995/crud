<?php
	$id      = $_REQUEST['id'];
	$con     = mysqli_connect("localhost","root","","herambdb");
	$query   = "select * from blogs where blog_id=$id";
	$result  = mysqli_query($con,$query);
	$result1 = mysqli_fetch_assoc($result); 
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Content</th>
	<th>Written on</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $result1['content']; ?></td>
        <td><?php echo $result1['created_on'];?></td>
      </tr>
    </tbody>
  </table>
<a href="loggedIn.php" class="btn btn-success">Back</a>