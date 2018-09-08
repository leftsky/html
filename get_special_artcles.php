
<?php
    ini_set("display_errors", 0);
    error_reporting(E_ALL ^ E_NOTICE);
    error_reporting(E_ALL ^ E_WARNING);
    // $spName="公司简介";
    if($spName) {

        require_once('./admin/mysqlcon.php');
        $mysqli = $mysqlcon;

        $sqlStr = "SELECT post_content FROM posts WHERE post_mime_type=" 
                    . "(SELECT id FROM term WHERE tagName='" 
                    . $spName . "')";
        // echo $sqlStr;
        $query = $mysqli->query($sqlStr);
        $arr = $query->fetch_array();
        echo $arr['post_content'];
    }
?>
