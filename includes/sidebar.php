<div class="col-md-4">
    <?php
    require('includes/db.php');
    if (isset($_POST['search'])) {
        $search = $_POST['search'];

        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";

        $search_query = mysqli_query($connection, $query);

        if (!$search_query) {
            die("ERROR SEARCH" . mysqli_error($connect));
        }

        $count = mysqli_num_rows($search_query);
        if ($count == 0) {
            echo "<h1>No Result </h1>";
        } else {
            echo "<h1> have Result  </h1>";
        };
    };

    ?>

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
            <div class="input-group">
                <input name="search" type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <?php
        $query = "SELECT * FROM categories limit 3";
        $select_all_categories = mysqli_query($connection, $query);

        ?>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">

                    <?php
                    while ($row = mysqli_fetch_assoc($select_all_categories)) {
                        $cat_title = $row['cat_title'];
                        echo "<li><a href='#'> {$cat_title}</a></li>";
                    }
                    ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <?php
    include "includes/widget.php"
    ?>

</div>