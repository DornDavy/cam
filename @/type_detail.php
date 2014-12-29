<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";
include "include/css.php";
?>
<div class="container head ">

    <div style="margin-top: 50px;">

        <?php
        //Message box and destroy Session
        session('update');
        session('destroy');
        session('create');
        ?>
        <div class="header">
            <?php
            //MMenu on the top
            include 'include/menu.php';
            $admin = $_SESSION['email'];
            if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "select * from type_typedetail WHERE type_id='$id'";
            $query = mysql_query($sql);

            ?>
        </div>
        <div class="row" style="margin-top: 40px">

            <div class="col-lg-10">
                <a href="edit_typedetail.php?id=<?php echo $id;?>" class="btn btn-primary">Create</a>
            </div>
            <div class="col-lg-2">

                <input type="text" class="search" placeholder="Search"><br/>
            </div>


            <table class="table table-bordered table-responsive table-condensed table-hover table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Image</th>
                    <th>Type Name</th>
                    <th>Kind</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <?php while ($row=mysql_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i=$row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['en_name']?></td>
                    <td><img  src="../asset/img/<?php echo $row['photo']?>" align="<?php echo $row['photo']?>" title="<?php echo $row['photo']?>"></td>
                    <td><?php echo $row['type_name']?></td>
                    <td><?php echo $row['kind']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['location']?></td>
                    <td><?php echo $row['des']?></td>

                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-toggle="dropdown">
                                Action <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="edit_typedetail.php?id=<?php echo $i?>"><span
                                            class="glyphicon glyphicon-remove"></span> Edit</a></li>
                                <li><a href="delete_categories.php?id=<?php echo $i?>"><span
                                            class="glyphicon glyphicon-remove"></span> Delete</a></li>
                                <li><a href="categories_list.php?id=<?php echo $i?>"><span
                                            class="glyphicon glyphicon-remove"></span> List of Type</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php

                }
                }
                ?>

                </tbody>
            </table>
        </div>

    </div>
</div>
</div>
<?php
include('include/js.php')
?>
</body>
</html>