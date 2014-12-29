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
        $sql = "select * from sponsor WHERE  id='$id'";
        $query = mysql_query($sql);
        if ($row = mysql_fetch_assoc($query)) {


        ?>
        </div>
            <div class="row" style="margin-top: 40px">
                <form action="update_sponsor.php"   method="post">
                    <div class="col-md-6">
                        <hr/>
                        <label>ID*:</label>
                        <input type="text" class="form-control" placeholder="ID" value="<?php echo $row['id']?>" readonly/>
                        <input type="hidden" class="form-control" name="id" placeholder="ID" value="<?php echo $row['id']?>"/>
                        <label for="">Admin*:</label>
                        <select name="admin" class="form-control">
                            <option disabled selected>--Select One--</option>
                            <?php
                                /*Call function selected*/
                                auto_select('admin','en_name',$row['admin_id'],'id')

                            ?>
                        </select><br/>
                        <label for="">Company*:</label>
                        <select name="company"  class="form-control">
                            <option disabled selected>--Select One--</option>
                            <?php
                            /*Call function selected*/
                            auto_select('company','company_name',$row['company_id'],'id')
                            ?>
                        </select><br/>


                    </div>
                    <div class="col-md-6">
                        <hr/>
                        <label for="">Customer*:</label>
                        <select class="form-control" name="customer">
                            <option disabled selected>--Select One--</option>
                            <?php
                            /*Call function selected*/
                            auto_select('customer','name_en',$row['customer_id'],'id')
                            ?>
                        </select><br/>
                        <label >Date*:</label>
                        <input type="datetime-local" name="date" required="" class="form-control" value="<?php echo $row['date']?>"/><br/>


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