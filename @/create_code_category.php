<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

if (isset($_POST['create'])) {
    $name = trim($_POST['name']);
    $class= trim($_POST['class']);
    $url = trim($_POST['url']);

    $table = 'categories';
    $field = array('name', 'class', 'url');
    $value = array($name,$class, $url);
    echo create($table, $field, $value);

    $_SESSION['create'] = 'You transferred successful!!';
    header('location:categories.php');
}
