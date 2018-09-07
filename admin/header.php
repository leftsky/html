<?php

if ( ! defined( 'LEFT_HEADER' ) ) {
	define( 'LEFT_HEADER', true );
}

?>


<div class="row-fluid">
    <div class="span12">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                        <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="#" class="brand">网站名</a>
                    <div class="nav-collapse collapse navbar-responsive-collapse">
                        <ul class="nav">
                            <li class="active">
                                    <a href="#">主页</a>
                            </li>
                            <!-- <li>
                                    <a href="link-mysql.php">link-mysql</a>
                            </li> -->
                            <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">文章<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <!-- <li>
                                            <a href="edit.php">全部文章</a>
                                    </li> -->
                                    <li>
                                            <a href="post-new.php">新文章</a>
                                    </li>
                                    <li>
                                            <a href="edit-tags.php">分类目录</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">媒体库<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                            <a href="upload.php">媒体库</a>
                                    </li>
                                    <li>
                                            <a href="media-new.php">添加</a>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>