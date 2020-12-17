<!-- Includes the header for admin panel-->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/admin/dist/includes/header.php'; ?>
<!-- Navigation bar -->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/admin/dist/includes/navigation.php'; ?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<h1 class="mt-4">Posts</h1>
			
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Welcome To Add POSTS Page</li>
			</ol>
			
			
			<div class="col-xs-6">
				<form action="" method="post">
					<div class="form-group">
						<label for="post_category_id">Post Category ID</label>
						<input type="number" name="post_category_id" class="form-control">
					</div>
					<div class="form-group">
						<label for="post_title">Post Title</label>
						<input type="text" name="post_title" class="form-control">
					</div>
					<div class="form-group">
						<label for="post_author">Post Author</label>
						<input type="text" name="post_author" class="form-control">
					</div>
					<div class="form-group">
						<label for="post_date">Post Date</label>
						<input type="Date" name="post_date" class="form-control">
					</div>
					<div class="form-group">
						<label for="post_image">Post Image</label>
						<input type="text" name="post_image" class="form-control">
					</div>
					<div class="form-group">
						<label for="post_content">Post Content</label>
						<input type="text" name="post_content" class="form-control">
					</div>
					<div class="form-group">
						<label for="post_tags">Posts Tags</label>
						<input type="text" name="post_tags" class="form-control">
					</div>
					<div class="form-group">
						<label for="comment_count">Posts Comments Count</label>
						<input type="text" name="comment_count" class="form-control">
					</div>
					<div class="form-group">
						<label for="post_status">Posts Status</label>
						<input type="text" name="post_status" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="create_posts" value="Add Posts">
					</div>
				</form>
			</div>


			<?php //addint to database in table named posts
			insert_posts();

			?>
			
		</div> <!--continer-fluid -->
	</main>
	<!-- For footer-->
	<?php require 'e:/xampp/htdocs/blogpost/Codenest/admin/dist/includes/footer.php'; ?>
</div>
</div>
<script src=" https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>
</body>
</html>