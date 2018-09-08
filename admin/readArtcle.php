

<?php
    ini_set("display_errors", 0);
    error_reporting(E_ALL ^ E_NOTICE);
    error_reporting(E_ALL ^ E_WARNING);
    $id = $_GET['artcleId'];
    if(!$id) {
        // echo $artId;
        $id = $artId;
    }
    if($id) {

        require_once('mysqlcon.php');
        $mysqli = $mysqlcon;

        $sqlStr = "SELECT post_content FROM posts WHERE id=" . $id;
        // echo $sqlStr;
        $query = $mysqli->query($sqlStr);
        $arr = $query->fetch_array();
        echo $arr['post_content'];
    }
?>
