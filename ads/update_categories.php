<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

if (isset($_POST['update'])) {

    echo $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $class= trim($_POST['class']);
    $url = trim($_POST['url']);

    $table = 'categories';
    $field = array('name', 'class', 'url');
    $value = array($name, $class, $url);
    echo  update($table, $field, $value, 'id', $id);

    $_SESSION['update'] = 'You transferred to update successful!!';
    header('location:categories.php');
}
echo 'Update';