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
    mysql_query("set character_set_results='utf8'" );
    return mysql_query($sql);

}
/*Update function*/
function update($table,$field,$value,$field_id,$id)
{
    $count=count($field)-1;
    $sql="update $table set ";
    for($i=0;$i<$count;$i++){
        $sql.="$field[$i]='$value[$i]',";
    }
    $sql.="$field[$i]='$value[$i]'";
    $sql.="where $field_id=$id";
    mysql_query("set character_set_results='utf8'" );
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
function existing($table,$field,$value)
{
    $sql = "SELECT COUNT(*) AS record FROM $table WHERE $field='$value'";
    $qry = @mysql_query($sql);
    $row = @mysql_fetch_assoc($qry);
    $count = $row['record'];
    if ($count) {
        return true;
    } else {
        return false;
    }

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





