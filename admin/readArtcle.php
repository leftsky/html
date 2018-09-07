

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
        $mysqli = new mysqli('huadong.leftsky.top', 'zyjx', 'zyjx', 'zyjx', 3306);

        if (!$mysqli) {
            die('Could not connect: ' . mysql_error());
        }
        $mysqli->query("SET NAMES utf8");
        if ($mysqli->connect_error) {
            //echo 'mysqli: ';
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }

        if (mysqli_connect_error()) {
            //echo 'mysql_connect_error(): ';
            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }

        $sqlStr = "SELECT post_content FROM posts WHERE id=" . $id;
        // echo $sqlStr;
        $query = $mysqli->query($sqlStr);
        $arr = $query->fetch_array();
        echo $arr['post_content'];
    }
?>
