<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>

<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";


if (isset($_POST['create'])) {
   echo $kh_name = trim($_POST['kh_name']);
    $en_name = trim($_POST['en_name']);
    $sex = trim($_POST['sex']);
    $dob = trim($_POST['dob']);
    $pob = trim($_POST['pob']);
    $email = trim($_POST['email']);
    $tel = trim($_POST['tel']);
    $address = trim($_POST['address']);
    $date =trim($_POST['date']);
    $table = 'user';
    $password = trim($_POST['password']);
    $con_password = trim($_POST['con_password']);
    if ($password!=$con_password) {
        $_SESSION['filed'] = 'Please check your information that you input again!!';
        header('location:create_user.php');
    } else {
        $check = existing($table,'email',$email);
        if ($check) {
            $_SESSION['email'] = $email;
            $_SESSION['kh_name'] = $kh_name;
            $_SESSION['en_name'] = $en_name;
            $_SESSION['sex'] = $sex;
            $_SESSION['dob'] = $dob;
            $_SESSION['pob'] = $pob;
            $_SESSION['tel'] = $tel;
            $_SESSION['address'] = $address;
            $_SESSION['date'] = $date;
            $_SESSION['filed'] = 'The Email  :'.$email.' has been taking please try with another Email.';
            header('location:create_user.php');
        } else {
            $password = md5($password);
            $field = array('kh_name', 'en_name', 'pass','sex','dob','pob','email','phone','address','register_date');
            $value = array($kh_name,$en_name,$password,$sex,$dob,$pob,$email,$tel,$address,$date);
            create($table, $field, $value);

            $_SESSION['create'] = 'You transferred successful!!';
            header('location:user.php');
        }

    }


}
?>
</body>
</html>
