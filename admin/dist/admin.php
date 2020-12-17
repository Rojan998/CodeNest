<!-- Includes the header for admin panel-->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/admin/dist/includes/header.php'; ?>

<!-- Navigation bar -->
<?php require 'e:/xampp/htdocs/blogpost/Codenest/admin/dist/includes/navigation.php'; ?>



<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid">
			<h1 class="mt-4">Admin Dashboard</h1>
		
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item active">Welcome to the Admin Panel </li>
			</ol>

			<h1>Welcome <?php echo $_SESSION['username']?> </h1>	
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
