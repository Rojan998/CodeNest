<!-- Editing/Updating Category -->
<form action="" method="post">
	<div class="form-group">
		<label for="cat_title">Edit Category</label>
		<?php
		if(isset($_GET['edit'])){
		$edit_category_id = $_GET['edit'];
		$query = "SELECT * FROM categories WHERE cat_id = $edit_category_id" ;
		$edit_category = mysqli_query($connection, $query);
		while($row = mysqli_fetch_assoc($edit_category)){
		$category_id = $row['cat_id'];
		$category_title= $row['cat_title'];
		?>
		<input value="<?php if(isset($category_title)){echo $category_title;} ?>" type="text" class="form-control" name="cat_title">
		<?php 	}} ?>
		<?php  //Update Query
			if(isset($_POST['update_category'])){
			$the_category_title = $_POST['cat_title'];
			$query = "UPDATE categories SET cat_title='{$the_category_title}' WHERE cat_id={$category_id}";
			$update_query = mysqli_query($connection, $query);
			if(!$update_query){
				die("QUERY FAILED" . mysqli_error($connection));
			}
		}
		?>
		
	</div>
	<div class="form-group">
		<input class="btn btn-primary" type="submit" name="update_category" value="Update Category">
	</div>
</form>