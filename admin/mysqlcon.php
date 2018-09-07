<?php
    $mysqlcon = new mysqli('huadong.leftsky.top', 'zyjx', 'zyjx', 'zyjx', 3306);

    if (!$mysqlcon) {
        die('Could not connect: ' . mysql_error());
    }
    $mysqlcon->query("SET NAMES utf8");
    if ($mysqlcon->connect_error) {
        //echo 'mysqli: ';
        die('Connect Error (' . $mysqlcon->connect_errno . ') ' . $mysqlcon->connect_error);
    }

    if (mysqli_connect_error()) {
        //echo 'mysql_connect_error(): ';
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }
?>