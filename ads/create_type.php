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
           <form action="create_code_type.php"  method="post" enctype="multipart/form-data">
               <div class="col-md-6">
                   <hr/>
                       <label for="">Name*:</label>
                       <input type="text" class="form-control" required name="name"/><br/>
                   <label for="">Image*:</label>
                   <input type="file"  name="image" /><br/>
                   <?php if (isset($_GET['cat'])) {
                   ?>
                    <input type="hidden" value="<?php echo $_GET['cat'];?>" class="form-control" name="category">
<?php }?>
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