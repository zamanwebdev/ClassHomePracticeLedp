<?php
	require_once "../classes/Blog.php";
	$blog = new Blog();
	$result = '';
	if (isset($_POST['btn'])){
	    $result = $blog->addBlog();
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-lg-8">
			<?php if ($result) { ?>
				<h3 class="text-success text-center"><?php echo $result; ?></h3>
			<?php } ?>
				<div class="card">
					<div class="card-header">
						<span class="h3">Add Blog</span>
						<a href="index.php" class="btn btn-link float-right">Go Back</a>
					</div>
					<div class="card-body">
						<form action="" method="post" enctype="multipart/form-data">
						  <div class="form-group">
						    <label>Blog Title</label>
						    <input type="text" name="title" class="form-control" placeholder="Enter Blog Title">
						  </div>
						  <div class="form-group">
						    <label>Blog Description</label>
						    <textarea name="description" class="form-control" rows="10"></textarea>
						  </div>
						  <div class="form-group">
						    <label>Blog Author Name</label>
						    <input type="text" name="author" class="form-control"> 
						  </div>
						  <div class="form-group">
						    <label>Blog Image</label>
						    <input type="file" name="image" class="form-control-file"> 
						  </div>
						  <div class="form-group">
						    <label>Publication Status</label>
						    <select class="form-control" name="status">
						    	<option value="">--Select Publication Status--</option>
						    	<option value="1">--Publish--</option>
						    	<option value="0">--Unpublish--</option>
						    </select>
						  </div>
						  <button type="submit" name="btn" class="btn btn-primary">Add Blog</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	

<script src="../js/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="../js/popper.min.js" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>