<!DOCTYPE html>
<html lang="zh-CN">

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
                <!-- <li class="first">
                    <a href="products.html">陶机配件</a>
                    <ul class="second">
                        <li><a href="products.html#0">喷墨喷头</a></li>
                        <li><a href="products.html#1">供墨泵、循环泵</a></li>
                        <li><a href="products.html#2">喷墨过滤器</a></li>
                        <li><a href="products.html#3">其他喷墨配件</a></li>
                    </ul>
                </li>
                <li class="first">
                    <a href="products.html">设备打样</a>
                    <ul class="second">
                        <li><a href="products.html#0">工程机械打样</a></li>
                        <li><a href="products.html#1">陶瓷机械打样</a></li>
                        <li><a href="products.html#2">食品机械打样</a></li>
                        <li><a href="products.html#3">非标设备打样</a></li>
                    </ul>
                </li>
                <li class="first">
                    <a href="products.html">钣金业务</a>
                    <ul class="second">
                        <li><a href="products.html">工程机械打样</a></li>
                        <li><a href="products.html">陶瓷机械打样</a></li>
                        <li><a href="products.html">食品机械打样</a></li>
                        <li><a href="products.html">非标设备打样</a></li>
                    </ul>
                </li>
                <li class="first">
                    <a href="products.html">产品孵化</a>
                    <ul class="second">
                        <li><a href="products.html">工程机械打样</a></li>
                        <li><a href="products.html">陶瓷机械打样</a></li>
                        <li><a href="products.html">食品机械打样</a></li>
                        <li><a href="products.html">非标设备打样</a></li>
                    </ul>
                </li>
                <li class="first">
                    <a href="products.html">工业设计</a>
                    <ul class="second">
                        <li><a href="products.html">工程机械打样</a></li>
                        <li><a href="products.html">陶瓷机械打样</a></li>
                        <li><a href="products.html">食品机械打样</a></li>
                        <li><a href="products.html">非标设备打样</a></li>
                    </ul>
                </li> -->
                <!-- <li class="first active">
                    <a href="aboutus.html">关于我们</a>
                    <ul class="second">
                        <li><a href="aboutus.html#0">公司简介</a></li>
                        <li><a href="aboutus.html#1">公司文化</a></li>
                        <li><a href="aboutus.html#2">战略愿景</a></li>
                        <li><a href="aboutus.html#3">联系我们</a></li>
                        <li><a href="aboutus.html#4">加入我们</a></li>
                        <li><a href="aboutus.html#5">在线留言</a></li>
                    </ul>
                </li> -->
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
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class=""><a href="#home" aria-controls="home" role="tab" data-toggle="tab">公司简介</a>
            </li>
            <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab"
                                                      data-toggle="tab">公司文化</a></li>
            <li role="presentation" class=""><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">战略愿景</a>
            </li>
            <li role="presentation" class=""><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">联系我们</a>
            </li>
            <li role="presentation" class=""><a href="#joinus" aria-controls="joinus" role="tab"
                                                data-toggle="tab">加入我们</a></li>
            <li role="presentation" class=""><a href="#letter" aria-controls="letter" role="tab"
                                                data-toggle="tab">在线留言</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="module-three">
                    <div class="page-header">
                        <h1>
                            <span class="zch">-  众焱鑫机械  -</span>
                            <span class="eng opacity1">ABOUT</span>
                        </h1>
                    </div>
                </div>
                <div class="child-info">
                    <div class="img-box">
                        <img src="images/img-child-info.jpg">
                    </div>
                    <div class="text-box">
                        <?php
                        $spName = "公司简介";
                        require("get_special_artcles.php");
                        ?>
                    </div>
                </div>
                <div class="child-info-bottom"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <div class="module-three">
                    <div class="page-header">
                        <h1>
                            <span class="zch">-  众焱鑫机械  -</span>
                            <span class="eng opacity1">ABOUT</span>
                        </h1>
                    </div>
                </div>
                <div class="child-info">
                    <div class="img-box">
                        <img src="images/img-child-info.jpg">
                    </div>
                    <div class="text-box">
                        <?php
                        $spName = "公司文化";
                        require("get_special_artcles.php");
                        ?>
                    </div>
                </div>
                <div class="child-info-bottom"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
                <div class="module-three">
                    <div class="page-header">
                        <h1>
                            <span class="zch">-  众焱鑫机械  -</span>
                            <span class="eng opacity1">ABOUT</span>
                        </h1>
                    </div>
                </div>
                <div class="child-info">
                    <div class="img-box">
                        <img src="images/img-child-info.jpg">
                    </div>
                    <div class="text-box">
                        <?php
                        $spName = "战略背景";
                        require("get_special_artcles.php");
                        ?>
                    </div>
                </div>
                <div class="child-info-bottom"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="settings">
                <div class="module-three">
                    <div class="page-header">
                        <h1>
                            <span class="zch">-  联系我们  -</span>
                            <span class="eng opacity1">ABOUT</span>
                        </h1>
                    </div>
                </div>
                <div class="container index-advantage child-contactus">
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="box">
                                <img src="images/bg-con-01.png">
                            </div>
                            <div class="info">
                                <?php
                                $spName = "联系电话";
                                require("get_special_artcles.php");
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="box">
                                <img src="images/bg-con-02.png">
                            </div>
                            <div class="info">
                                <?php
                                $spName = "邮箱地址";
                                require("get_special_artcles.php");
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="box">
                                <img src="images/bg-con-03.png">
                            </div>
                            <div class="info">
                                <?php
                                $spName = "公司地址";
                                require("get_special_artcles.php");
                                ?>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="box">
                                <img src="images/bg-con-04.png">
                            </div>
                            <div class="info">
                                <?php
                                $spName = "网站网址";
                                require("get_special_artcles.php");
                                ?>
                            </div>
                        </div>
                    </div>
                    <div id="map">
                        <p>地图</p>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="joinus">
                <div class="module-three">
                    <div class="page-header">
                        <h1>
                            <span class="zch">-  加入我们  -</span>
                            <span class="eng opacity1">ABOUT</span>
                        </h1>
                    </div>
                </div>
                <div class="join-list">
                    <div class="item">
                        <div class="top">
                            <span class="name">人力资源专员/助理</span>
                            <span class="time">2017-08-05</span>
                        </div>
                        <div class="bottom">条件：人力资源专员/助理人力资源专员/助理人力资源专员/助理</div>
                    </div>
                    <div class="item">
                        <div class="top">
                            <span class="name">人力资源专员/助理</span>
                            <span class="time">2017-08-05</span>
                        </div>
                        <div class="bottom">
                            条件：人力资源专员/助理人力资源专员/助理人力资源专员/助理条件：人力资源专员/助理人力资源专员/助理人力资源专员/助理条件：人力资源专员/助理人力资源专员/助理人力资源专员/助理条件：人力资源专员/助理人力资源专员/助理人力资源专员/助理
                        </div>
                    </div>
                </div>
                <ul class="paging">
                    <li class="pading-btn prev"><a href="">上一页</a></li>
                    <li><a class="active" href="">1</a></li>
                    <li class="pading-btn next"><a href="">下一页</a></li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="letter">
                <div class="module-three">
                    <div class="page-header">
                        <h1>
                            <span class="zch">-  在线留言  -</span>
                            <span class="eng opacity1">ABOUT</span>
                        </h1>
                    </div>
                </div>
                <script>
                    function subletter() {
                        name = document.getElementById('ltname').value
                        phone = document.getElementById('phone').value
                        email = document.getElementById('email').value
                        address = document.getElementById('address').value
                        letter = document.getElementById('sedmessages').value
                        alert(letter)
                        
                        $.ajax({
                            url: './admin/link-mysql.php',
                            data: {
                                type: 'letter-new',
                                name: name,
                                phone: phone,
                                email: email,
                                address: address,
                                letter: letter
                            },
                            type: 'post',
                            dateType: 'json',
                            success: function (data) {
                                // console.log(data)
                                alert("感谢您的回馈")
                                window.location.href="aboutus.php";
                            }
                        })
                    }
                </script>
                <div class="letter-box">
                    <!-- <form action="submit" class="letterForm"> -->
                        <div class="input-box">
                            <span class="name">姓名</span>
                            <div class="input-style">
                                <input type="text" id="ltname" maxlength="32" placeholder="请输入姓名" check-result="true">
                            </div>
                        </div>
                        <div class="input-box">
                            <span class="name">手机</span>
                            <div class="input-style">
                                <input type="text" id="phone" maxlength="20" placeholder="请输入手机号">
                            </div>
                        </div>
                        <div class="input-box">
                            <span class="name">邮箱</span>
                            <div class="input-style">
                                <input type="text" id="email" maxlength="64" placeholder="请输入邮箱" check-result="true">
                            </div>
                        </div>
                        <div class="input-box">
                            <span class="name">地址</span>
                            <div class="input-style">
                                <input type="text" id="address" maxlength="255" placeholder="请输入地址"
                                       check-result="true">
                            </div>
                        </div>
                        <div class="input-box">
                            <span class="name"><sup>*</sup>留言内容</span>
                            <div class="input-style">
                                <textarea class="letter" id="sedmessages" maxlength="1000" placeholder=""
                                          check-result="false">请输入留言内容</textarea>
                            </div>
                        </div>
                        <button onclick="subletter()" type="submit" class="submit-btn">提交</button>
                    <!-- </form> -->
                </div>
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
    jQuery(document).ready(function ($) {
    });
</script>
</html>
