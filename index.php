<?php
 include '@/include/config.php';
 include '@/include/libraries.php';
 include '@/include/resource.php';
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
    <?php
    include 'inc/categories.php';
    include 'inc/content.php'


    ?>


    <?php
    include 'inc/sponsor_right.php';
    ?>
</div>
    <?php
    include 'inc/footer.php';
    include 'inc/js.php';
    include 'inc/ng.php'
    ?>

</body>
</html>
