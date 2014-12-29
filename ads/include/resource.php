<?php
include 'config.php';

class Resource {

    public function Retrive($table,$field)
    {
        $sql = 'select * from $table';
        @mysql_query("set character_set_results='utf8'" );
        $query = mysql_query($sql);
        while ($row=@mysql_fetch_array($query)) {
            echo '<option>'.$row['1'].'</option>';
        }

    }
    public function  lookup($table,$field)
    {
        $sql = "select * from $table";
        /*Set Khmer unicode*/
        mysql_query("set character_set_results='utf8'" );
        /*send to server*/
        $query = @mysql_query($sql);
        $i=1;
        while ($row=@mysql_fetch_array($query)) {
            echo '<option>'. $row[$field].'</option>';
        }

    }
/*Destroy Record*/
    public function destroy($table,$field_d,$value)
    {
        $sql = 'DELETE FROM $table WHERE $field_id=$value';
        @mysql_query($sql);

    }


    /*Create Record*/
    public function create($table,$field,$value)
    {
        $count = count($field) - 1;
        $sql = " insert into $table(" ;
        for ($i=0;$i<$count;$i++) {
            $sql .= $field[$i];
        }
        $sql = $field[$count] . " ) Values(";
        for ($i=0;$i<$count;$i++) {
            $sql .= "'$value[$i]'";
        }
        $sql .= "'$value[$count]'";
        mysql_query($sql);

    }

    public function update($table,$field,$value,$field_id,$id)
    {
        $count = count($field) - 1;
        $sql = "update $table SET";
        for ($i=0;$i<$count;$i++) {
            $sql .= $field[$i] . "='" . $value[$i] . "'";
        }
        $sql.=$field[$count]."='".$value[$count]."'";
        $sql .= 'where $field_id=$id';
        mysql_query($sql);

    }
}