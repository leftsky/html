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
        <div class="module-three">
            <div class="page-header">
                <h1>
                    <span class="zch">-  搜索结果  -</span>
                    <span class="eng opacity1">RESULT</span>
                </h1>
            </div>
        </div>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <?php
                $scStr = $_GET['scStr'];
                if ($scStr) {
                    ini_set("display_errors", 0);
                    error_reporting(E_ALL ^ E_NOTICE);
                    error_reporting(E_ALL ^ E_WARNING);
                    $sqlStr = "SELECT * FROM posts WHERE "
                        . " post_title like '%" . $scStr . "%' "
                        . " OR post_content like '%" . $scStr . "%'";
                    // echo $sqlStr;
                    $query = $mysqli->query($sqlStr);
                    $user_arr = "";
                    while ($row = $query->fetch_object()) {
                        $user_arr[] = $row;
                    }
                    $arr = json_decode(json_encode($user_arr, JSON_UNESCAPED_UNICODE), true);
                    $num = count($arr);
                    for ($i = 0; $i < $num; ++$i) {
                        if ($arr[$i]['post_title'] == "")
                            break;
                        if ($arr[$i]['post_status'] == 0) {
                            ?>
                            <div class="module-five">
                                <div class="news-list">
                                    <ul>
                                        <li>
                                            <div class="container">
                                                <div class="title">
                                                    <div class="time"><?php echo $arr[$i]['post_date'] ?></div>
                                                    <!-- <div class="text"><a
                                                                href="article.php">焊接操作时的注意事项...焊接操作时的注意事项...焊接操作时的注意事项...</a>
                                                    </div> -->
                                                </div>
                                                <div class="info"><a
                                                            href="article.php?artId=<?php
                                                            echo $arr[$i]['id'] ?>"><?php
                                                        echo $arr[$i]['post_title'] ?></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <?php
                        } else if ($arr[$i]['post_status'] == 2) {
                            ?>
                            <div class="top-news">
                                <div class="img-box">
                                    <?php
                                    $urls = explode(";", $arr[$i]['post_main_url']);
                                    ?>
                                    <img src="<?php echo $urls[0] ?>">
                                </div>
                                <div class="text-box">
                                    <div class="text-head">
                                        <p><?php echo $arr[$i]['post_date'] ?></p>
                                        <p class="name"><a href="pro-detail.php?id=<?php
                                            echo $arr[$i]['id'] ?>"><?php
                                                echo $arr[$i]['post_title'] ?></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                }
                ?>
                <!-- <div class="top-news">
                    <div class="img-box">
                        <img src="images/img-news.jpg">
                    </div>
                    <div class="text-box">
                        <div class="text-head">
                            <p>2018-08-30</p>
                            <p class="name"><a href="article.php"> 焊接操作时的注意事项焊接操作时的注意事项焊接操作时的注意事项焊接操作时的注意事项</a></p>
                        </div>
                        <p> 电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触</p>
                    </div>
                </div>
                <div class="module-five">
                    <div class="news-list">
                        <ul>
                            <li>
                                <div class="container">
                                    <div class="title">
                                        <div class="time">2018-08-30</div>
                                        <div class="text"><a
                                                    href="article.php">焊接操作时的注意事项...焊接操作时的注意事项...焊接操作时的注意事项...</a>
                                        </div>
                                    </div>
                                    <div class="info"><a href="article.php">电焊机使用过程中不允许超载，否则将会因过热而烧毁电焊机或造成火灾；超载造成绝缘损坏，还可能引起漏电而发生触电事故
                                            ...些状况的出现</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
        <ul class="paging">
            <li class="pading-btn prev"><a href="">上一页</a></li>
            <li><a class="active" href="">1</a></li>
            <li class="pading-btn next"><a href="">下一页</a></li>
        </ul>
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
</script>
</html>
