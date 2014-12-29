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
           <form action="create_code_location.php" name="valid" method="post">
               <div class="col-md-6">
                   <hr/>

                   <label for="">Code*:</label>
                   <input type="text" class="form-control" name="code" placeholder="+..."/><br/>
                   <label for="">Location Name*:</label>
                   <input type="text" class="form-control" name="location" placeholder="Location Name"/><br/>




                   <input type="submit" class="btn btn-primary" name="create" value="Create"/>
                   <input type="reset" class="btn btn-default"/>
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