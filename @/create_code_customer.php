<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

if (isset($_POST['create'])) {
    echo $kh_name = trim($_POST['kh_name']);
    echo $en_name = trim($_POST['en_name']);
    echo $sex = trim($_POST['sex']);
    echo $dob = trim($_POST['dob']);
    echo $pob = trim($_POST['pob']);
    echo $address = trim($_POST['address']);
    echo $email = trim($_POST['email']);
    echo $phone = trim($_POST['phone']);
    echo $fax = trim($_POST['fax']);

    $table = 'customer';
    $field = array('name_kh', 'name_en', 'sex', 'dob', 'pob', 'address', 'email', 'phone', 'fax');
    $value = array($kh_name, $en_name, $sex, $dob, $pob, $address, $email, $phone,$fax);
    create($table, $field, $value);
    $_SESSION['create'] = 'You transferred successful!!';
    header('location:customer.php');
}
