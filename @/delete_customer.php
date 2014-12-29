<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $table = 'customer';
    $field = 'id';
    destroy($table, $field, $id);

    $_SESSION['destroy'] = 'You Deleted successful!!';
    header('location:customer.php');
}