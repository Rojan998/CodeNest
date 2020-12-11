<!-- Includes the header for admin panel-->
<?php require 'e:/xampp/htdocs/blogpost/admin/dist/includes/header.php'; ?>
<!-- Navigation bar -->
<?php require 'e:/xampp/htdocs/blogpost/admin/dist/includes/navigation.php'; ?>
<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<h1 class="mt-4">Edit Users</h1>
			
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Welcome To Edit Users Page</li>
			</ol>
		
			<div class="col-xs-6">
				<form action="" method="post">
			<?php 
			//editing users 
						global $connection;
			if(isset($_GET['edit_users'])){
						$the_user_edit_id = $_GET['edit_users'];

						$query ="SELECT * FROM users WHERE user_id = $the_user_edit_id";
						$select_user_query = mysqli_query($connection, $query);
						while($row = mysqli_fetch_assoc($select_user_query)){
							$user_id = $row['user_id'];
							$user_name = $row['username'];
							$user_password = $row['user_password'];
							$user_firstname = $row['user_firstname'];
							$user_lastname = $row['user_lastname'];
							$user_email = $row['user_email'];
							$user_image = $row['user_image'];
							$user_role = $row['user_role'];
						}
			}
			
			?>




			<!-- updating users -->

		
		<?php  //Update Query
			if(isset($_POST['edit_users'])){
						$the_user_id = $_GET['edit_users'];
						$the_first_name = $_POST['first_name'];
						$the_last_name = $_POST['last_name'];
						$the_user_name = $_POST['user_name'];
						$the_email = $_POST['email'];
						$the_password = $_POST['password'];
						$the_user_role = $_POST['user_role'];
						$the_user_image = $_POST['user_image'];
			
			$query = "UPDATE users SET user_firstname='{$the_first_name}',user_lastname='{$the_last_name}',username='{$the_user_name}',user_email='{$the_email}',user_role='{$the_user_role}',user_image='{$the_user_image}' WHERE user_id={$the_user_id}";
			$update_user_query = mysqli_query($connection, $query);
			if(!$update_user_query){
				die("QUERY FAILED" . mysqli_error($connection));
			}
		}
		?>
					<div class="form-group">
						<label for="first_name">First Name</label>
						<input type="text" value="<?php if(isset($user_firstname)){echo $user_firstname; } ?>" name="first_name" class="form-control" >
					</div>
					<div class="form-group">
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name" class="form-control" value="<?php if(isset($user_lastname)){echo $user_lastname; } ?>">
					</div>
					<div class="form-group">
						<label for="user_name">User Name</label>
						<input type="text" name="user_name" class="form-control" value="<?php if(isset($user_name)){echo $user_name; } ?>">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" value="<?php if(isset($user_email)){echo $user_email; } ?>">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" value="<?php if(isset($user_password)){echo $user_password; }?>">
					</div>
					<div class="form-group">
						<label for="user_image">User Image</label>
						<input type="text" name="user_image" class="form-control" value="<?php if(isset($user_image)){echo $user_image; } ?>">
					</div>
					<div class="form-group">
						<label for="user_role">User Role</label>
						<input type="text" name="user_role" class="form-control" value="<?php if(isset($user_role)){echo $user_role; } ?>">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" name="edit_users" value="Update User" >
					</div>
				</form>
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