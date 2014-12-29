<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

if (isset($_POST['create'])) {
    $code = trim($_POST['code']);
    $location= trim($_POST['location']);
    $table = 'location';
    $field = array('code', 'name');
    $value = array($code, $location);
    echo create($table, $field, $value);

    $_SESSION['create'] = 'You transferred successful!!';
    header('location:location.php');
}
