<?php 
    session_start();
    echo $_SESSION[$_POST['key']];
?>