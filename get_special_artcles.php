
<?php
    ini_set("display_errors", 0);
    error_reporting(E_ALL ^ E_NOTICE);
    error_reporting(E_ALL ^ E_WARNING);
    // $spName="公司简介";
    if($spName) {
        $mysqli = new mysqli('huadong.leftsky.top', 'zyjx', 'zyjx', 'zyjx', 3306);

        if (!$mysqli) {
            die('Could not connect: ' . mysql_error());
        }
        $mysqli->query("SET NAMES utf8");
        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }

        $sqlStr = "SELECT post_content FROM posts WHERE post_mime_type=" 
                    . "(SELECT id FROM term WHERE tagName='" 
                    . $spName . "')";
        // echo $sqlStr;
        $query = $mysqli->query($sqlStr);
        $arr = $query->fetch_array();
        echo $arr['post_content'];
    }
?>
