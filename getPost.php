<?php
		
		$category = $_REQUEST['category'];
		$con      = mysqli_connect("localhost","root","","herambdb");	
		$query    = "select * from blogs where category='".$category."'";
		$result   = mysqli_query($con,$query) or die(mysqli_error($con));
		$result1  = mysqli_fetch_assoc($result);	
?>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Content</th>
	<th>Written on</th>
        <th>Action</th>
      </tr>
    </thead>
	
    <tbody>

    </tbody>
  </table>
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
  