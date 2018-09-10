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
                    $spName = "产品孵化文章";
                    require("get_special_artcles.php");
                ?>
            </div>
            <div class="article-bar">
                <div class="page-btn prev">
                    <span>x</span>
                    <a href=""></a>
                </div>
                <div class="page-btn center">
                    <a href="news.php">返回新闻首页</a>
                </div>
                <div class="page-btn next">
                    <span>x</span>
                    <a href=""></a>
                </div>
            </div>
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
