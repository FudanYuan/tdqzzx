<!DOCTYPE html>
<html>
<?php
    require_once('include.php');
    set_title("家教信息——中南大学铁道校区勤工助学中心");
?>
<body>
<!--宣传栏（图文消息）-->
<div class="Show">
    <a>
        <img class="showImg" src="../images/head.jpg" width="100%" title="显示图文消息的标题">
    </a>
    <a class="showText" href="#">欢迎来到中南大学铁道校区勤工助学中心</a>
</div>

<!--网页主体-->
<div class="content" id="changeHeight_longTxt">
    <!--左侧兼职信息-->
    <div class="textListSide">
        <a class="jobTitle" href="jobList.php">兼职信息</a>
        <a class="BossIn" href="jobList.php">
            <img src="../images/in.png" width="17px" height="17px">
             更多
        </a>
        <hr>
        <div class="textList">
            <ul>
                <!--读取数据库至数组job_info-->
                <li>
                    <a href="#">•［13728号］美岭...<span class="signup">报名</span>
                    </a><hr class="list"/>
                </li>
                <li>
                    <a href="#">•［13728号］美岭村（步行5分钟）教英语教英语  <span class="signup">报名</span>
                    </a><hr class="list"/>
                </li>
                <li>
                    <a href="#">•［13728号］美岭村（步行5分钟）教英语教英语  <span class="signup">报名</span>
                    </a><hr class="list"/>
                </li>
                <li>
                    <a href="#">•［13728号］美岭村（步行5分钟）教英语教英语  <span class="signup">报名</span>
                    </a>
                </li><hr class="list"/>
                <li>
                    <a href="#">•［13728号］美岭村（步行5分钟）教英语教英语  <span class="signup">报名</span>
                    </a>
                </li><hr class="list"/>
                <li>
                    <a href="#">•［13728号］美岭村（步行5分钟）教英语教英语  <span class="signup">报名</span>
                    </a>
                </li><hr class="list"/>
            </ul>
        </div>
    </div>
    <!--左侧二手信息-->
    <div class="contentImg_left_down">
        <a href="unusedList.html">闲置物品</a>
        <a class="unusedPublish" href="unusedList.html">
            <img src="../images/in.png" width="17px" height="17px">
            更多
        </a>
        <hr/>
        <div class="list_left">
            <div class="listContent">
                <div class="Img_left">
                    <a href="#" class="imgLink"><img class="img_left" src="../images/unused.jpg"></a>
                </div>
                <div class="Desc_left">
                    <ul>
                        <li>用户信息：<span>读数据库</span></li>
                        <li>物品信息：<span>读数据库</span></li>
                        <li>发布时间：<span>读数据库</span></li>
                        <li>卖家售价：<span>读数据库</span></li>
                    </ul>
                </div>
            </div>

            <div class="listContent">
                <div class="Img_left">
                    <a href="#" class="imgLink"><img class="img_left" src="../images/unused.jpg"></a>
                </div>
                <div class="Desc_left">
                    <ul>
                        <li>用户信息：<span>读数据库</span></li>
                        <li>物品信息：<span>读数据库</span></li>
                        <li>发布时间：<span>读数据库</span></li>
                        <li>卖家售价：<span>读数据库</span></li>
                    </ul>
                </div>
            </div>

            <div class="listContent">
                <div class="Img_left">
                    <a href="#" class="imgLink"><img class="img_left" src="../images/unused.jpg"></a>
                </div>
                <div class="Desc_left">
                    <ul>
                        <li>用户信息：<span>读数据库</span></li>
                        <li>物品信息：<span>读数据库</span></li>
                        <li>发布时间：<span>读数据库</span></li>
                        <li>卖家售价：<span>读数据库</span></li>
                    </ul>
                </div>
            </div>

            <div class="listContent">
                <div class="Img_left">
                    <a href="#" class="imgLink"><img class="img_left" src="../images/unused.jpg"></a>
                </div>
                <div class="Desc_left">
                    <ul>
                        <li>用户信息：<span>读数据库</span></li>
                        <li>物品信息：<span>读数据库</span></li>
                        <li>发布时间：<span>读数据库</span></li>
                        <li>卖家售价：<span>读数据库</span></li>
                    </ul>
                </div>
            </div>

            <div class="listContent">
                <div class="Img_left">
                    <a href="#" class="imgLink"><img class="img_left" src="../images/unused.jpg"></a>
                </div>
                <div class="Desc_left">
                    <ul>
                        <li>用户信息：<span>读数据库</span></li>
                        <li>物品信息：<span>读数据库</span></li>
                        <li>发布时间：<span>读数据库</span></li>
                        <li>卖家售价：<span>读数据库</span></li>
                    </ul>
                </div>
            </div>

            <div class="listContent">
                <div class="Img_left">
                    <a href="#" class="imgLink"><img class="img_left" src="../images/unused.jpg"></a>
                </div>
                <div class="Desc_left">
                    <ul>
                        <li>用户信息：<span>读数据库</span></li>
                        <li>物品信息：<span>读数据库</span></li>
                        <li>发布时间：<span>读数据库</span></li>
                        <li>卖家售价：<span>读数据库</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--家教信息列表*26-->
    <div class="textListMain" id="longList">
        <a href="tutorList.html">家教信息</a>
        <hr/>
        <ol class="listContentMain">
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>

            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>

            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>

            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>


            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>
            <li><a href="#">【13253号】袁家岭立交桥(311约40分钟)招聘英语家教【报名】</a><span>10-13</span><hr/></li>

        </ol>
        <div class="pagination">
            <ul class="page">
                <li>当前第<span>1</span>页／共<span>8</span>页</li>
                <li><a href="#">首页</a></li>
                <li><a href="#">上一页</a></li>
                <li><a href="#">下一页</a></li>
                <li><a href="#">尾页</a></li>
                <li>
                    <label>
                        <input type="text" name="pageNo" value="" size="5px">
                        <input type="submit" name="pageGo" value="Go">
                    </label>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--网页页脚-->
<?php
    set_footer_id("txtContentOthers");
?>
</body>
</html>