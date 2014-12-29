<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";


if (isset($_POST['create'])) {
    $id= trim($_POST['id']);
    $start = trim($_POST['start_date']);
    $end = trim($_POST['end_date']);
    $status = trim($_POST['status']);
    $position = trim($_POST['position']);
    $qty = trim($_POST['qty']);
    $price = trim($_POST['price']);
    $des = trim($_POST['des']);

    $table = 'sponsor_detail';
    $field = array('start_date','end_date','qty','price','sponsor_id','status','position','description');
    $value = array($start,$end,$qty,$price,$id,$status,$position,$des);
    create($table, $field, $value);

    $_SESSION['create'] = 'You transferred successful!!';
    header('location:sponsor_detail.php?id='.$id);


    $image = $_FILES['fimage']['temp'];
    $size = $_FILES['fimage']['size'];
    $type = $_FILES['fimage']['type'];
}
