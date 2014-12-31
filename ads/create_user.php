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
            <?php

            if (isset($_SESSION['filed'])) {
                session('filed');
                ?>
                <form action="create_code_user.php" method="post" class="registerForm">
                    <div class="col-md-6">

                        <hr/>
                        <label for="">Kh Name*:</label>
                        <input type="text" class="form-control" placeholder="Kh Name" name="kh_name" value="<?php echo $_SESSION['kh_name']?>"/><br/>
                        <label for="">En Name*:</label>
                        <input type="text" class="form-control" placeholder="Kh Name" name="en_name" value="<?php echo $_SESSION['kh_name']?>"/><br/>
                        <label for="">Sex*:</label>
                        <select name="sex" id="" class="form-control">
                            <option>Make</option>
                            <option>Female</option>
                        </select><br/>

                        <label for="">Date of Birth*:</label>
                        <input type="text" class="form-control" placeholder="Date of Birth" name="dob"/><br/>
                        <label for="">Place of Birth*:</label>
                        <select name="pob" class="form-control">
                            <?php
                            auto_select('location', 'name', $_SESSION['pob'], 'name')
                            ?>
                        </select><br/>
                        <label for="">Email*:</label>
                        <input type="email" class="form-control" required="" name="email" value="<?php echo $_SESSION['email']?>"/><br/>

                    </div>
                    <div class="col-md-6">
                        <hr/>
                        <label for="">Telephone*:</label><br/>
                        <input type="text" class="form-control" name="tel" value="<?php echo $_SESSION['tel']?>"/><br/>
                        <label for="">Address*:</label><br/>
                        <select name="address" class="form-control" required="">
                            <?php
                            auto_select('location', 'name', $_SESSION['address'], 'name')

                            ?>
                        </select><br/>
                        <label for="">Register Date*:</label>
                        <input type="date" class="form-control" name="date" required="" value="<?php echo $_SESSION['date']?>"/><br/>
                        <label for="">Password*:</label>
                        <input type="password" class="form-control" name="password" required=""/><br/>
                        <label for="">Confirm Password*:</label>
                        <input type="password" class="form-control" name="con_password" required=""/><br/>
                        <input type="submit" class="btn btn-primary" value="Create" name="create"/>
                        <input type="reset" class="btn btn-default"/>

                    </div>
                </form>
            <?php
            } else {
             ?>
                <form action="create_code_user.php" method="post" class="registerForm">
                    <div class="col-md-6">

                        <hr/>
                        <label for="">Kh Name*:</label>
                        <input type="text" class="form-control" placeholder="Kh Name" name="kh_name"/><br/>
                        <label for="">En Name*:</label>
                        <input type="text" class="form-control" placeholder="Kh Name" name="en_name"/><br/>
                        <label for="">Sex*:</label>
                        <select name="sex" id="" class="form-control">
                            <option>Make</option>
                            <option>Female</option>
                        </select><br/>

                        <label for="">Date of Birth*:</label>
                        <input type="text" class="form-control" placeholder="Date of Birth" name="dob"/><br/>
                        <label for="">Place of Birth*:</label>
                        <select name="pob" class="form-control">
                            <?php
                            auto_select('location', 'name', '', 'name')
                            ?>
                        </select><br/>
                        <label for="">Email*:</label>
                        <input type="email" class="form-control" required="" name="email"/><br/>

                    </div>
                    <div class="col-md-6">
                        <hr/>
                        <label for="">Telephone*:</label><br/>
                        <input type="text" class="form-control" name="tel"/><br/>
                        <label for="">Address*:</label><br/>
                        <select name="address" class="form-control" required="">
                            <?php
                            auto_select('location', 'name', '', 'name')

                            ?>
                        </select><br/>
                        <label for="">Register Date*:</label>
                        <input type="date" class="form-control" name="date" required=""/><br/>
                        <label for="">Password*:</label>
                        <input type="password" class="form-control" name="password" required=""/><br/>
                        <label for="">Confirm Password*:</label>
                        <input type="password" class="form-control" name="con_password" required=""/><br/>
                        <input type="submit" class="btn btn-primary" value="Create" name="create"/>
                        <input type="reset" class="btn btn-default"/>

                    </div>
                </form>

            <?php
            }
            ?>
        </div>

    </div>
</div>
</div>
<?php
include('include/js.php')
?>
</body>
</html>