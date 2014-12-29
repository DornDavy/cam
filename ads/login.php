<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password = md5($password);
    $login = login($email, $password);
    if ($login) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['success'] = "You are log in successful";
        header('location:content.php');
    } else {
        $_SESSION['filed'] = 'Please check you email and password again';
        header('location:index.php');
    }

}


