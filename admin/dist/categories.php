<!-- Includes the header for admin panel-->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/admin/dist/includes/header.php'; ?>
<!-- Navigation bar -->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/admin/dist/includes/navigation.php'; ?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<h1 class="mt-4">Categories</h1>
			
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Welcome To Categories Page</li>
			</ol>
			
			<div class="col-xs-6">
				<?php //Inserting to database
					insert_categories();
				?>
				<!-- Adding Category -->
				<form action="" method="post">
					<div class="form-group">
						<label for="cat_title">Add Category</label>
						<input type="text" class="form-control" name="cat_title">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="submit" value="Add category">
					</div>
				</form>
				<?php //updating and including categories
				if(isset($_GET['edit'])){
					$category_id = $_GET['edit'];
					include "update_categories.php";
				}
				?>
			</div>
			<div class="col-xs-6">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Category Title</th>
						</tr>
					</thead>
					<tbody>
						
						<?php //getting all the datas from database Find All Categories.
						finding_all_categories();
						?>
						<?php //deleting categories
						deleting_categories();
						?>
					</tbody>
					
				</table>
			</div>		
			
		</div>
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