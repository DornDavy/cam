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
        $sql = "select * from categories WHERE  id='$id'";
        $query = mysql_query($sql);
        if ($row = mysql_fetch_assoc($query)) {


        ?>
        </div>
            <div class="row" style="margin-top: 40px">
                <form action="update_categories.php" method="post">
                    <div class="col-md-6">
                        <hr/>
                        <label for="">ID*:</label>
                        <input type="text" class="form-control" value="<?php echo $row['id'];?>" readonly/><br/>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>"/><br/>
                        <label for="">Name*:</label>
                        <input type="text" class="form-control" required name="name"value="<?php echo $row['name'];?>"/><br/>
                        <label for="">URL*:</label>
                        <input type="text" class="form-control" name="url" required="" value="<?php echo $row['url'];?>"/><br/>
                    </div>
                    <div class="col-md-6">
                        <hr/>
                        <label for="">Class (CSS)*:</label>
                        <input type="text" class="form-control" name="class" required="" value="<?php echo $row['class'];?>"/><br/>

                        <input type="submit" class="btn btn-primary" name="update" value="Create"/>
                        <input type="reset" class="btn btn-default"/>
                    </div>
                </form>
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