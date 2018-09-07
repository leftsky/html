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
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="index-banner child-banner">
        <img src="images/img-banner-child.jpg">
    </div>
    <div class="index-module child-module">
        <div class="container">
            <div class="article-box">
                <?php 
                    $artId = $_GET['artId'];
                    // echo $artId;
                    require("./admin/readArtcle.php");
                ?>
                <!-- <div class="article-header">
                    <h2 class="title_main">燃情六月天！2018建设行业峰会7大论坛抢鲜看燃情六月天！2018建设行业峰会7大论坛抢鲜看燃情六月天！2018建设行业峰会7大论坛抢鲜看</h2>
                </div>
                <div class="article">
                    电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现
                    电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现
                    <img src="images/img-banner.png">
                    电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现
                    电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故 ...些状况的出现
                </div> -->
            </div>
            <!-- <div class="article-bar">
                <div class="page-btn prev">
                    <span>上一篇</span>
                    <a href="">电焊机使用过程中不允许超载，否则将会因过热而烧毁电</a>
                </div>
                <div class="page-btn center">
                    <a href="news.php">新闻</a>
                </div>
                <div class="page-btn next">
                    <span>下一篇</span>
                    <a href="">电焊机使用过程中不允许超载，否则将会因过热而烧毁电</a>
                </div>
            </div> -->
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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/global.js"></script>
    <script type="text/javascript">
    </script>
</html>
