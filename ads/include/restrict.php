<?php
if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) {
    header('location:index.php');
} else {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $result = login($email, $password);
    if (!$result) {
        $_SESSION['filed'] = 'Please check you email and password again';
        header('location:index.php');
    }

}