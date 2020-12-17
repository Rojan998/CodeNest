<?php require 'e:/xampp/htdocs/blogpost/Codenest/admin/dist/loginregister/loginregister_header.php'; ?>
<?php require 'e:/xampp/htdocs/blogpost/Codenest/include/db.php'; ?>
<?php
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password= $_POST['cpassword'];
//validating if evry fields are empty or not.
    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($user_name)){
//escaping the user credentials so that sql-injections doesnt works.
        $first_name = mysqli_real_escape_string($connection,$first_name);
        $last_name = mysqli_real_escape_string($connection,$last_name);
        $user_name = mysqli_real_escape_string($connection,$user_name);
        $email = mysqli_real_escape_string($connection,$email);
        $password = mysqli_real_escape_string($connection,$password);
        $c_password = mysqli_real_escape_string($connection,$c_password);
//query for making the password strong
        $query = "SELECT randSalt FROM users";
        $select_randsalt_query = mysqli_query($connection,$query);
        if(!$select_randsalt_query){
            die("QUERY FAILED".mysqli_error($connection));
        }
        $row = mysqli_fetch_assoc($select_randsalt_query);
        $salt = $row['randSalt'];
//$password = crypt($password, $salt); use this latter.
//Adding user data to database.
        $query = "INSERT INTO users(user_firstname,user_lastname,username,user_email,user_password)";
        $query .="VALUE('{$first_name}','{$last_name}','{$user_name}','{$email}','{$password}')";
        $register_user_to_database = mysqli_query($connection,$query);
        if(!$register_user_to_database){
            die("QUERY FAILED".mysqli_error($connection));
        }
        $message = "Registration has been submitted";
    }
    else{
        $message=  "Some fields are empty";
    }
}
else
{
    $message ="";
}
?>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">
                                Create Account</h3><h6><?php echo $message;?></h6></div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputFirstName">First Name</label>
                                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" name="first_name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputLastName">Last Name</label>
                                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" name="last_name" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUserName">User Name</label>
                                            <input class="form-control py-4" id="inputUserName" type="text" placeholder="Enter user name" name="user_name" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputPassword">Password</label>
                                                    <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                    <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="cpassword" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-4 mb-0">
                                            <!-- <a class="btn btn-primary btn-block" href="" type="submit" name="submit">Create Account</a> -->
                                            <input class="btn btn-primary btn-block" name="submit" type="submit" value="Create Account" />
                                        </div>
                                    </form>
                                    
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php require 'e:/xampp/htdocs/blogpost/Codenest/admin/dist/loginregister/loginregister_footer.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>