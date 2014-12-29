<?php
session_start();
include '../include/config.php';
include '../include/libraries.php';
include 'restrict.php';
$arr = [];
$sql = "select * from customer";
mysql_query("set character_set_results='utf8'" );
$query = mysql_query($sql);

while ($row=mysql_fetch_assoc($query)) {
    $arr[] = $row;
}
echo json_encode($arr);