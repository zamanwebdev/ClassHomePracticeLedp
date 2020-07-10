<?php
	require_once "../classes/Blog.php";
	$blog = new Blog();
	$result = $blog->viewAllBlog();
	
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
			<div class="col-lg-10">
				<div class="card">
					<div class="card-header">
						<span class="h3">Blog</span>
						<a href="add-blog.php" class="btn btn-outline-primary btn-sm float-right">+</a>
					</div>
					<div class="card-body">
						<table class="table">
							<tr>
								<th>Sl.</th>
								<th>Blog Title</th>
								<th>Blog Description</th>
								<th>Blog Author</th>
								<th>Blog Image</th>
								<th>Publication Status</th>
								<th>Action</th>
							</tr>
							<?php $i = 1; while($blogs = mysqli_fetch_assoc($result)){?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo $blogs['title'];?></td>
								<td><?php echo $blogs['description'];?></td>
								<td><?php echo $blogs['author'];?></td>
								<td> <img src="<?php echo $blogs['file'];?>" width="100" ></td>
								<td><?php echo $blogs['status']==1 ? 'Published':'Unpublish';?></td>
								<td>
									<a href="edit-blog.php?id=<?php echo $blogs['id'];?>" class="btn btn-info btn-sm">Edit</a>
									<a href="" class="btn btn-danger btn-sm">Delete</a>
								</td>
							</tr>
							<?php }?>
						</table>
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