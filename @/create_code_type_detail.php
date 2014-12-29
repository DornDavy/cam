<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";


if (isset($_POST['create'])) {
    $type = trim($_POST['type']);
    $name = trim($_POST['name']);
    $image = trim($_POST['image']);
    $location = trim($_POST['location']);
    $kind = trim($_POST['kind']);
    $price = trim($_POST['price']);
    $des = trim($_POST['des']);
    $table = 'type_detail';
    $field = array('type_id','name', 'photo', 'des','location','kind','price');
    $value = array($type,$name,$image,$des,$location,$kind,$price);

    create($table, $field, $value);
    image($image, '', '../asset/img');

    $_SESSION['create'] = 'You transferred successful!!';
    header('location:type_detail.php?id='.$type);
}
