<?php
include './db.php';
function select($table, $type = NULL)
{
    global $db;
    if ($type != NULL) {
        $sql = "SELECT * FROM `$table` WHERE `type` = '$type'";
        // $result = mysqli_query($db, $sql);
        // return mysqli_fetch_object($result);
        return mysqli_query($db, $sql);
    } else {
        $sql = "SELECT * FROM `$table`";
        return mysqli_query($db, $sql);
    }
}
function selectId($table, $id = NULL)
{
    global $db;
    if ($id != NULL) {
        $sql = "SELECT * FROM `$table` WHERE id=$id";
        $result = mysqli_query($db, $sql);
        return mysqli_fetch_object($result);
    } else {
        $sql = "SELECT * FROM `$table`";
        return mysqli_query($db, $sql);
    }
}
