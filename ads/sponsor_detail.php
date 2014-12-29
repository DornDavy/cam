<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";
include "include/css.php";
?>
<div class="container head " ng-controller="sponsorCtrl">

    <div style="margin-top: 50px;">

        <?php
        session('update');
        session('destroy');
        session('create');
        ?>
        <div class="header">
            <?php
            include 'include/menu.php'

            ?>
        </div>
        <div class="row" style="margin-top: 40px">
            <div class="breadcrumb">
                <?php
                include 'include/breadcrume.php';
                if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "select * from v_sponsor_detail WHERE  sponsor_id='$id'";
                $query = mysql_query($sql);

                ?>

            </div>
            <div class="col-lg-10">
                <a href="create_sponsor_detail.php?id=<?php echo $id?>" class="btn btn-primary">Create</a>
            </div>
            <div class="col-lg-2">

                <input type="text" ng-model="search" class="search" placeholder="Search"><br/>
            </div>


            <table class="table table-bordered table-responsive table-condensed table-hover table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Total</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <?php
                while ($row=mysql_fetch_assoc($query)) {

                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['start_date'];?></td>
                        <td><?php echo $row['end_date'];?></td>
                        <td><?php echo $row['position'];?></td>
                        <td><?php echo $row['status'];?></td>
                        <td><?php echo $row['qty'];?></td>
                        <td><?php echo '$'.$row['price'];?></td>
                        <td><img src="../asset/img/<?php echo $row['photo'];?>" alt=" <?php echo $row['photo'];?>" class="img-responsive img-thumbnail img-rounded"/></td>
                        <td><?php echo $row['description'];?></td>
                        <td><?php echo '$'.$row['qty']*$row['price'].'.00';?></td>

                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle btn-xs"
                                        data-toggle="dropdown">
                                    Action <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="edit_sponsor_detail.php?id=<?php echo $row['id'];?>"><span
                                                class="glyphicon glyphicon-remove"></span> Edit</a></li>
                                    <li><a href="delete_sponsor_detail.php?id=<?php echo $row['id'];?>"><span
                                                class="glyphicon glyphicon-remove"></span> Delete</a></li>
                                    <li><a href="sponsor_detail.php?id=<?php echo $id;?>"><span
                                                class="glyphicon glyphicon-remove"></span> Sponsor Detail</a></li>
                                </ul>
                            </div>


                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
    </div>
<?php
}
include('include/js.php')
?>

</body>
</html>