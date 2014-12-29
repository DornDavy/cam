<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

if (isset($_POST['update'])) {

    $id = trim($_POST['id']);
    $code = trim($_POST['code']);
    $name = trim($_POST['name']);

    $table = 'location';
    $field = array('code', 'name');
    $value = array($code, $name);
    echo  update($table, $field, $value, 'id', $id);

    $_SESSION['update'] = 'You transferred to update successful!!';
    header('location:location.php');
}
