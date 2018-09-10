



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="froala_editornew/css/froala_editor.css">
<link rel="stylesheet" href="froala_editornew/css/froala_style.css">
<link rel="stylesheet" href="froala_editornew/css/plugins/code_view.css">
<link rel="stylesheet" href="froala_editornew/css/plugins/image_manager.css">
<link rel="stylesheet" href="froala_editornew/css/plugins/image.css">
<link rel="stylesheet" href="froala_editornew/css/plugins/table.css">
<link rel="stylesheet" href="froala_editornew/css/plugins/video.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">


<style>
    body {
        text-align: center;
    }

    div#editor {
        width: 81%;
        margin: auto;
        text-align: left;
    }
</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/froala_editor.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/align.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/image.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/link.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/table.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/video.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/url.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/plugins/entities.min.js"></script>
<script type="text/javascript" src="froala_editornew/js/languages/zh_cn.js"></script>


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
