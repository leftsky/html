<?php session_start(); 
?>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>类别管理</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">
</head>

<body>
    <script src="left.js"></script>
    <div id="wrapper">
        <div><?php require_once('navtop.php');?></div>
        <!--/. NAV TOP  -->
        <div><?php require_once('navside.php');?></div>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    类别管理 <small>网站的调理 此出</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">文章</a></li>
                    <li class="active">类别管理</li>
                </ol>

            </div>
            <div id="page-inner">
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                添加新类别
                            </div>
                            <div class="panel-body">
                                <div class="control-group">
                                    <label class="control-label" for="edit-tag">分类名</label>
                                    <div class="controls">
                                        <input id="edit-tag" type="text" style="height:32px" />
                                    </div>
                                    <label class="control-label" for="edit-tag-father">父分类名</label>
                                    <div class="controls">
                                        <input id="edit-tag-father" type="text" style="height:32px" />
                                    </div>
                                </div>
                                <button onclick="addTag('edit-tag','edit-tag-father')" type="button" class="btn btn-default">确认添加</button>
                                <div class="text-right">
                                    尝试添加一个吧 <i class="fa fa-arrow-circle-right"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                所有类别
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div id="tagsShow">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S No.</th>
                                                    <th>First Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>John</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <script src='jquery/jquery.min.js'></script>
                                    <script src='edit-tags.js'></script>
                                    <script>
                                        getTagsLoop('tagsShow');
                                    </script>
                                    <div class="text-right">
                                            tip: 删除效果连带其子类别<i class="fa fa-arrow-circle-up"></i>
                                        </div>
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