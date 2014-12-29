<?php
include '../include/config.php';
$arr = [];
$sql = 'select * from location';
mysql_query("set character_set_results='utf8'" );
$query = mysql_query($sql);

while ($row=mysql_fetch_assoc($query)) {
    $arr[] = $row;
}

echo json_encode($arr);