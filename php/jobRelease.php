<!DOCTYPE html>
<html>
<?php
    require_once('include.php');
    set_title("兼职发布——中南大学铁道校区勤工助学中心");
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
<div class="content" id="changeHeight_form">
    <!--中心信息-->
    <div class="contentInfo_left">
        <a class="infoTitle" href="#">中心信息</a>
        <hr/>
        <div class="info">
            <a href="#">
                <img class="infoImg" src="../images/logo.png" width="50" height="50" title="中南大学铁道校区勤工助学中心">
                <p>
                    中南大学<br/>铁道校区勤工助学中心
                </p>
            </a>
        </div>

        <div class="Info">
            <p class="infoTime">办公时间：&nbsp;08:00-18:20</p>
        </div>

        <div class="Info">
            <p class="infoLocation">办公地点：&nbsp;铁道学院办公楼411</p>
        </div>

        <div class="Info">
            <p class="infoContact">联系方式：&nbsp;82656607</p>
        </div>

        <div class="Info">
            <p class="infoContact">中 心QQ：&nbsp;395326220</p>
        </div>
    </div>
    <!--左侧二手信息-->
    <div class="contentImg_left_down">
        <a href="unusedList.php">闲置物品</a>
        <a class="unusedPublish" href="unusedList.php">
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

    <!--商家发布信息-->
    <div class="apply">
        <span>兼职信息登记表</span>
        <hr/>
        <div class="applyForm">
            <form action="#" method="post">
                <h4>您的姓名：
                    <label>
                        <input type="text" name="name" size="20">
                    </label>
                    <span class="error">*必填
                    </span>
                </h4>
                <h4>您的电话：
                    <label>
                        <input type="text" name="tel" size="20">
                    </label>
                    <span class="error">*必填</span>
                </h4>
                <h4>您的邮箱：
                    <label>
                        <input type="text" name="e-mail" size="20">
                    </label>
                    <span class="error"> *必填</span>
                </h4>
                <h4>公司地址：
                    <label>
                        <input type="text" name="address" size="20">
                    </label>
                    <span class="error">*必填</span>
                </h4>
                <h4>学生性别：
                    <label>
                        <input type="radio" name="studentSex" value="m">男
                        &nbsp;&nbsp;
                        <input type="radio" name="studentSex" value="w">女
                        &nbsp;&nbsp;
                        <input type="radio" name="studentSex" value="w">不限
                        &nbsp;
                    </label>
                    <span class="error">*必填</span>
                </h4>
                <h4>工作内容：
                    <label>
                        <input type="text" name="content" size="20">
                    </label>
                    <span class="error"> *必填</span>
                </h4>
                <h4>工作要求：
                    <label>
                        <input type="text" name="requirement" size="20">
                    </label>
                    <span class="error"> *必填</span>
                </h4>
                <h4>工作时间：
                    <label>
                        <input type="text" name="time" size="20">
                    </label>
                    <span class="error"> *必填</span>
                </h4>
                <h4>工作地点：
                    <label>
                        <input type="text" name="place" size="20">
                    </label>
                    <span class="error"> *必填</span>
                </h4>
                <h4>薪资范围：
                    <label>
                        <input type="text" name="salary" size="20">
                    </label>
                    <span class="error"> *必填</span>
                </h4>
                <h4>学生人数：
                    <label>
                        <input type="text" name="quantity" size="20">
                    </label>
                    <span class="error"> *必填</span>
                </h4>

                <h4>其他要求：<br/><br/>
                    <label>
                        <textarea name="requirement" rows="11" cols="60"></textarea><br>
                    </label>
                    <span class="error">(填写内容在200字以内)</span>
                </h4>
                <h4><a href="#">兼职须知：</a>
                    <label>
                        <input type="checkbox" name="read">已阅读
                    </label>
                    <span class="error">*必填(必须在已阅读的情况下方可提交)</span>
                </h4>
                <h4>
                    <input style="position:absolute; top:1005px; left: 300px; height: 40px; width:110px; background-color: #46558C; color: white;" type="submit" value="确认提交信息">
                </h4>
            </form>
        </div>
    </div>

</div>

<!--网页页脚-->
<?php
    set_footer_id("txtContentOthers");
?>
</body>
</html>