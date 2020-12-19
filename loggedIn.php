<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<?php
	$con = mysqli_connect("localhost","root","","herambdb");
	$query = "select * from blogs";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	$result1 = mysqli_fetch_assoc($result);

	
	if (isset($_GET['pageno'])) {
    	$pageno = $_GET['pageno'];
	} else {
    	$pageno = 1;
	}

	$no_of_records_per_page = 3;
	$offset = ($pageno-1) * $no_of_records_per_page;

	$total_pages_sql = "SELECT COUNT(*) FROM blogs";
	$result2 = mysqli_query($con,$total_pages_sql);
	$total_rows = mysqli_fetch_array($result2)[0];
	$total_pages = ceil($total_rows / $no_of_records_per_page); 

	$sql = "SELECT * FROM blogs LIMIT $offset, $no_of_records_per_page"; 
	mysqli_query($con,$sql);

?>

<div class="container">
<div class="alert alert-success"><?php if(isset($msg)){
		$msg = $_REQUEST['msg']; echo $msg; }?></div>
<script>$(".alert").fadeOut(1100);</script>
  <h2>Blogs</h2>
              <div class="pull-right">
		<form method="post" action="getPost.php"> 
		Sort by
			<select name="category">
				<option value="travel">travel</option>
				<option value="music">music</option>
				<option value="sports">sports</option>
				<option value="language">language</option>
			</select>
		<input type="submit" value="Search">
		</form>
		</div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Content</th>
	<th>Written on</th>
        <th>Action</th>
      </tr>
    </thead>
	<?php $id = $result1['blog_id']; ?>
    <tbody>
<?php foreach($result as $value){ ?>
      <tr>
        	<td><?php echo $value['content']; ?></td>
        	<td><?php echo $value['created_on']; ?></td>
		<td>
			<a href="add.php" class="btn btn-info">Create</a>
			<a href="view.php?id=<?php echo $value['blog_id']; ?>" class="btn btn-success">View</a>
			<a href="edit.php?id=<?php echo $value['blog_id']; ?>" class="btn btn-info">Edit</a>
			<a href="delete.php?id=<?php echo $value['blog_id']; ?>" class="btn btn-danger">Delete</a>
		</td>
      </tr>
<?php } ?>
    </tbody>
  </table>
<ul class="pagination">
    <li><a href="?pageno=1">First</a></li>
    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
    </li>
    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
    </li>
    <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
</ul>
</div>