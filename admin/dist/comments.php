<!-- Includes the header for admin panel-->
<?php require 'e:/xampp/htdocs/blogpost/admin/dist/includes/header.php'; ?>
<!-- Navigation bar -->
<?php require 'e:/xampp/htdocs/blogpost/admin/dist/includes/navigation.php'; ?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<h1 class="mt-4">Posts</h1>
			
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Welcome To Comments Page</li>
			</ol>
			
			<div class="col-xs-6">

			</div>
			<div class="col-xs-6">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Comment Post ID </th>
							<th>Comment Author</th>
							<th>Comment Email</th>
							<th>Comment Content</th>
							<th>Comment Status</th>
							<th>Comment Date</th>							
						</tr>
					</thead>
					<tbody>
						<?php 
						$query ="SELECT * FROM comments";
						$select_comments = mysqli_query($connection, $query);

						while($row = mysqli_fetch_assoc($select_comments)){
							$Id = $row['comment_id'];
							$comment_post_id = $row['comment_post_id'];							
							$commentAuthor = $row['comment_author'];
							$commentEmail = $row['comment_email'];
							$commentContent = $row['comment_content'];
							$commentDate = $row['comment_date'];
							$commentStatus = $row['comment_status'];
							
													
							
							
							echo "<tr>";
							echo "<td>{$Id}</td>";
							echo "<td>{$comment_post_id}</td>";
							echo "<td>{$commentAuthor}</td>";
							echo "<td>{$commentEmail}</td>";						
							echo "<td>{$commentContent}</td>";	
							echo "<td>{$commentDate}</td>";						
							echo "<td>{$commentStatus}</td>";
							echo "<td><a href='comments.php?delete={$Id}'>Delete</a></td>";
							//echo "<td><a href='edit_posts.php?edit_posts={$Id}'>Edit</a></td>";
							echo "</tr>";
						}

						?>

						<?php //delete posts
						deleting_comments();
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