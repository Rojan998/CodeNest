<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="../blog">Codenest</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<!-- links to the navigation bar -->
			<ul class="navbar-nav ml-auto">
				<?php
				$query                       = 'SELECT * FROM navigation';
				$select_all_navigation_query = mysqli_query( $connection, $query );
				while ( $row = mysqli_fetch_assoc( $select_all_navigation_query ) ) {
					$nav_name = $row['Name'];
					$nav_id = $row['ID'];
					echo "<li class='nav-item active'>
					<a class='nav-link' href='show_navigation_content.php?navigation_name=$nav_name'>{$nav_name}</a>
					<span class='sr-only'>(current)</span></>";
				}
				?>
				<li class="nav-item active">
					<a class="nav-link" href="../admin/dist/admin.php" target="_blank" >Admin</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="../admin/dist/loginregister/registration.php" target="_blank">Registration</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="../admin/dist/loginregister/login.php" target="_blank">Login</a>
				</li>
				
			</ul>
		</div>
	</div>
</nav>