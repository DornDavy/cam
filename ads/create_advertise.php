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
           <form action="create_code_advertise.php"  method="post">
               <div class="col-md-6">
                   <hr/>
                       <label for="">Customer*:</label>
                   <select name="customer" id="" class="form-control">
                       <?php lookup('customer','name_en','id') ?>
                   </select>
                   <label for="">User*:</label>
                   <select name="user" id="" class="form-control" id="e2">

                       <?php lookup('users','en_name','id') ?>
                   </select>
               </div>
               <div class="col-md-6">
                   <hr/>
                   <label for="">Date*:</label>
                   <input type="date" class="form-control" name="date" required=""/><br/>

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