<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

if (isset($_POST['create'])) {
    $customer = trim($_POST['customer']);
    $user = trim($_POST['user']);
    $date = trim($_POST['date']);


    $table = 'advertise';
    $field = array('customer_id', 'user_id', 'date');
    $value = array($customer, $user, $date);
    echo create($table, $field, $value);

    $_SESSION['create'] = 'You transferred successful!!';
//    header('location:advertises.php');
}
