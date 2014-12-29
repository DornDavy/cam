<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

if (isset($_POST['update'])) {

    $id = trim($_POST['id']);
    $name = trim($_POST['name']);


    $table = 'categories';
    $field = array('name', 'class', 'url');
    $value = array($name, $class, $url);
    echo  update($table, $field, $value, 'id', $id);

    $_SESSION['update'] = 'You transferred to update successful!!';
    header('location:categories.php?id=');
}
echo 'Update';