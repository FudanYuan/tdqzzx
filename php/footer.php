<?php
    function set_footer_id($footer_id) {
?>
<!--底部信息-->
<div class="contentOthers" id="<?php echo $footer_id;?>">
    <div class="blueLine">
    </div>
    <!--常见问题-->
    <div class="question">
        <a class="questionTitle" href="questionList.php">常见问题</a>
        <hr/>
        <div class="quesList">
            <ul>
                <!--读取数据库至数组others_info-->
                <li><a href="#">家教问题</a></li>
                <li><a href="#">兼职问题</a></li>
                <li><a href="#">失物问题</a></li>
                <li><a href="#">二手问题</a></li>
            </ul>
        </div>
    </div>

    <!--关注我们-->
    <div class="contactMode">
        <a class="contactTitle" href="concernUs.php">关注我们</a>
        <hr/>
        <div class="contactList">
            <ul>
                <!--读取数据库至数组others_info-->
                <li class="weixin">
                    <div class="imgList">
                        <img src="../images/weixin.jpg" title="中心微信公众号">
                        <div class="desc">微信公众号</div>
                    </div>
                </li>

                <li class="QQ">
                    <div class="imgList">
                        <img src="../images/weixin.jpg" title="中心QQ">
                        <div class="desc">中心QQ</div>
                    </div>

                </li>
                <li class="weibo">
                    <div class="imgList">
                        <a href="#"><img src="../images/weibo.png" title="中心微博"></a>
                        <div class="desc">中心微博</div>
                    </div>

                </li>
            </ul>
        </div>
    </div>

    <!--友情链接-->
    <div class="links">
        <a class="linksTitle">友情链接</a>
        <hr/>
        <div class="linkList">
            <ul>
                <!--读取数据库至数组others_info-->
                <li><a href="#">中南大学官网</a></li>
                <li><a href="#">中南大学勤工助学指导中心</a></li>
                <li><a href="#">中南大学勤工助学指导中心</a></li>
                <li><a href="#">中南大学勤工助学指导中心</a></li>
                <li><a href="#">中南大学勤工助学指导中心</a></li>
            </ul>
        </div>
    </div>

    <!--网页页脚-->
    <div class="footer">
        <ul class="footerUl">
            <li class="left">版权所有@中南大学铁道校区勤工助学中心</li>
            <li class="right">
                <ul>
                    <li>
                        <a href="contactUs.php">联系我们</a>&nbsp;|&nbsp;
                    </li>
                    <li>
                        <a href="suggestion.php">问题反馈</a>&nbsp;|
                    </li>
                    <li>
                        <a href="#">收藏本页</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<?php
    require_once('function_side.php');
    }
?>