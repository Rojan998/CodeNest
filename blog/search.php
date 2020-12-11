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


			if ( isset( $_POST['submit'] ) ) {

				$search = $_POST['search'];


				$query        = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
				$search_query = mysqli_query( $connection, $query );

				if ( ! $search_query ) {
					die( 'QUERY FAILED' . mysqli_error( $connection ) );
				}

				$count = mysqli_num_rows( $search_query );

				if ( $count == 0 ) {
					echo '<h1>NO RESULT FOUND </h1>';
				} else {

					while ( $row = mysqli_fetch_assoc( $search_query ) ) {
						$post_title   = $row['post_title'];
						$post_author  = $row['post_author'];
						$post_date    = $row['post_date'];
						$post_image   = $row['post_image'];
						$post_content = $row['post_content'];
						?>


						<!-- Title -->
						<h1 class="mt-4"><?php echo $post_title; ?></h1>

						<!-- Author -->
						<p class="lead">
							by
							<a href="#"><?php echo $post_author; ?></a>
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
						<!-- <blockquote class="blockquote">
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							<footer class="blockquote-footer">Someone famous in
								<cite title="Source Title">Source Title</cite>
							</footer>
						</blockquote>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

						<hr> -->

						<?php
					}
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
		<?php require 'e:/xampp/htdocs/blogpost/include/sidebar.php'; ?>

	</div>
	<!-- /.row -->

</div>
<!-- /.container -->

<!--Footer-->
<?php require 'e:/xampp/htdocs/blogpost/include/footer.php'; ?>
