<!-- Includes the header for admin panel-->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/admin/dist/includes/header.php'; ?>
<!-- Navigation bar -->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/admin/dist/includes/navigation.php'; ?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<h1 class="mt-4">Edit Posts</h1>
			
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Welcome To Edit POSTS Page</li>
			</ol>
		
			<div class="col-xs-6">
				<form action="" method="post">
			<?php 
			//editing users 
						global $connection;
			if(isset($_GET['edit_posts'])){
						$the_post_edit_id = $_GET['edit_posts'];

						$query ="SELECT * FROM posts WHERE post_id = $the_post_edit_id";
						$select_posts_query = mysqli_query($connection, $query);
						while($row = mysqli_fetch_assoc($select_posts_query)){
						$posts_id = $row['post_id'];
						$post_category_id = $row['post_category_id'];
						$post_title = $row['post_title'];
						$post_author = $row['post_author'];
						$post_date = $row['post_date'];
						$post_image = $row['post_image'];
						$post_content = $row['post_content'];
						//$post_content = mysqli_real_escape_string($connection,$post_content);
						$post_tags = $row['post_tags'];
						$post_comment_count = $row['post_comment_count'];
						$post_status = $row['post_status'];
						}
			}
			
			?>




			<!-- updating users -->

		
		<?php  //Update Query
			if(isset($_POST['edit_posts'])){
						$id= $_GET['edit_posts'];
						$the_post_category_id = $_POST['post_category_id'];
						$the_post_title = $_POST['post_title'];
						$the_post_author = $_POST['post_author'];
						$the_post_date = $_POST['post_date'];
						$the_post_image = $_POST['post_image'];
						$the_post_content = $_POST['post_content'];
						$the_post_content = mysqli_real_escape_string($connection,$the_post_content);
						$the_post_tags = $_POST['post_tags'];
						$the_post_comment_count = $_POST['comment_count'];
						$the_post_status = $_POST['post_status'];
			
			$query = "UPDATE posts SET post_category_id='{$the_post_category_id}',post_title='{$the_post_title}',post_author='{$the_post_author}',post_date='{$the_post_date}',post_image='{$the_post_image}',post_content='{$the_post_content}',post_tags='{$the_post_tags}',post_comment_count='{$the_post_comment_count}',post_status='{$the_post_status}' WHERE post_id={$id}";
			$update_posts_query = mysqli_query($connection, $query);
			if(!$update_posts_query){
				die("QUERY FAILED" . mysqli_error($connection));
			}
		}
		?>
					<div class="form-group">
						<label for="post_category_id">Post Category ID</label>
						<input type="number" name="post_category_id" class="form-control" value="<?php if(isset($post_category_id)){echo $post_category_id; } ?>">
					</div>
					<div class="form-group">
						<label for="post_title">Post Title</label>
						<input type="text" name="post_title" class="form-control" value="<?php if(isset($post_title)){echo $post_title; } ?>" >
					</div>
					<div class="form-group">
						<label for="post_author">Post Author</label>
						<input type="text" name="post_author" class="form-control" value="<?php if(isset($post_author)){echo $post_author; } ?>">
					</div>
					<div class="form-group">
						<label for="post_date">Post Date</label>
						<input type="Date" name="post_date" class="form-control" value="<?php if(isset($post_date)){echo $post_date; } ?>" >
					</div>
					<div class="form-group">
						<label for="post_image">Post Image</label>
						<input type="text" name="post_image" class="form-control" value="<?php if(isset($post_image)){echo $post_image; } ?>">
					</div>
					<div class="form-group">
						<label for="post_content">Post Content</label>
						<input type="text" name="post_content" class="form-control" value="<?php if(isset($post_content)){echo $post_content; } ?>" >
					</div>
					<div class="form-group">
						<label for="post_tags">Posts Tags</label>
						<input type="text" name="post_tags" class="form-control" value="<?php if(isset($post_tags)){echo $post_tags; } ?>">
					</div>
					<div class="form-group">
						<label for="comment_count">Posts Comments Count</label>
						<input type="text" name="comment_count" class="form-control" value="<?php if(isset($post_comment_count)){echo $post_comment_count; } ?>" >
					</div>
					<div class="form-group">
						<label for="post_status">Posts Status</label>
						<input type="text" name="post_status" class="form-control" value="<?php if(isset($post_status)){echo $post_status; } ?>" >
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="edit_posts" value="Update Posts">
					</div>
				</form>
			</div>
			
		
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