<?php

ini_set("display_errors", 0);
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);

$id = $_GET['artcleId'];
if ($id) {

    require_once('mysqlcon.php');
    $mysqli = $mysqlcon;

    $sqlStr = "SELECT post_content,post_author,post_title,post_mime_type FROM posts WHERE id=" . $id;
    // echo $sqlStr;
    $query = $mysqli->query($sqlStr);
    $arr = $query->fetch_array();
    // echo $arr['post_content'];
    $artContent = $arr['post_content'];
    $artAuthor = $arr['post_author'];
    $artTitle = $arr['post_title'];
    $artTypeNo = $arr['post_mime_type'];

    // $sqlStr = "SELECT * FROM term WHERE id=" . $artTypeNo;
    // $query = $mysqli->query($sqlStr);
    // $arr = $query->fetch_array();
    // $artTypeName = $arr['tagName'];
    $artButton = "提交文章修改";
    $funName = "update_post";
} else {
    $artContent = "<h1>文章内标题</h1><p>文章内容</p>";
    $artAuthor = "";
    $artTitle = "";
    $artTypeNo = "";
    // $artTypeName = "请选择类别";
    $artButton = "提交文章";
    $funName = "post_new";
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0"/>


    <link rel="stylesheet" type="text/css" href="bootstrap3/css/bootstrap.min.css">
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap3/js/bootstrap.min.js"></script>

    <script src="post-new.js"></script>


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


    <style>
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu > .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
            margin-left: -1px;
            -webkit-border-radius: 0 6px 6px 6px;
            -moz-border-radius: 0 6px 6px;
            border-radius: 0 6px 6px 6px;
        }

        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }

        .dropdown-submenu > a:after {
            display: block;
            content: " ";
            float: right;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 5px 0 5px 5px;
            border-left-color: #ccc;
            margin-top: 5px;
            margin-right: -10px;
        }

        .dropdown-submenu:hover > a:after {
            border-left-color: #fff;
        }

        .dropdown-submenu.pull-left {
            float: none;
        }

        .dropdown-submenu.pull-left > .dropdown-menu {
            left: -100%;
            margin-left: 10px;
            -webkit-border-radius: 6px 0 6px 6px;
            -moz-border-radius: 6px 0 6px 6px;
            border-radius: 6px 0 6px 6px;
        }
    </style>

</head>

<body style="background:#EDEDED">
<div id="editor">
        <textarea id='edit' style="margin-top: 30px;" placeholder="Type some text">
            
            <?php
            echo $artContent;
            ?>
        </textarea>

    <div style="float: right">
        <a id="modal-946603" href="#modal-container-946603" role="button" class="btn"
           data-toggle="modal"><?php echo $artButton ?></a>
    </div>

    <div class="modal fade" id="modal-container-946603" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">
                        文章属性
                    </h4>
                </div>
                <div class="modal-body">
                    <!-- <div id='selectDiv'></div>
                    <script>
                        getSelect('selectDiv', '<?php //echo $artTypeName?>', '<?php //echo $artTypeNo?>')
                    </script> -->
                    <div class="control-group">
                        <label class="control-label" for="post_author">作者</label>
                        <div class="controls">
                            <input id="post_author" type="text" value="<?php echo $artAuthor ?>"/>
                        </div>
                        <label class="control-label" for="post_title">标题(可被检索的标题)</label>
                        <div class="controls">
                            <input id="post_title" type="text" value="<?php echo $artTitle ?>"/>
                        </div>
                        <!-- <label class="control-label" for="post_main_url" >文章代表图</label>
                            <div class="controls">
                                <input id="post_main_url" type="text" value="<?php echo $artUrl ?>"/>
                            </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary"
                            onclick="<?php echo $funName ?>('edit'<?php
                            if ($_GET['artcleId']) {
                                echo ',';
                                echo $_GET['artcleId'];
                                echo ',';
                                echo $artTypeNo;
                            }
                            ?>)" data-dismiss="modal">确认
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

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

<script>
    urls = ""
    $(function () {
        $('#edit')
        // .on('froalaEditor.initialized', function (e, editor) {
        //     $('#edit').parents('form')
        //         .on('submit', function () {
        //             console.log($('#edit').val());
        //             return false;
        //         })
        // })
            .froalaEditor({
                imageUploadURL: 'upload_image.php',
                enter: $.FroalaEditor.ENTER_P,
                placeholderText: null,
                language: 'zh_cn'
            })
    });
</script>
</body>

</html>