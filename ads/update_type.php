<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

if (isset($_POST['update'])) {

    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $photo= trim($_POST['image']);
    $cate_id = trim($_POST['category']);

    $table = 'types';
    $field = array('type_name', 'photo', 'cate_id');
    $value = array($name, $photo, $cate_id);
    echo  update($table, $field, $value, 'id', $id);

    $_SESSION['update'] = 'You transferred to update successful!!';
    header('location:type.php?id='.$cate_id);
}