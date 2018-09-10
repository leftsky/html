<div class="footer">
    <div class="footer-bar">
        <div class="container module-center">
            <span>友情链接：</span>
            <?php require_once('friendlink.php'); ?>
        </div>
    </div>
    <div class="footer-body">
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <!-- <div class="eQ-code">
                        <div class="img-box"></div>
                        <p>手机版</p>
                    </div> -->
                    <div class="eQ-code">
                        <div class="img-box">
                            <img src="http://huadong.leftsky.top:1991/html/admin/images/8329ce93efac638cc753f7803a2d4dde82ed8c5a.jpg">
                        </div>
                        <p>扫一扫二维码<br>关注公众号</p>
                    </div>
                </div>
                <div class="col-xs-4 contactus">
                    <div class="title">联系我们</div>
                    <div class="company">
                        <div class="name">佛山市众焱鑫机械构件有限公司</div>
                        <div class="info">
                            <p>地址： <?php
                                $spName = "公司地址";
                                require("get_special_artcles.php");
                                ?></p>
                            <p>电话：<?php
                                $spName = "联系电话";
                                require("get_special_artcles.php");
                                ?></p>
                            <p>邮箱：<?php
                                $spName = "邮箱地址";
                                require("get_special_artcles.php");
                                ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 aftersale">
                    <div class="title">售后服务</div>
                    <div class="contact">
                        <p>全国统一服务热线：<span><?php
                                $spName = "全国统一服务热线";
                                require("get_special_artcles.php");
                                ?></span></p>
                    </div>
                    <!-- <button class="refer">在线咨询</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="left">版权所有 © 2014-2018 佛山市众焱鑫机械构件有限公司</div>
            <div class="right">粤ICP备18109321 技术支持：广州美业美程网络科技有限公司</div>
        </div>
    </div>
</div>