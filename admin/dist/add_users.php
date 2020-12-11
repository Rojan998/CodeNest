<!-- Includes the header for admin panel-->
<?php require 'e:/xampp/htdocs/blogpost/admin/dist/includes/header.php'; ?>
<!-- Navigation bar -->
<?php require 'e:/xampp/htdocs/blogpost/admin/dist/includes/navigation.php'; ?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<h1 class="mt-4">Add Users</h1>
			
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Welcome To Add Users Page</li>
			</ol>
			<div class="col-xs-6">
				<form action="" method="post">
					<div class="form-group">
						<label for="first_name">First Name</label>
						<input type="text" name="first_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="user_name">User Name</label>
						<input type="text" name="user_name" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="user_image">User Image</label>
						<input type="text" name="user_image" class="form-control">
					</div>
					<div class="form-group">
						<label for="user_role">User Role</label>
						<input type="text" name="user_role" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="create_users" value="Add User">
					</div>
				</form>
			</div>
			
			
			<?php
			//addding users to database in add_user.php
			insert_users();	?>
			


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