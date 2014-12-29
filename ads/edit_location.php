<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";
include "include/css.php";
?>

<div class="container head ">

    <div style="margin-top: 50px;">
        <div class="header">
            <?php
            include 'include/menu.php';
            if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "select * from location WHERE  id='$id'";
            $query = mysql_query($sql);

            if ($row = mysql_fetch_assoc($query)) {
          ?>
        </div>
        <div class="row" style="margin-top: 40px">
            <form action="update_location.php" method="post">
                <div class="col-md-6">
                    <hr/>
                    <label for="">Location ID*:</label>
                    <input type="text" class="form-control"  value="<?php echo $row['id'];?>" readonly/><br/>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>"/>
                    <label for="">Location Code*:</label>
                    <input type="text" class="form-control"  value="<?php echo $row['code'];?>" name="code"/><br/>

                        <label for="">Kh Name*:</label>
                        <input type="text" class="form-control" required name="name" value="<?php echo $row['name'];?>"/><br/>

                    <input type="submit" class="btn btn-primary" name="update" value="Update"/>
                    <input type="reset" class="btn btn-default"/>
                </div>
            </form>
        </div>

    </div>
</div>
    </div>
<?php
}
}
include('include/js.php')
?>
</body>
</html>