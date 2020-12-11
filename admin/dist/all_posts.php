<!-- Includes the header for admin panel-->
<?php require 'e:/xampp/htdocs/blogpost/admin/dist/includes/header.php'; ?>
<!-- Navigation bar -->
<?php require 'e:/xampp/htdocs/blogpost/admin/dist/includes/navigation.php'; ?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<h1 class="mt-4">Posts</h1>
			
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Welcome To ALL Posts Page</li>
			</ol>
			
			<div class="col-xs-6">
			</div>
			<div class="col-xs-6">
				<table class="table">
					<thead>
						<tr>
							<th>Post ID</th>
							<th>Post Category ID </th>
							<th>Post Title</th>
							<th>Post Author</th>
							<th>Post Date</th>
							<th>Post Image</th>
							<th>Post Content</th>
							<th>Post Tags</th>
							<th>Post Comment Count</th>
							<th>Post Status</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$query ="SELECT * FROM posts";
						$select_posts = mysqli_query($connection, $query);

						while($row = mysqli_fetch_assoc($select_posts)){
							$Id = $row['post_id'];
							$postCategoryId = $row['post_category_id'];
							$postTitle = $row['post_title'];
							$postAuthor = $row['post_author'];
							$postDate = $row['post_date'];
							$postImage = $row['post_image'];
							$postContent = $row['post_content'];
							$postTags = $row['post_tags'];
							$postCommentCount = $row['post_comment_count'];
							$postStatus = $row['post_status'];
							
							echo "<tr>";
							echo "<td>{$Id}</td>";
							echo "<td>{$postCategoryId}</td>";
							echo "<td>{$postTitle}</td>";
							echo "<td>{$postAuthor}</td>";
							echo "<td>{$postDate}</td>";
							echo "<td><img src='../../blog/images/$postImage'></td>";
							echo "<td>{$postContent}</td>";
							echo "<td>{$postTags}</td>";
							echo "<td>{$postCommentCount}</td>";
							echo "<td>{$postStatus}</td>";
							echo "<td><a href='all_posts.php?delete={$Id}'>Delete</a></td>";
							echo "<td><a href='edit_posts.php?edit_posts={$Id}'>Edit</a></td>";
							echo "</tr>";
						}

						?>

						<?php //delete posts
						deleting_posts();
						?>
					</tbody>
					
				</table>
			</div>
			
			</div> <!--continer-fluid -->
		</main>
		<!-- For footer-->
		<?php require 'e:/xampp/htdocs/blogpost/admin/dist/includes/footer.php'; ?>
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