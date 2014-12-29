<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";

unset($_SESSION['email']);
unset($_SESSION['password']);
//session_destroy();

$_SESSION['logout']='Your are logout successful!!';
header('location:index.php');