

<?php
    ini_set("display_errors", 0);
    error_reporting(E_ALL ^ E_NOTICE);
    error_reporting(E_ALL ^ E_WARNING);
    $id = $_GET['id'];
    if(!$id) {
        // echo $artId;
        $id = $artId;
    }
    if($id) {
        $mysqli = new mysqli('huadong.leftsky.top', 'zyjx', 'zyjx', 'zyjx', 3306);

        if (!$mysqli) {
            die('Could not connect: ' . mysql_error());
        }
        $mysqli->query("SET NAMES utf8");
        if ($mysqli->connect_error) {
            //echo 'mysqli: ';
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }

        if (mysqli_connect_error()) {
            //echo 'mysql_connect_error(): ';
            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }

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
    <title>ZYX</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="swiper/dist/css/swiper.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/non-responsive.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
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
                    <?php require_once('navbar.php');?>
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
                    <div class="big"><img src=""></div>
                    <div class="swiper-container pro-container">
                        <div class="swiper-wrapper pro-wrapper">
                            <?php 
                                $urls = explode(";", $post_main_url);
                                $num = count($urls);
                                for ($i = 0; $i < $num; ++$i) {
                                    ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo $urls[$i]?>">
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
    <div class="footer">
        <div class="footer-bar">
            <div class="container module-center">
                <span>友情链接：</span>
                <?php require_once('friendlink.php');?>
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
                            <p>电话： 0757-2381010    0757-23810505   传真：0757-23810505</p>
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
    <script src="swiper/dist/js/swiper.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/global.js"></script>
    <script type="text/javascript">
        var mySwiper = new Swiper('.swiper-container',{
            // prevButton:'.swiper-button-prev',
            // nextButton:'.swiper-button-next',
            slidesPerView : 5,
            spaceBetween : 5,
        })
        jQuery(document).ready(function($) {
            $(".pro-wrapper .swiper-slide img").bind('click', function(event) {
                var imgSrc = $(this).attr("src");
                var img = "<img src='"+imgSrc+"' alt='' />";
                $(".big").html(img)
            });
            $(".pro-wrapper .swiper-slide").click(function(event) {
                $(".pro-wrapper .swiper-slide").removeClass('on')
                $(this).addClass('on')
            });
        });
    </script>
</html>
