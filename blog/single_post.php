<!--Connecting database to the index file-->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/include/db.php'; ?>
<!--Header-->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/include/header.php'; ?>
<!--Navigation-->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/include/navigation.php'; ?>
<!-- Page Content -->
<div class="container">
	<div class="row">
		<!-- Post Content Column -->
		<div class="col-lg-8">
			
			<?php
			if(isset($_GET['p_id'])){
				$the_post_id = $_GET['p_id'];	
			}
						
				$query= "SELECT * FROM posts WHERE post_id= $the_post_id";
				$select_all_posts_query = mysqli_query( $connection, $query );
				while ( $row = mysqli_fetch_assoc( $select_all_posts_query ) ) {
				$post_title   = $row['post_title'];
				$post_author  = $row['post_author'];
				$post_date    = $row['post_date'];
				$post_image   = $row['post_image'];
				$post_content = $row['post_content'];
							
			?>
			<!-- Title -->
			<h1><?php echo $post_title; ?></h1>
			<!-- Author -->
			<p class="lead">
				by <?php echo $post_author; ?>
			</p>
			<hr>
			<!-- Date/Time -->
			<p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
			<hr>
			<!-- Preview Image -->
			<img class="img-fluid rounded"  src="images/<?php echo $post_image; ?>" alt="">
			<hr>
			<!-- Post Content -->
			<p class="lead"> <?php echo $post_content; ?></p>
			<?php }?>
			<hr>




<?php

if (isset($_POST['create_comments'])) {
	$the_post_id = $_GET['p_id'];
	$author_name =$_POST['author_name'];
	$author_email =$_POST['author_email'];
	$comment_content=  $_POST['comment_content'];


	$query = "INSERT INTO comments(comment_post_id, comment_author,comment_email,comment_content,comment_status,comment_date)";

	$query .= "VALUES($the_post_id, '{$author_name}','{$author_email}','{$comment_content}','unapproved',now())";

	$create_comments_query= mysqli_query($connection,$query);
	if(!$create_comments_query){
		die("QUERY FAILED".mysqli_error($connection));
	}

}


 ?>


			<!-- Comments Form -->
			<div class="card my-4">
				<h5 class="card-header">Leave a Comment:</h5>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="author_name">Name</label>
							<input type="text" name="author_name" class="form-control">
						</div>
						<div class="form-group">
							<label for="author_email">Email</label>
							<input type="email" name="author_email" class="form-control">
						</div>
						<div class="form-group">
							<label for="comment_content">Comment</label>
							<textarea class="form-control" rows="3" name="comment_content"></textarea>
						</div>
						<button type="submit" class="btn btn-primary" name="create_comments">Submit</button>
					</form>
				</div>
			</div>
	
	
		</div>
		<!-- Sidebar Widgets Column -->
		<?php require 'e:/xampp/htdocs/blogpost/Codenest/include/sidebar.php'; ?>
	</div>
	<!-- /.row -->
</div>
<!-- /.container -->
<!--Footer-->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/include/footer.php'; ?>