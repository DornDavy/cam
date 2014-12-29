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
           <form action="create_code_sponsor.php"  method="post">
               <div class="col-md-6">
                   <hr/>
                       <label for="">Admin*:</label>
                   <select name="admin" class="form-control">
                       <option disabled selected>--Select One--</option>
                       <?php
                       auto_select('admin','en_name','','id')
                       ?>
                   </select><br/>
                   <label for="">Company*:</label>
                   <select name="company"  class="form-control">
                       <option disabled selected>--Select One--</option>
                       <?php
                            auto_select('company','company_name','','id')
                       ?>
                   </select><br/>


               </div>
               <div class="col-md-6">
                   <hr/>
                   <label for="">Customer*:</label>
                   <select class="form-control" name="customer">
                       <option disabled selected>--Select One--</option>
                       <?php
//                            lookup('customer','name_en','id')
                        auto_select('customer','name_en','','id')
                       ?>
                   </select><br/>
                   <label >Date*:</label>
                   <input type="datetime-local" name="date" required="" class="form-control"/><br/>


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