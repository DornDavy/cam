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
            $sql = "select * from customer WHERE  id='$id'";
            $query = mysql_query($sql);

            if ($row = mysql_fetch_assoc($query)) {
          ?>
        </div>
        <div class="row" style="margin-top: 40px">
            <form action="update_customer.php" method="post">
                <div class="col-md-6">
                    <hr/>
                    <label for="">Customer ID*:</label>
                    <input type="text" class="form-control"  value="<?php echo $row['id'];?>" readonly/><br/>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>" />

                    <label for="">Kh Name*:</label>
                    <input type="text" class="form-control" required name="kh_name"
                           value="<?php echo $row['name_kh']; ?>"/><br/>

                    <label for="">En Name*:</label>
                    <input type="text" class="form-control" name="en_name" value="<?php echo $row['name_en'];?>"/><br/>
                    <label for="">Sex*:</label>
                    <input type="text" class="form-control" name="sex" value="<?php echo $row['sex'];?>"/><br/>
                    <label for="">Date of Birth*:</label>
                    <input type="text" class="form-control" name="dob" value="<?php echo $row['dob'];?>"/><br/>
                    <label for="">Place of Birth*:</label>
                    <select name="pob" class="form-control">
                        <option selected disabled>--Select One--</option>
                        <?php $addr= $row['pob'];?>
                        <?php auto_select('location','name',$addr,'name')?>
                    </select><br/>
                </div>
                <div class="col-md-6">
                    <hr/>

                    <label for="">Address:</label>
                    <select name="address" class="form-control">
                        <option selected disabled>--Select One--</option>
                        <?php $addr= $row['address'];?>
                        <?php auto_select('location','name',$addr,'name')?>
                    </select><br/>
                    <label for="">Email*:</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>"/><br/>
                    <label for="">Telephone*:</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>"/><br/>
                    <label for="">Fax:*:</label>
                    <input type="text" class="form-control" name="fax" value="<?php echo $row['fax'];?>"/><br/>


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