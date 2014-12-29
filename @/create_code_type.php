<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";


if (isset($_POST['create'])) {
    $name = trim($_POST['name']);
    $category = trim($_POST['category']);
    $file=$_FILES['image']['tmp_name'];
    /*Image file*/
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);
    /*Getting Path*/
    move_uploaded_file($_FILES["image"]["tmp_name"],/*Image path*/"../asset/img/" . $_FILES["image"]["name"]);
    $image=$_FILES["image"]["name"];
    echo $image;

    $table = 'types';
    $field = array('type_name', 'photo', 'cate_id');
    $value = array($name,$image, $category);
    echo create($table, $field, $value);

    $_SESSION['create'] = 'You transferred successful!!';
    header('location:type.php?id='.$category);
}
