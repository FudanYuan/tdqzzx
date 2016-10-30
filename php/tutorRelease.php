<!DOCTYPE html>
<html>
<?php
    require_once('include.php');
    set_title("家教发布——中南大学铁道校区勤工助学中心");
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
        <a class="infoTitle" href="introduction.php">中心信息</a>
        <hr/>
        <div class="info">
            <a href="introduction.php">
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
    <!--二手信息-->
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
    <!--家长发布信息-->
    <div class="apply">
        <span>家教信息登记表</span>
        <hr/>
        <div class="applyForm">
            <form action="#" method="post">
                <h4>您的姓名：
                    <label>
                        <input type="text" name="name" size="20">
                    </label>
                    <span class="error">
                        <script language="javascript">

                        </script>
                    </span>
                </h4>
                <h4>您的电话：
                    <label>
                        <input type="text" name="tel" size="20">
                    </label>
                    <span class="error">*必填
                    </span>
                </h4>
                <h4>您的邮箱：
                    <label>
                        <input type="text" name="e-mail" size="20">
                    </label>
                    <span class="error"> *必填
                    </span>
                </h4>
                <h4>您的地址：
                    <label>
                        <input type="text" name="address" size="20">
                    </label>
                    <span class="error"> *必填
                    </span>
                </h4>

                <h4>学生性别：
                    <label>
                        <input type="radio" name="studentSex" value="m">男
                        &nbsp;&nbsp;
                        <input type="radio" name="studentSex" value="w">女
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                    </label>
                    <span class="error">*必填</span>
                </h4>

                <h4>学生年级：
                    <label>
                        <input type="text" name="grade" size="20">
                    </label>
                    <span class="error"> *必填
                    </span>
                </h4>

                <h4>辅导科目：
                    <label>
                        <input type="text" name="course" size="20">
                    </label>
                    <span class="error"> *必填
                    </span>
                </h4>

                <h4>辅导时间：
                    <label>
                        <input type="text" name="time" size="20">
                    </label>
                    <span class="error"> *必填
                    </span>
                </h4>

                <h4>薪资范围：
                    <label>
                        <input type="text" name="salary" size="20">
                    </label>
                    <span class="error"> *必填
                    </span>
                </h4>

                <h4>教员性别：
                    <label>
                        <label>
                            <input type="radio" name="studentSex" value="m">男
                            &nbsp;&nbsp;
                            <input type="radio" name="studentSex" value="w">女
                            &nbsp;&nbsp;
                            <input type="radio" name="studentSex" value="w">不限
                            &nbsp;
                        </label>
                    </label>
                    <span class="error"> *必填</span>
                </h4>

                <h4>是否找过：
                    <label>
                        <input type="radio" name="experience" value="Y">是
                        &nbsp;&nbsp;
                        <input type="radio" name="experience" value="N" checked="checked">否
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                    </label>
                   <span class="error"> *必填(填写您是否通过我们找过家教)
                   </span>
                </h4>

                <h4>申请时间：
                    <label>
                        <select>
                            <option value="year" selected="selected">
                                <?php
                                    echo date('Y', mktime());
                                ?>
                            </option>
                            <option value="year">
                                <?php
                                    echo date('Y', mktime())-1;
                                ?>
                            </option>
                            <option value="year">
                                <?php
                                    echo date('Y', mktime())-2;
                                ?>
                            </option>
                        </select>
                        年
                        <select>
                            <option value="month" selected="selected">1</option>
                            <option value="month">2</option>
                            <option value="month">3</option>
                            <option value="month">4</option>
                            <option value="month">5</option>
                            <option value="month">6</option>
                            <option value="month">7</option>
                            <option value="month">8</option>
                            <option value="month">9</option>
                            <option value="month">10</option>
                            <option value="month">11</option>
                            <option value="month">12</option>
                        </select>
                        月
                        &nbsp;&nbsp; &nbsp;&nbsp;
                    </label>
                    <span class="error"> *选填（上一次申请时间）
                    </span>
                </h4>

                <h4>校内职工：
                    <label>
                        <input type="radio" name="schoolStaff" value="y">是
                        &nbsp;&nbsp;
                        <input type="radio" name="schoolStaff" value="n" checked="checked">否
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                    </label>
                    <span class="error">*必填 (填写您是否是中南大学校内职工)</span>
                </h4>

                <h4>亲自面试：
                    <label>
                        <input type="radio" name="interview" value="Y">是
                        &nbsp;&nbsp;
                        <input type="radio" name="interview" value="N" checked="checked">否
                        &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                    </label>
                    <span class="error"> *必填 (填写您是否亲自面试)</span>
                </h4>

                <h4>其他要求：<br/><br/>
                    <label>
                        <textarea name="requirement" rows="8" cols="60"></textarea>
                    </label>
                    <br/>
                    <span class="error">(填写内容在200字以内)</span>
                </h4>

                <h4><a href="#">家教须知：</a>
                    <label>
                        <input type="checkbox" name="read">已阅读
                    </label>
                    <span class="error">*必填(必须在已阅读的情况下方可提交)</span>
                </h4>
                <h4>
                    <input style="position:absolute; top:1005px; left: 300px; height: 40px;
                           width:110px; background-color: #46558C; color: white;"
                           type="submit" value="确认提交信息">
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
