<?php
$sql = mysql_connect('localhost', 'root', '') or mysql_error();
mysql_select_db('ads',$sql);



//$sql1=pg_connect("host=localhost port=5432 dbname=ads user=postgres password=davy123456");
//
//$query=pg_query($sql1,"select *from location");
//
//while ($row=pg_fetch_assoc($query)) {
//	echo $row['name'];
//}
