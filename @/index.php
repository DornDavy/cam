
<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/css.php";
?>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="login.php" method="post">
        <h2 class="form-signin-heading">administrator</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <?php
                session('filed');
                session('logout');
                ?>
                <input type="email" class="form-control" name="email" autofocus required=""
                       placeholder="Web@example.com"> <br/>
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <input type="submit" class="btn btn-lg btn-login btn-block" value="Sign in" name="login"/>

        </div>
    </form>
</div>

<?php
include('include/js.php')
?>

</body>
</html>