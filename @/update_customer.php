<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

if (isset($_POST['update'])) {

    $id = trim($_POST['id']);
    $kh_name = trim($_POST['kh_name']);
    $en_name = trim($_POST['en_name']);
    $sex = trim($_POST['sex']);
    $dob = trim($_POST['dob']);
    $pob = trim($_POST['pob']);
    $address = trim($_POST['address']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $fax = trim($_POST['fax']);
    $table = 'customer';
    $field = array('name_kh', 'name_en', 'sex', 'dob', 'pob', 'address', 'email', 'phone', 'fax');
    $value = array($kh_name, $en_name, $sex, $dob, $pob, $address, $email, $phone,$fax);
    echo update($table, $field, $value, 'id', $id);

    $_SESSION['update'] = 'You transferred to update successful!!';
    header('location:customer.php');
}