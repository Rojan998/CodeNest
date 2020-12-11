<!--Connecting database to the index file-->
<?php require 'e:/xampp/htdocs/blogpost/include/db.php'; ?>


<!--Header-->
<?php require 'e:/xampp/htdocs/blogpost/include/header.php'; ?>



<!--Navigation-->
<?php require 'e:/xampp/htdocs/blogpost/include/navigation.php'; ?>



<!-- Page Content -->
<div class="container">
  <div class="row">
	<!-- Post Content Column -->
	<div class="col-lg-8">
	  <?php

	  if(isset($_GET['category'])){
	  	$post_category_title = $_GET['category'];
	  }
	 

		$query                  = "SELECT * FROM posts WHERE post_title LIKE '%$post_category_title%' ";
		$select_all_posts_query = mysqli_query( $connection, $query );
		while ( $row = mysqli_fetch_assoc( $select_all_posts_query ) ) {
			$post_id = $row['post_id'];
			$post_title   = $row['post_title'];
			$post_author  = $row['post_author'];
			$post_date    = $row['post_date'];
			$post_image   = $row['post_image'];
			$post_content = substr($row['post_content'],0,100);

			?>


		<!-- Title -->
		<h1 class="mt-4"> <a href="single_post.php?p_id=<?php echo $post_id; ?>"> <?php echo $post_title; ?></a></h1>

		<!-- Author -->
		<p class="lead">
		  by
		  <?php echo $post_author; ?>
		</p>

		<hr>

		<!-- Date/Time -->
		<p>Posted on <?php echo $post_date; ?> </p>

		<hr>

		<!-- Preview Image -->
		<!-- for image to be displayed, we need a reference in database-->
		<img class="img-fluid rounded" src="images/<?php echo $post_image; ?>" alt="">

		<hr>

		<!-- Post Content -->
		<p class="lead"> <?php echo $post_content; ?> </p>
		 <a class="btn btn-primary" href="single_post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
		 <hr>
		 <hr>

		<?php } ?>




	</div>

	<!-- Sidebar Widgets Column -->
	<?php require 'e:/xampp/htdocs/blogpost/include/sidebar.php'; ?>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<!--Footer-->
<?php require 'e:/xampp/htdocs/blogpost/include/footer.php'; ?>
