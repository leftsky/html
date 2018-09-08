<?php session_start(); 
    $_SESSION['userName'] = "Hello world";
    
    require_once('mysqlcon.php');
    $mysqli = $mysqlcon;

    $sqlStr = "SELECT * FROM msg ORDER BY date DESC";
    $query = $mysqli->query($sqlStr);
    // while ($row = $query->fetch_object()){
    //     $arr = json_decode( json_encode( $row),true);
    //     // print_r($arr);
    //     echo $arr['id'];
    // }
?>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>消息箱</title>
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
    <style>
        .unReaded {
            float: right;
            display: inline-block;
            min-width: 10px;
            padding: 4px 7px;
            font-size: 11px;
            font-weight: 700;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            background-color: #F09B22;
            border-radius: 10px;
        }

        .readed {
            float: right;
            display: inline-block;
            min-width: 10px;
            padding: 4px 7px;
            font-size: 11px;
            font-weight: 700;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            background-color: rgb(54, 233, 54);
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <script src="left.js"></script>
    <div id="wrapper">
        <div>
            <?php require_once('navtop.php');?>
        </div>
        <!--/. NAV TOP  -->
        <div>
            <?php require_once('navside.php');?>
        </div>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    消息箱 <small>了解人声</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">消息箱</li>
                </ol>

            </div>
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                消息箱
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <?php
                                        while ($row = $query->fetch_object()){
                                            $arr = json_decode( json_encode( $row),true);
                                    ?>
                                    <a id="modal-<?php echo $arr['id']?>" href="#modal-container-<?php echo $arr['id']?>" 
                                        role="button" class="list-group-item" data-toggle="modal" >
                                        <span class="<?php 
                                            if($arr['is_read'] == 0){
                                                echo "unReaded";
                                            }
                                            else {
                                                echo "readed";
                                            }
                                        ?>"><?php echo $arr['date']?></span>
                                        <i class="fa fa-fw fa-comment" ></i> <?php echo substr($arr['msg'], 0, 8) . "...";?>
                                    </a>
                                    <div class="modal fade" id="modal-container-<?php echo $arr['id']?>" role="dialog" aria-labelledby="myModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="myModalLabel">
                                                        <?php echo $arr['date']?>
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <?php echo $arr['msg']?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                                    <button type="button" class="btn btn-primary" onclick=""
                                                        data-dismiss="modal">确认</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
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