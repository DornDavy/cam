<?php
 include 'ads/include/config.php';
 include 'ads/include/libraries.php';
 include 'ads/include/resource.php';
?>
<html ng-app="">
<head>
    <?php
    include "inc/css.php";
    ?>
</head>
<body>

<?php
include 'inc/loginform.php';
include 'inc/banner.php';
include 'inc/topmenu.php';
?>

<div class="row">
   <div class="col-md-4 alert alert-success col-md-pull-4">A</div>
   <div class="col-md-4 alert alert-success col-md-push-4">B</div>
   <div class="col-md-4 alert alert-success  col-md-push-4">c</div>
</div>
    <?php
    include 'inc/footer.php';
    include 'inc/js.php';
    include 'inc/ng.php'
    ?>

</body>
</html>
