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
        session('update');
        session('destroy');
        session('create');
        ?>
        <div class="header">
            <?php
            include 'include/menu.php';
            if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "select * from categorires_type WHERE cate_id='$id'";
            $query = mysql_query($sql);

            ?>
        </div>
        <div class="row" style="margin-top: 40px">

            <div class="col-lg-10">
                <a href="create_type.php?cat=<?php echo $id;?>" class="btn btn-primary">Create</a>
            </div>
            <div class="col-lg-2">

                <input type="text" ng-model="search" class="search" placeholder="Search"><br/>
            </div>


            <table class="table table-bordered table-responsive table-condensed table-hover table-responsive">
                <thead>
                <tr>
                    <th>Type ID</th>
                    <th>Name</th>
                    <th>Logo</th>
                    <th>Category</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <?php while ($row=mysql_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $i=$row['id']?></td>
                    <td><?php echo $row['type_name']?></td>
                    <td><img src="../asset/img/<?php echo $row['photo']?>" class="img-thumbnail img-responsive" alt="<?php echo $row['type_name']?>"></td>
                    <td><?php echo $row['name']?></td>

                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-toggle="dropdown">
                                Action <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="edit_type.php?id=<?php echo $i?>"><span
                                            class="glyphicon glyphicon-remove"></span> Edit</a></li>
                                <li><a href="delete_categories.php?id=<?php echo $i?>"><span
                                            class="glyphicon glyphicon-remove"></span> Delete</a></li>
                                <li><a href="type_detail.php?id=<?php echo $i?>"><span
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