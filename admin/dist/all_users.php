<!-- Includes the header for admin panel-->
<?php require 'e:/xampp/htdocs/blogpost/admin/dist/includes/header.php'; ?>
<!-- Navigation bar -->
<?php require 'e:/xampp/htdocs/blogpost/admin/dist/includes/navigation.php'; ?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<h1 class="mt-4">All Users</h1>
			
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Welcome To All Users Page</li>
			</ol>
			
			<div class="col-xs-6">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>User Name</th>
							<th>Password</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>User Image</th>
							<th>User Role</th>
							<!-- <th>Rand Salt</th> -->

							
						</tr>
					</thead>
					<tbody>
						<?php //getting all user data
						getting_all_users();
						 ?>
						<?php //deleting users
						deleting_users();?>
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