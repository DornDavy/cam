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
           <div class="breadcrumb">
               <?php
               include 'include/breadcrume.php'
               ?>

           </div>
           <form action="create_code_category.php"  method="post">
               <div class="col-md-6">
                   <hr/>
                       <label for="">Name*:</label>
                       <input type="text" class="form-control" required name="name"/><br/>
                   <label for="">URL*:</label>
                   <input type="text" class="form-control" name="url" required=""/><br/>
               </div>
               <div class="col-md-6">
                   <hr/>
                   <label for="">Class(CSS)*:</label>
                   <input type="text" class="form-control" name="class" required=""/><br/>

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