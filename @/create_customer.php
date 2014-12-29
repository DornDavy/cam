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
            if (isset($_SESSION['destroy'])) {
                $destroy = $_SESSION['destroy'];
                unset_session('destroy');
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></button>
                    <?php echo $destroy; ?>
                </div>
            <?php
            }
            ?>

        <div class="header">
        <?php
            include 'include/menu.php'

        ?>
     </div>
       <div class="row" style="margin-top: 40px">
           <form action="create_code_customer.php" name="valid" method="post">
               <div class="col-md-6">
                   <hr/>
                   <div>
                       <label for="">Kh Name*:</label>
                       <input type="text" class="form-control" required name="kh_name"/><br/>
                   </div>
                   <label for="">En Name*:</label>
                   <input type="text" class="form-control" name="en_name"/><br/>
                   <label for="">Sex*:</label>
                   <select class="form-control" name="sex">
                       <option disabled selected>--Select One--</option>
                       <option>Male</option>
                       <option>Female</option>
                   </select><br/>
                   <label for="">Date of Birth*:</label>
                   <input type="date" class="form-control" name="dob"/><br/>
                   <label for="">Place of Birth*:</label>
                   <select name="pob" class="form-control">
                       <option selected disabled>--Select One--</option>
                       <?php auto_select('location','name','','name')?>
                   </select><br/>

               </div>
               <div class="col-md-6">
                   <hr/>

                   <label for="">Address:</label>
                   <select name="address" class="form-control">
                      <option selected disabled>--Select One--</option>
                        <?php auto_select('location','name','','name')?>
                   </select><br/>

                   <label for="">Email*:</label>
                   <input type="text" class="form-control" name="email"/><br/>
                   <label for="">Telephone*:</label>
                   <input type="text" class="form-control" name="phone"/><br/>
                   <label for="">Fax:*:</label>
                   <input type="text" class="form-control" name="fax"/><br/>


                   <input type="submit" class="btn btn-primary" name="create"/>
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