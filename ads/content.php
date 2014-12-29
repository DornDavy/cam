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


            session('success');



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
               ?>

           </div>
       </div>

       </div>
</div>
</div>
<?php
include('include/js.php')
?>
</body>
</html>