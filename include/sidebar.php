<div class="col-md-4">



    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <form action="search.php" method="post">
            <div class="card-body">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search for...">
                    <span class="input-group-append">
                        <button name="submit" class="btn btn-secondary" type="submit">Go!</button>
                    </span>
                </div>
            </div>
        </form>
    </div>





    <!-- Categories Widget -->
    <div class="card my-4">

        <?php
        $query = "SELECT * FROM categories";
        $select_categories_sidebar_query = mysqli_query($connection, $query);
        ?>

        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled mb-0">
                        <?php
                        while ($row = mysqli_fetch_assoc($select_categories_sidebar_query)) {
                            $cat_title = $row['cat_title'];
                             $cat_id = $row['cat_id'];

                            echo "<li class='nav-item active'>
                    <a class='nav-link' href='category.php?category=$cat_title'>{$cat_title}</a>
                    <span class='sr-only'>(current)</span></>";
                        }

                        ?>

                    </ul>
                </div>
         
            </div>
        </div>
    </div>





    <!-- Side Widget -->

    <?php // include "widgit.php" ?>
</div>