<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Note there is no responsive meta tag here -->
    <title>佛山市众焱鑫机械构件有限公司</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="swiper/dist/css/swiper.min.css" rel="stylesheet">
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
                <form action="search.php">
                    <input class="search-input" type="text" name="scStr" placeholder="搜索关键词">

                    <button class="icon-search"><img src="images/icon-search.png"></button>
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
                <li class="first active">
                    <a href="index.php">首页</a>
                </li>
                <?php require_once('navbar.php'); ?>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner index-banner" role="listbox">
        <div class="item active">
            <img src="images/img-banner.png" alt="...">
        </div>
        <div class="item">
            <img src="images/img-banner.png" alt="...">
        </div>
    </div>
</div>
<div class="index-module bg-module">
    <div class="container module-center">
        <div class="page-header">
            <h1>
                <span class="zch"><strong>关于我们</strong></span>
                <span class="eng letter-spacing5 opacity1">ABOUTUS</span>
            </h1>
            <p class="lead">所谓“精诚所致，金石为开”，众焱鑫机械要“诚+信”，讲究的是诚实为本，言行一致 </p>
        </div>
        <div class="row">
            <div class="col-xs-6 about-info">
                
                <?php
                        $spName = "公司简介";
                        require("get_special_artcles.php");
                        ?>
                <div class="row clum">
                    <div class="col-xs-3">
                        <div class="box">
                            <a href="aboutus.php"><img src="images/icon-clum-01.png"></a>
                            <a href="aboutus.php"><img src="images/icon-clum-01-on.png"></a>
                        </div>
                        <div class="center-block"><a href="">企业文化</a></div>
                    </div>
                    <div class="col-xs-3">
                        <div class="box">
                            <a href="aboutus.php"><img src="images/icon-clum-02.png"></a>
                            <a href="aboutus.php"><img src="images/icon-clum-02-on.png"></a>
                        </div>
                        <div class="center-block"><a href="">服务优势</a></div>
                    </div>
                    <div class="col-xs-3">
                        <div class="box">
                            <a href="aboutus.php"><img src="images/icon-clum-03.png"></a>
                            <a href="aboutus.php"><img src="images/icon-clum-03-on.png"></a>
                        </div>
                        <div class="center-block"><a href="">荣誉资质</a></div>
                    </div>
                    <div class="col-xs-3">
                        <div class="box">
                            <a href="aboutus.php"><img src="images/icon-clum-04.png"></a>
                            <a href="aboutus.php"><img src="images/icon-clum-04-on.png"></a>
                        </div>
                        <div class="center-block"><a href="">精彩瞬间</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <img src="images/img-module-center.png">
            </div>
        </div>
    </div>
</div>
<div class="index-module module-three">
    <div class="page-header">
        <h1>
            <span class="zch"><strong>产品中心</strong></span>
            <span class="eng opacity5">PRODUCTS</span>
        </h1>
        <p class="lead">所谓“精诚所致，金石为开”，众焱鑫机械要“诚+信”，讲究的是诚实为本，言行一致 </p>
    </div>
    <div class="container index-products">
        <!-- Nav tabs -->
        <!-- <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">机架机座产品</a>
            </li>
            <li role="presentation" class=""><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">机柜机箱产品</a>
            </li>
            <li role="presentation" class=""><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">外壳外罩产品</a>
            </li>
            <li role="presentation" class=""><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">非标其他产品</a>
            </li>
        </ul> -->
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
                        if ($arr[$i]['post_title'] == "")
                            break;
                        $urls = explode(";", $arr[$i]['post_main_url']);
                        ?>
                        <div class="item">
                            <div class="box">
                                <a class="pro-name" href="pro-detail.php?id=<?php
                                echo $arr[$i]['id'] ?>"><?php
                                    echo $arr[$i]['post_title'] == "" ? "此类别还没有文章或产品" : $arr[$i]['post_title'] ?></a>
                                <a href=""><img style="width: 287px; height: 287px" src="<?php
                                    echo $urls[0] == "" ? "images/img-index-product.jpg" : $urls[0]
                                    ?>"></a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <!-- <ul class="paging">
                    <li class="pading-btn prev"><a href="products.php?page=<?php
                        //echo $page - 1 ?>&&termNo=<?php
                        //echo $termNo ? $termNo : ""
                        ?>">上一页</a></li>
                    <li><a class="active" href="#"><?php //echo $page ?></a></li>
                    <li class="pading-btn next"><a href="products.php?page=<?php
                        //echo $page >= $num / 8 ? $page : $page + 1 ?>&&termNo=<?php
                        //echo $termNo ? $termNo : ""
                        ?>">下一页</a></li>
                </ul> -->
            </div>

        </div>
    </div>
</div>
<div class="index-module module-four">
    <div class="page-header">
        <h1>
            <span class="zch">我们的<strong>优势</strong></span>
            <span class="eng opacity1">ADVANTAGE</span>
        </h1>
        <p class="lead">所谓“精诚所致，金石为开”，众焱鑫机械要“诚+信”，讲究的是诚实为本，言行一致 </p>
    </div>
    <div class="container index-advantage">
        <div class="row">
            <div class="col-xs-3">
                <div class="box">
                    <img src="images/bg-adv-01.png">
                    <div class="text">
                        <p>质量优势质量优势</p>
                        <p>质量优势质量优势</p>
                    </div>
                </div>
                <div class="info">
                    <?php
                    $spName = "优势1";
                    require("get_special_artcles.php");
                    ?>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="box">
                    <img src="images/bg-adv-02.png">
                    <div class="text">
                        <p>质量优势质量优势</p>
                        <p>质量优势质量优势</p>
                    </div>
                </div>
                <div class="info">
                    <?php
                    $spName = "优势2";
                    require("get_special_artcles.php");
                    ?>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="box">
                    <img src="images/bg-adv-03.png">
                    <div class="text">
                        <p>质量优势质量优势</p>
                        <p>质量优势质量优势</p>
                    </div>
                </div>
                <div class="info">
                    <?php
                    $spName = "优势3";
                    require("get_special_artcles.php");
                    ?>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="box">
                    <img src="images/bg-adv-04.png">
                    <div class="text">
                        <p>质量优势质量优势</p>
                        <p>质量优势质量优势</p>
                    </div>
                </div>
                <div class="info">
                    <?php
                    $spName = "优势4";
                    require("get_special_artcles.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="index-module module-five">
    <div class="page-header">
        <h1>
            <span class="zch"><strong>新闻资讯</strong></span>
            <span class="eng opacity1">NEWS</span>
        </h1>
        <p class="lead">所谓“精诚所致，金石为开”，众焱鑫机械要“诚+信”，讲究的是诚实为本，言行一致 </p>
    </div>

    <div class="wrapper">
        <div class="index-news-bottom">
            <div class="col-xs-6 left">
                <div class="img-box">
                    <img src="images/img-news-left.jpg">
                    <!-- <div class="news-title-left"> -->
                    <!-- <div class="text-left"> -->
                    <!-- <a href="article.php">文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题</a> -->
                    <!-- </div> -->
                    <!-- <div class="text-right">发布时间：2017-08-31</div> -->
                    <!-- </div> -->
                </div>
            </div>
            <div class="col-xs-6 right">
                <?php
                $termNo = $_GET['termNo'];
                if ($termNo) {
                    $sqlStr = "SELECT * FROM posts WHERE post_status=0 AND post_mime_type=" . $termNo;
                } else {
                    $sqlStr = "SELECT * FROM posts WHERE post_status=0";
                }
                $query = $mysqli->query($sqlStr);
                $user_arr = "";
                while ($row = $query->fetch_object()) {
                    $user_arr[] = $row;
                }
                $arr = json_decode(json_encode($user_arr, JSON_UNESCAPED_UNICODE), true);
                for ($i = 0; $i < 3; ++$i) {
                    if ($arr[$i]['post_title'] == "")
                        break;
                    ?>
                    <div class="news-right">
                        <img class="news-right-img" src="images/img-news-right-0<?php
                        echo $i + 1 ?>.png">
                        <div class="news-right-title">
                            <a href="article.php?artId=<?php
                            echo $arr[$i]['id'] ?>" class="title"><?php
                                echo $arr[$i]['post_title'] ?></a>
                            <!-- <a href="article.php?artId=<?php
                            //echo $arr[$i]['id'] ?>" class="info"><?php
                                //echo $arr[$i]['post_content'] ?></a> -->
                        </div>
                    </div>
                    <?php
                }
                ?>
                <!-- <div class="news-right">
                    <img class="news-right-img" src="images/img-news-right-01.png">
                    <div class="news-right-title">
                        <a href="article.php" class="title">文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题</a>
                        <a href="article.php" class="info">文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容文字内容</a>
                    </div>
                </div>
                <div class="news-right">
                    <img class="news-right-img" src="images/img-news-right-02.png">
                    <div class="news-right-title">
                        <a href="article.php" class="title">文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题</a>
                        <a href="article.php" class="info">文字内容文字内容文字内容文字内容文字内容文字内容文字内容</a>
                    </div>
                </div>
                <div class="news-right">
                    <img class="news-right-img" src="images/img-news-right-03.png">
                    <div class="news-right-title">
                        <a href="article.php" class="title">文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题</a>
                        <a href="article.php" class="info">文字内容文字内容文字内容文字内容文字内容文字内容文字内容</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- /container -->
<?php require_once('tail.php'); ?>
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
    jQuery(document).ready(function ($) {
        $('.carousel').carousel({
            interval: 5000
        })
    });
</script>
</html>
