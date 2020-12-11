<?php
function insert_categories(){
	global $connection;
	if(isset($_POST['submit']))
	{
		$cat_title = $_POST['cat_title'];
		if($cat_title == "" || empty($cat_title)){
			echo "This variable or field should not be empty";
		}
		else
		{
			$query = "INSERT INTO categories(cat_title)";
			$query .= "VALUE('{$cat_title}')";
			$inserting_to_database = mysqli_query($connection, $query);
			if(!$inserting_to_database){
				die("QUERY FAILED". mysqli_error($connection));
			}
		}
	}
}
function finding_all_categories(){
	global $connection;
	$query = "SELECT * FROM categories";
	$select_category = mysqli_query($connection, $query);
	while($row = mysqli_fetch_assoc($select_category)){
		$category_id = $row['cat_id'];
		$category_title= $row['cat_title'];
		echo "<tr>";
		echo "<td>{$category_id}</td>";
		echo "<td>{$category_title}</td>";
		echo "<td><a href='categories.php?delete={$category_id}'>Delete</a></td>";
		echo "<td><a href='categories.php?edit={$category_id}'>Edit</a></td>";
		echo "</tr>";
	}
}
function deleting_categories(){
	global $connection;
	if(isset($_GET['delete'])){
		$the_category_id = $_GET['delete'];
		$query = "DELETE FROM categories WHERE cat_id={$the_category_id}";
		$delete_query = mysqli_query($connection, $query);
		header("LOCATION: categories.php");
	}
}
function deleting_users(){
	global $connection;
	if(isset($_GET['delete'])){
		$the_user_id = $_GET['delete'];
		$query = "DELETE FROM users WHERE user_id={$the_user_id}";
		$delete_query = mysqli_query($connection, $query);
		header("LOCATION: all_users.php");
	}
}
function deleting_comments(){
	global $connection;
	if(isset($_GET['delete'])){
		$the_comment_id = $_GET['delete'];
		$query = "DELETE FROM comments WHERE comment_id={$the_comment_id}";
		$delete_query = mysqli_query($connection, $query);
		header("LOCATION: comments.php");
	}
}



function deleting_posts(){
	global $connection;
	if(isset($_GET['delete'])){
		$the_post_id = $_GET['delete'];
		$query = "DELETE FROM posts WHERE post_id={$the_post_id}";
		$delete_query = mysqli_query($connection, $query);
		header("LOCATION: all_posts.php");
	}
}

function getting_all_users(){
	global $connection;
	$query ="SELECT * FROM users";
	$select_user = mysqli_query($connection, $query);
	while($row = mysqli_fetch_assoc($select_user)){
		$user_id = $row['user_id'];
		$user_name = $row['username'];
		$user_password = $row['user_password'];
		$user_firstname = $row['user_firstname'];
		$user_lastname = $row['user_lastname'];
		$user_email = $row['user_email'];
		$user_image = $row['user_image'];
		$user_role = $row['user_role'];
		//$randsalt = $row['randSalt'];

		echo "<tr>";
		echo "<td>{$user_id}</td>";
		echo "<td>{$user_name}</td>";
		echo "<td>{$user_password}</td>";
		echo "<td>{$user_firstname}</td>";
		echo "<td>{$user_lastname}</td>";
		echo "<td>{$user_email}</td>";
		echo "<td><img src='../images/$user_image' width=70 height=70></td>";
		echo "<td>{$user_role}</td>";
										//echo "<td>{$randsalt}</td>";
		echo "<td><a href='all_users.php?delete={$user_id}'>Delete</a></td>";
		echo "<td><a href='edit_users.php?edit_users={$user_id}'>Edit</a></td>";
		echo "</tr>";
	}
}
function insert_users(){
	global $connection;
	if(isset($_POST['create_users']))
	{	
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$user_name = $_POST['user_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user_role = $_POST['user_role'];
		$user_image = $_POST['user_image'];
		if($first_name == "" || empty($first_name) && $last_name == "" || empty($last_name) && $user_name == "" || empty($user_name) && $email == "" || empty($email) && $password == "" || empty($password) ) {
			echo "This variable or field should not be empty";
		}
		else
		{
			$query = "INSERT INTO users(user_firstname,user_lastname,username,user_email,user_password,user_role,user_image)";
			$query .= "VALUE('{$first_name}','{$last_name}','{$user_name}','{$email}','{$password}','{$user_role}','{$user_image}')";
			$inserting_to_database = mysqli_query($connection, $query);
			if(!$inserting_to_database){
				die("QUERY FAILED". mysqli_error($connection));
			}
		}
	}
}


function insert_posts(){
	global $connection;
	

	if(isset($_POST['create_posts']))
	{	
		$post_category_id = $_POST['post_category_id'];
		$post_title = $_POST['post_title'];
		$post_author = $_POST['post_author'];
		$post_date = $_POST['post_date'];
		$post_image = $_POST['post_image'];
		$post_content = $_POST['post_content'];
		$post_content = mysqli_real_escape_string($connection,$post_content);
		$post_tags = $_POST['post_tags'];
		$post_comment_count = $_POST['comment_count'];
		$post_status = $_POST['post_status'];
		if($post_category_id == "" || empty($post_category_id) && $post_title == "" || empty($post_title) && $post_author == "" || empty($post_author) && $post_content == "" || empty($post_content) && $post_tags == "" || empty($post_tags) ) {
			echo "This variable or field should not be empty";
		}
		else
		{
			$query = "INSERT INTO posts(post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_comment_count,post_status)";
			$query .= "VALUE('{$post_category_id}','{$post_title}','{$post_author}','{$post_date}','{$post_image}','{$post_content}','{$post_tags}','{$post_comment_count}','{$post_status}')";
			$inserting_posts_to_database = mysqli_query($connection, $query);
			if(!$inserting_posts_to_database){
				die("QUERY FAILED". mysqli_error($connection));
			}
		}

	}

}


