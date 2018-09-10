<?php
ini_set("display_errors", 0);
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);
$id = $_GET['id'];
if (!$id) {
    // echo $artId;
    $id = $artId;
}
if ($id) {

    require_once('./admin/mysqlcon.php');
    $mysqli = $mysqlcon;

    $sqlStr = "SELECT * FROM posts WHERE id=" . $id;
    // echo $sqlStr;
    $query = $mysqli->query($sqlStr);
    $arr = $query->fetch_array();
}
$post_content = $arr['post_content'];
$post_excerpt = $arr['post_excerpt'];
$post_main_url = $arr['post_main_url'];
// echo $arr['post_content'];
?>

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
<div class="index-module">
    <div class="container">
        <div class="pro-head">
            <p>产品详情</p>
        </div>
        <div class="pro-main">
            <div class="pro-box">
                <?php
                $urls = explode(";", $post_main_url);
                ?>
                <div class="big"><img src="<?php echo $urls[0] ?>"></div>
                <div class="swiper-container pro-container">
                    <div class="swiper-wrapper pro-wrapper">
                        <?php
                        $num = count($urls);
                        for ($i = 0; $i < $num; ++$i) {
                            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $urls[$i] ?>">
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->
                </div>
            </div>
            <div class="pro-dero">
                <p class="pro-name">产品简介</p>
                <div class="pro-dero-text">
                    <?php echo $post_excerpt ?>
                </div>
            </div>
            <div class="pro-slide">
                <p class="pro-name">产品分类</p>
                <div class="type-box">
                    <a class="pro-type" href="">工程机械打样</a>
                    <a class="pro-type" href="">陶瓷机械打样</a>
                    <a class="pro-type" href="">食品机械打样</a>
                    <a class="pro-type" href="">非标设备打样</a>
                </div>
            </div>
        </div>
        <div class="pro-info">
            <div class="pro-head">
                <p>产品描述</p>
            </div>
            <div class="info">
                <?php echo $post_content ?>
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
<script src="swiper/dist/js/swiper.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script src="js/global.js"></script>
<script type="text/javascript">
    var mySwiper = new Swiper('.swiper-container', {
        // prevButton:'.swiper-button-prev',
        // nextButton:'.swiper-button-next',
        slidesPerView: 5,
        spaceBetween: 5,
    })
    jQuery(document).ready(function ($) {
        $(".pro-wrapper .swiper-slide img").bind('click', function (event) {
            var imgSrc = $(this).attr("src");
            var img = "<img src='" + imgSrc + "' alt='' />";
            $(".big").html(img)
        });
        $(".pro-wrapper .swiper-slide").click(function (event) {
            $(".pro-wrapper .swiper-slide").removeClass('on')
            $(this).addClass('on')
        });
    });
</script>
</html>
