<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Note there is no responsive meta tag here -->
    <title>ZYX</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/non-responsive.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link href="css/global.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Fixed navbar -->
<div class="top-bar">
    <div class="container">
        <div class="left">您好，欢迎来到佛山市顺德区众焱鑫机械构件有限公司</div>
        <div class="right">
            <span class="text">匠心筑梦，继往开来</span>
            <div class="search-box">
                <form>
                    <input class="search-input" type="text" name="search" placeholder="搜索关键词">

                    <button type="submit" class="icon-search"><img src="images/icon-search.png"></button>
                </form>
            </div>
        </div>
    </div>
</div>
<nav class="index navbar">
    <div class="container">
        <div class="navbar-header">
            <!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png">
            </a>
        </div>
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        <div id="navbar">
            <ul class="nav navbar-nav">
                <li class="first">
                    <a href="index.php">首页</a>
                </li>
                <?php require_once('navbar.php'); ?>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
<div class="index-banner child-banner">
    <img src="images/img-banner-child.jpg">
</div>
<div class="index-module child-module">
    <div class="container index-products child-products">
        <!-- Nav tabs -->
        <!-- <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">工程机械打样</a>
            </li>
            <li role="presentation" class=""><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">陶瓷机械打样</a>
            </li>
            <li role="presentation" class=""><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">食品机械打样</a>
            </li>
            <li role="presentation" class=""><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">非标设备打样</a>
            </li>
        </ul> -->
        <div class="module-three">
            <div class="page-header">
                <h1>
                    <span class="zch">-  产品列表  -</span>
                    <span class="eng opacity1">produces list</span>
                </h1>
            </div>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="pro-list">
                    <?php
                    ini_set("display_errors", 0);
                    error_reporting(E_ALL ^ E_NOTICE);
                    error_reporting(E_ALL ^ E_WARNING);
                    $page = $_GET['page'];
                    $termNo = $_GET['termNo'];
                    $page = !$page || $page < 1 ? 1 : $page;
                    if ($termNo) {
                        $sqlStr = "SELECT * FROM posts WHERE post_status=2 AND post_mime_type=" . $termNo;
                    } else {
                        $sqlStr = "SELECT * FROM posts WHERE post_status=2";
                    }
                    $query = $mysqli->query($sqlStr);
                    $user_arr = "";
                    while ($row = $query->fetch_object()) {
                        $user_arr[] = $row;
                    }
                    $arr = json_decode(json_encode($user_arr, JSON_UNESCAPED_UNICODE), true);
                    $num = count($arr);
                    for ($i = ($page - 1) * 8; $i < $num && $i < $page * 8; ++$i) {
                        if($arr[$i]['post_title'] == "")
                            break;
                        $urls = explode(";", $arr[$i]['post_main_url']);
                        ?>
                        <div class="item">
                            <div class="box">
                                <a class="pro-name" href="pro-detail.php?id=<?php 
                                    echo $arr[$i]['id']?>"><?php
                                    echo $arr[$i]['post_title'] == "" ? "此类别还没有文章或产品" : $arr[$i]['post_title'] ?></a>
                                <a href=""><img src="<?php
                                    echo $urls[0] == "" ? "images/img-index-product.jpg" : $urls[0]
                                    ?>"></a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <ul class="paging">
                    <li class="pading-btn prev"><a href="products.php?page=<?php
                        echo $page - 1 ?>&&termNo=<?php
                        echo $termNo ? $termNo : ""
                        ?>">上一页</a></li>
                    <li><a class="active" href="#"><?php echo $page ?></a></li>
                    <li class="pading-btn next"><a href="products.php?page=<?php
                        echo $page >= $num / 8 ? $page : $page + 1 ?>&&termNo=<?php
                        echo $termNo ? $termNo : ""
                        ?>">下一页</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /container -->
<div class="footer">
    <div class="footer-bar">
        <div class="container module-center">
            <span>友情链接：</span>
            <?php require_once('friendlink.php'); ?>
        </div>
    </div>
    <div class="footer-body">
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="eQ-code">
                        <div class="img-box"></div>
                        <p>手机版</p>
                    </div>
                    <div class="eQ-code">
                        <div class="img-box"></div>
                        <p>扫一扫二维码<br>关注公众号</p>
                    </div>
                </div>
                <div class="col-xs-4 contactus">
                    <div class="title">联系我们</div>
                    <div class="company">
                        <div class="name">佛山市众焱鑫机械构件有限公司</div>
                        <div class="info">
                            <p>地址： 广东省.佛山市.顺德区.陈村镇.广隆工业区.兴业十五路四号</p>
                            <p>电话： 0757-2381010  0757-23810505 传真：0757-23810505</p>
                            <p>邮箱：21591XXX@qq.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 aftersale">
                    <div class="title">售后服务</div>
                    <div class="contact">
                        <p>全国统一服务热线：<span>0757-2381-010</span></p>
                    </div>
                    <button class="refer">在线咨询</button>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="left">版权所有 © 2014-2018 佛山市众焱鑫机械构件有限公司</div>
            <div class="right">粤ICP备170012XXX号-1 技术支持：众焱鑫机械</div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
</script>
<script src="bootstrap/js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/global.js"></script>
<script type="text/javascript">
</script>
</html>
