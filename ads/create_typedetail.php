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
            include 'include/menu.php'

            ?>
        </div>
        <div class="row" style="margin-top: 40px">
            <form action="create_code_type_detail.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">

                        <hr/>
                        <label>Name*:</label>
                        <input type="text" placeholder="Name" class="form-control" name="name"/><br/>
                        <?php if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            ?>
                            <input type="hidden" placeholder="Type Name" class="form-control" value="<?php echo $id; ?>" name="type"/>
                        <?php
                        }
                        ?>
                        <label>Kind*:</label>
                        <select name="kind" id="" class="form-control">
                            <option >Sell</option>
                            <option >Buy</option>
                        </select><br/>
                        <label>Price*:</label>
                        <input type="text" placeholder="Price" class="form-control" name="price"/><br/>
                    </div>
                    <div class="col-md-6">
                        <hr/>

                        <label>Location*:</label>
                        <select name="location" id="" class="form-control">
                            <?php
                            lookup('location', 'name', 'name')
                            ?>

                        </select><br/>
                        <label>Image*:</label>
                        <input type="file" name="image"/><br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <textarea name="des" id="" cols="30" rows="10" class="form-control"></textarea><br/>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" name="create" value="Create"/>
                <input type="reset" class="btn btn-default"/>
            </form>
        </div>

    </div>
</div>
</div>
<?php
include('include/js.php')
?>
</body>
</html>