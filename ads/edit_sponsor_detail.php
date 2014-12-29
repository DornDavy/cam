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
        $sql = "select * from sponsor_detail WHERE  id='$id'";
        $query = mysql_query($sql);
        if ($row = mysql_fetch_assoc($query)) {


        ?>
        </div>
            <div class="row" style="margin-top: 40px">
                <form action="update_sponsor_detail.php"  method="post">
                    <div class="col-md-6">
                        <hr/>
                        <input type="text" class="form-control" name="s_id" value="<?php echo $row['sponsor_id'];?>"/>
                        <input type="text" class="form-control" name="id" value="<?php echo $row['id'];?>"/>
                        <label for="">Start Date*:</label>
                        <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date'];?>"/>
                        <label for="">End Date*:</label>
                        <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date'];?>"/>
                        <label for="">Status*:</label>
                        <select class="form-control" name="status">
                            <option disabled selected>--Select One--</option>
                            <option <?php ?>>Disable</option>

                        </select><br/>
                        <label>Image*:</label>
                        <input type="file" name="image" value="<?php echo $row['photo']?>"/><br/>


                    </div>
                    <div class="col-md-6">
                        <hr/>
                        <label for="">Position*:</label>
                        <select class="form-control" name="position">
                            <option disabled selected>--Select One--</option>
                            <?php auto_select('position','position',$row['position'],'position')?>
                        </select>
                        <label for="">Quantity*:</label>
                        <input type="number" class="form-control" name="qty" value="<?php echo $row['qty']?>">
                        <label for="">Price*:</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $row['price']?>"><br/>
                    </div>
                    <div class="col-lg-12">
                        <textarea name="des"><?php echo $row['description']?></textarea><br/>
                        <input type="submit" class="btn btn-primary" name="update" value="Update"/>
                        <input type="reset" class="btn btn-default"/>
                    </div>
                </form><!--End Edit Form-->
            </div>

        </div>
    </div>

<?php
}
}
/*Include js file*/
include('include/js.php')
?>
</body>
</html>