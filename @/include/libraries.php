<?php
include 'config.php';
;
function lookup($table,$field,$id)
{
    $sql = "select * from $table";
    /*Set Khmer unicode*/
    mysql_query("set character_set_results='utf8'" );
    /*send to server*/
    $query = mysql_query($sql);
    while ($row=mysql_fetch_array($query)) {
       echo '<option value='.$row[$id].'>'.$row[$field].'</option>';
    }

}

//function select($table)
//{
//    $arr = [];
//    $sql = "select * from $table";
//    @mysql_query("set character_set_results='utf8'" );
//    $query = @mysql_query($sql);
//
//    while ($row=@mysql_fetch_assoc($query)) {
//        $arr[] = $row;
//    }
//    return json_encode($arr);
//}

function destroy($table,$field,$id)
{
    $sql = "delete from $table WHERE  $field=$id";
    @mysql_query($sql);

}

function create($table,$field,$value)
{
    $count = count($field) - 1;
    $sql = "INSERT INTO $table(";
    for ($i = 0; $i < $count; $i++) {
        $sql .= $field[$i] . ",";
    }
    $sql .= $field[$count] . ")

            Values(";
    for ($i = 0; $i < $count; $i++) {
        $sql .= "'$value[$i]',";
    }
    $sql .= "'$value[$count]')";
    return mysql_query($sql);

}

//function select_id($table,$field_id,$id,$field)
//{
//
//    if (isset($_GET['id'])) {
//        $sql = "select * from $table WHERE $field_id='$id' ";
//        $query = mysql_query($sql);
//
//        if ($row=mysql_fetch_assoc($query)) {
//            echo $row[$field];
//        }
//
//    }
//
//}
function update($table,$field,$value,$field_id,$id)
{
    $count=count($field)-1;
    $sql="update $table set ";
    for($i=0;$i<$count;$i++){
        $sql.="$field[$i]='$value[$i]',";
    }
    $sql.="$field[$i]='$value[$i]'";
    $sql.="where $field_id=$id";
    return mysql_query($sql);
}

function login($email,$pwd)
{
    $sql = "select * from admin WHERE email='$email' AND  pass='$pwd'";
    $query = @mysql_query($sql);

    $num = @mysql_num_rows($query);
    if ($num==1) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function session($session)
{
    if (isset($_SESSION[$session])) {
        $get_session = $_SESSION[$session];
        $count = 0;
        $count++;
        if ($count=1) {
            unset($_SESSION[$session]);
        }
     ?>
        <div class="<?php if ($session !='filed' ) {
            echo 'alert alert-success';
        } else {
            echo 'alert alert-danger';
        }?> alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></button>
            <?php echo $get_session; ?>
        </div>
<?php

    }

}
function  auto_select($table,$field,$value,$field_id){
    $sql = "SELECT * FROM $table";
    $query = mysql_query($sql);
    while($row = mysql_fetch_array($query)){
        $val =$row[$field_id];
        ?>
        <option <?php if($value == $val){ echo "SELECTED";}?> value="<?php echo $row[$field_id];?>">
            <?php echo $row[$field];?>
        </option>
    <?php
    }
}





