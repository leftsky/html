<?php
session_start();
?>
<?php require_once('mysqlcon.php'); ?>
<?php

$term = $_GET['term'];
if ($term == null) {
    ?>
    <script>
        window.location.href = "index.php";
    </script>
    <?php
}

switch ($term) {
    case 2:
        $artcleName = "产品";
        break;
    case 0:
        $artcleName = "文章";
        break;
    case -1:
        $artcleName = "特殊文章";
        break;
}

$sqlStr = "SELECT * FROM posts WHERE post_status=" . $term;
$query = $mysqlcon->query($sqlStr);
$user_arr = "";
while ($row = $query->fetch_object()) {
    $user_arr[] = $row;
}
$arr = json_decode(json_encode($user_arr, JSON_UNESCAPED_UNICODE), true);
$num = count($arr);
?>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>文章管理</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet"/>
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet"/>
    <!-- Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">
</head>

<body>
<script src="left.js"></script>
<div><?php require_once('navtop.php'); ?></div>
<!--/. NAV TOP  -->
<div><?php require_once('navside.php'); ?></div>
<!-- /. NAV SIDE  -->

<div id="page-wrapper">
    <div class="header">
        <h1 class="page-header">
            所有<?php echo $artcleName ?>
            <small>开始编辑吧！</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">文章</a></li>
            <li class="active">所有<?php echo $artcleName ?></li>
        </ol>

    </div>
    <div id="page-inner">
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        现有的所有<?php echo $artcleName ?>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="tagsShow">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>题目</th>
                                        <th>查看</th>
                                        <th>编辑</th>
                                        <?php
                                        if ($term != -1) {
                                            ?>
                                            <th>删除</th>
                                            <?php
                                        }
                                        ?>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    for ($i = 0; $i < $num; ++$i) {
                                        if ($num == 1 || $num == 1)
                                            break;
                                        ?>
                                        <tr>
                                            <td><?php echo $arr[$i]['id'] ?></td>
                                            <td><?php echo $arr[$i]['post_title'] ?></td>
                                            <td><a href="readArtcle.php?artcleId=<?php
                                                echo $arr[$i]['id'] ?>" )>查看</a></td>
                                            <td><a href="update-post.php?artcleId=<?php
                                                echo $arr[$i]['id'] ?>&&thing=<?php
                                                echo $term == 2 ? "-thing" : ""?>" )>编辑</a></td>
                                            <?php
                                            if ($term != -1) {
                                                ?>
                                                <td><a href="javascript:delArtcleById(<?php
                                                    echo $arr[$i]['id'] ?>,'tagsShow')" )>删除</a></td>
                                                <?php
                                            }
                                            ?>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <script src='jquery/jquery.min.js'></script>
                            <script src='allArtcles.js'></script>
                            <script>
                                // getAllArtcles('tagsShow');
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>


<script src="assets/js/easypiechart.js"></script>
<script src="assets/js/easypiechart-data.js"></script>

<script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>

<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>

<script>

</script>

</body>

</html>