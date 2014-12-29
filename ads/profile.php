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
             if (isset($_SESSION['email'])) {

                    $email = $_SESSION['email'];
                    $sql = "select * from users where email='$email'";
                    $query = @mysql_query($sql);
                    if ($row = @mysql_fetch_array($query)) {
        ?>
        </div>
            <div class="row" style="margin-top: 40px">
                <div class="row">
                    <div class="col-md-3">
                        <?
                        ?>
                        <img src="../asset/img/avatar5.png" class="img-responsive img-circle"
                             title="<?php echo $row['kh_name']; ?>" align="center">

                        <h3 align="left"><?php echo $row['kh_name']?></h3>

                    </div>
                    <div class="col-lg-8">
                        <label for="">Khmer name:</label>
                        <?echo $row['en_name'];?><br/>
                        <label for="">En name:</label>
                        <?echo $row['en_name'];?>

                    </div>
                </div>
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