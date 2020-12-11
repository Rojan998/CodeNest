<?php require 'e:/xampp/htdocs/blogpost/admin/dist/loginregister/loginregister_header.php'; ?>
<?php require 'e:/xampp/htdocs/blogpost/include/db.php'; ?>
<?php session_start(); ?>
<?php
if (isset($_POST['login'])) {
    $login_user_name = $_POST['user_name'];
    $login_email = $_POST['email'];
    $login_password = $_POST['password'];
    $login_user_name = mysqli_real_escape_string($connection, $login_user_name);
    $login_email = mysqli_real_escape_string($connection, $login_email);
    $login_password = mysqli_real_escape_string($connection, $login_password);
    $query = "SELECT * FROM users WHERE username = '{$login_user_name}'";
    $login_query = mysqli_query($connection, $query);
    if(!$login_query){
        die("QUERY FAILED".mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($login_query) ){
        $db_username = $row['username'];
        $db_email = $row['user_email'];
        $db_password = $row['user_password'];
        $db_firstname = $row['user_firstname'];
        $db_lastname = $row['user_lastname'];
    }
    if($login_user_name == $db_username && $login_email == $db_email && $login_password == $db_password) {
        header("LOCATION: ../admin.php");
        $_SESSION['username'] = $db_username;
        $_SESSION['email'] = $db_email;
        $_SESSION['password'] = $db_password;
        $_SESSION['firstname'] = $db_firstname;
        $_SESSION['lastname'] = $db_lastname;;
    }else{
        if($login_user_name !== $db_username && $login_email !== $db_email && $login_password !== $db_password){
            echo "DATA NOT FOUND";
            header("LOCATION: login.php");
        }
    }
}
?>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <div class="card-body">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputUserName">User Name</label>
                                            <input class="form-control py-4" id="inputUserName" type="text" placeholder="Enter User Name" name="user_name" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                                        </div>
                                        
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                            <!-- <a class="btn btn-primary" name="login" type="submit" >Login</a> -->
                                            <input class="btn btn-primary btn-block" name="login" type="submit" value="Login" />
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="registration.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php require 'e:/xampp/htdocs/blogpost/admin/dist/loginregister/loginregister_footer.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>