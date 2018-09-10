<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Note there is no responsive meta tag here -->
    <title>佛山市众焱鑫机械构件有限公司</title>
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
                    <span></span>
                    <a href="">.</a>
                </div>
                <div class="page-btn center">
                    <a href="news.php">返回新闻首页</a>
                </div>
                <div class="page-btn next">
                    <span></span>
                    <a href="">.</a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- /container -->
    <?php require_once('tail.php');?>
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
