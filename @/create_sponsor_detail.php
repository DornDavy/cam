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
           <form action="create_code_sponsor_detail.php"  method="post">
               <div class="col-md-6">
                   <hr/>
                   <input type="hidden" class="form-control" name="id" value="<?php  if (isset($_GET['id'])) {
                   $id = $_GET['id']; echo $id ;}?>"/>
                   <label for="">Start Date*:</label>
                   <input type="date" class="form-control" name="start_date"/>
                   <label for="">End Date*:</label>
                   <input type="date" class="form-control" name="end_date"/>
                   <label for="">Status*:</label>
                   <select class="form-control" name="status">
                       <option disabled selected>--Select One--</option>
                       <option >Enable</option>
                       <option >Disable</option>
                   </select><br/>
                   <label>Image*:</label>
                   <input type="file" name="image"/><br/>

               </div>
               <div class="col-md-6">
                   <hr/>
                   <label for="">Position*:</label>
                   <select class="form-control" name="position">
                       <option disabled selected>--Select One--</option>
                       <option >Right</option>
                       <option >Left</option>
                       <option >Banner</option>
                   </select>
                   <label for="">Quantity*:</label>
                   <input type="number" class="form-control" name="qty">
                   <label for="">Price*:</label>
                   <input type="text" class="form-control" name="price"><br/>
               </div>
               <div class="col-lg-12">
                    <textarea name="des"></textarea><br/>
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