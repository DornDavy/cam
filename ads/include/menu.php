<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li ><a href="content.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
            <li ><a href="customer.php"><span class="glyphicon glyphicon-home"></span>  Customer</a></li>
            <li ><a href="categories.php"><span class="glyphicon glyphicon-home"></span>  Categories</a></li>
            <li ><a href="advertises.php"><span class="glyphicon glyphicon-home"></span>  Advertiment</a></li>
            <li ><a href="sponsor.php"><span class="glyphicon glyphicon-home"></span>  Sponsor</a></li>
            <li ><a href="location.php"><span class="glyphicon glyphicon-home"></span>  Location</a></li>
            <li ><a href="user.php"><span class="glyphicon glyphicon-home"></span>  User</a></li>
            <li ><a href="admin.php"><span class="glyphicon glyphicon-home"></span>  Admin</a></li>

            <li class="dropdown pull-right">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">


                    <?php
                    if (isset($_SESSION['email'])) {

                    $email = $_SESSION['email'];
                    $sql = "select * from admin where email='$email'";
                        mysql_query("set character_set_results='utf8'" );
                    $query = mysql_query($sql);
                    if ($row=mysql_fetch_array($query)) {


                        ?>

                        <span><?php echo $row['kh_name'] ?></span>
                    <?php
                    }
                    }

                    ?>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a href="profile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
                    <li><a href="setting.php"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>



        </ul>
    </div>

</nav>