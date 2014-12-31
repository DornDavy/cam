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
            <form action="create_code_advertise.php" method="post">
                <div class="col-md-6">
                    <hr/>

                </div>
                <div class="col-md-6">
                   
                </div>
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