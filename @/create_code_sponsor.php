<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";


if (isset($_POST['create'])) {
    echo $admin = trim($_POST['admin']);
    echo $company= trim($_POST['company']);
    echo $customer = trim($_POST['customer']);
    echo $date = trim($_POST['date']);

    $table = 'sponsor';
    $field = array('date','company_id', 'admin_id', 'customer_id');
    $value = array($date,$admin,$company,$customer);
    echo create($table, $field, $value);

    $_SESSION['create'] = 'You transferred successful!!';
    header('location:sponsor.php');
}
