<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

if (isset($_POST['update'])) {

    $id= trim($_POST['s_id']);
    $s_id= trim($_POST['id']);
    $start = trim($_POST['start_date']);
    $end = trim($_POST['end_date']);
    $status = trim($_POST['status']);
    $position = trim($_POST['position']);
    $qty = trim($_POST['qty']);
    $price = trim($_POST['price']);
    $des = trim($_POST['des']);
    $image = trim($_POST['image']);

    $table = 'sponsor_detail';
    $field = array('start_date','end_date','qty','price','sponsor_id','status','position','description','photo');
    $value = array($start,$end,$qty,$price,$s_id,$status,$position,$des,$image);

    echo update($table, $field, $value, 'id', $s_id);

    $_SESSION['update'] = 'You transferred to update successful!!';
    header('location:sponsor_detail.php?id='.$id);
}