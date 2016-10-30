<!DOCTYPE html>
<html>
<head>
<title>中南大学铁道校区勤工助学中心</title>
<?php
require_once("include_css.php");
?>
</head>

<body>
<?php
//页眉
require_once("include.php");
//宣传栏（图文消息）
show("../images/head.jpg", "", "", "欢迎来到中南大学铁道校区勤工助学中心");
?>

<!--网页主体-->
<div class="content">
    <!--左侧家教信息-->
    <div class="textListSide">
        <a class="tutorTitle" href="tutorList.php">家教信息</a>
        <a class="parentIn" href="tutorList.php">
            <img src="../images/in.png" width="17px" height="17px">
            更多
        </a>
        <hr/>
        <div class="textList">
            <ul>
                <!--读取数据库至数组tutor_info-->
                <li>
                    <a href="tutorList.html">•［13728号家教信息］美岭村（步行5分钟）教英语教英语  <span class="signup">报名</span>
                    </a><hr class="list"/>
                </li>
                <li>
                    <a href="tutorList.html">•［13728号家教信息］美岭村（步行5分钟）教英语教英语  <span class="signup">报名</span>
                    </a><hr class="list"/>
                </li>
                <li>
                    <a href="tutorList.html">•［13728号家教信息］美岭村（步行5分钟）教英语教英语  <span class="signup">报名</span>
                    </a><hr class="list"/>
                </li>
                <li>
                    <a href="tutorList.html">•［13728号家教信息］美岭村（步行5分钟）教英语教英语  <span class="signup">报名</span>
                    </a><hr class="list"/>
                </li>
                <li>
                    <a href="tutorList.html">•［13728号家教信息］美岭村（步行5分钟）教英语教英语  <span class="signup">报名</span>
                    </a><hr class="list"/>
                </li>
                <li>
                    <a href="tutorList.html">•［13728号家教信息］美岭村（步行5分钟）教英语教英语  <span class="signup">报名</span>
                    </a><hr class="list"/>
                </li>
            </ul>
        </div>
    </div>
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
</div>

</body>
</html>