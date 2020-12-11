<body class=" sb-nav-fixed ">
    
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="admin.php">Admin DashBoard</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>



        <!-- Navbar Search-->

        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">      
        </form>


        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item active">
                <a class="nav-link" href="../../blog/index.php">Home Page</a>
             
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">                        
                    
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>



    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Features</div>
                        <a class="nav-link" href="admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <!-- For Posts -->
                        
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#posts_dropdown" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-mail-bulk"></i></div>
                            Posts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="posts_dropdown" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="all_posts.php">All Posts</a>
                                <a class="nav-link" href="add_posts.php">Add Posts</a>
                                <a class="nav-link" href="edit_posts.php">Edit Posts</a>
                            </nav>
                        </div>



                                <!-- For Categories -->
                             <a class="nav-link" href="categories.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                            Categories
                            
                        </a>
                        <div class="collapse" id="category_dropdown" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                           
                        </div>

                           <!-- For Comments     -->
                       
                           <a class="nav-link" href="comments.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
                            Comments
                            
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                         
                        </div>




                        <!-- For Users -->
                        
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user_dropdown" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                            Users
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="user_dropdown" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="all_users.php">All Users</a>
                                <a class="nav-link" href="add_users.php">Add Users</a>
                                 <a class="nav-link" href="edit_users.php">Edit Users</a>
                            </nav>
                        </div>
                        
                 
                                           


                   
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?php echo $_SESSION['username']; ?>
                </div>
            </nav>
        </div>