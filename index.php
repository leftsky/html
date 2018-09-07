

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
                <li class="first active">
                    <a href="index.php">首页</a>
                </li>
                <?php require_once('navbar.php');?>
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
                <span class="zch">众焱鑫机械<strong>关于我们</strong></span>
                <span class="eng letter-spacing5 opacity1">ABOUTUS</span>
            </h1>
            <p class="lead">所谓“精诚所致，金石为开”，众焱鑫机械要“诚+信”，讲究的是诚实为本，言行一致 </p>
        </div>
        <div class="row">
            <div class="col-xs-6 about-info">
                <p>- 众焱鑫公司成立于2010年。是一家新兴设备制造商（大型专用设备）,和传统钣金业务服务商。</p>
                <p>-
                    众焱鑫公司，是以人为中心进行管理，以人为出发点，培育共同价值观，调动人的自觉性和积极性，主动性和创造性，最大程度地挖掘人的潜力。为寻求企业的长久持续发展，提高企业的管理水平和竞争能力，企业管理需求为逐步推进企业流程管理，制度规范和文化建设、建立企业核心价值观，实施并落实企业管理文化,凝聚认同企业愿景、使命、精神与价值观的各方人才，为企业的发展诚心与共！</p>

                <p class="last">- 是做人之本，更是企业成功之本。所谓“精诚所致，金石为开”，众焱鑫机械要“诚+信”，讲究的是诚实为本，言行一致...</p>

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
            <span class="zch">众焱鑫机械<strong>产品中心</strong></span>
            <span class="eng opacity5">PRODUCTS</span>
        </h1>
        <p class="lead">所谓“精诚所致，金石为开”，众焱鑫机械要“诚+信”，讲究的是诚实为本，言行一致 </p>
    </div>
    <div class="container index-products">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">机架机座产品</a>
            </li>
            <li role="presentation" class=""><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">机柜机箱产品</a>
            </li>
            <li role="presentation" class=""><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">外壳外罩产品</a>
            </li>
            <li role="presentation" class=""><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">非标其他产品</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="pro-list">
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="pro-list">
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
                <div class="pro-list">
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">
                <div class="pro-list">
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a class="pro-name" href="pro-detail.php">产品名称</a>
                            <a href=""><img src="images/img-index-product.jpg"></a>
                        </div>
                    </div>
                </div>
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
                    众焱鑫公司成立于2010年是一家新兴设备制造商（大型专用设备）,和传统钣金业务服务商。
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
                    众焱鑫公司成立于2010年是一家新兴设备制造商（大型专用设备）,和传统钣金业务服务商。
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
                    众焱鑫公司成立于2010年是一家新兴设备制造商（大型专用设备）,和传统钣金业务服务商。
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
                    众焱鑫公司成立于2010年是一家新兴设备制造商（大型专用设备）,和传统钣金业务服务商。
                </div>
            </div>
        </div>
    </div>
</div>
<div class="index-module module-five">
    <div class="page-header">
        <h1>
            <span class="zch">众焱鑫机械<strong>新闻资讯</strong></span>
            <span class="eng opacity1">NEWS</span>
        </h1>
        <p class="lead">所谓“精诚所致，金石为开”，众焱鑫机械要“诚+信”，讲究的是诚实为本，言行一致 </p>
    </div>

    <div class="wrapper">
        <div class="index-news-bottom">
            <div class="col-xs-6 left">
                <div class="img-box">
                    <img src="images/img-news-left.jpg">
                    <div class="news-title-left">
                        <div class="text-left">
                            <a href="article.php">文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题文字标题</a>
                        </div>
                        <div class="text-right">发布时间：2017-08-31</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 right">
                <div class="news-right">
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
                </div>
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
    jQuery(document).ready(function ($) {
        $('.carousel').carousel({
            interval: 5000
        })
    });
</script>
</html>
