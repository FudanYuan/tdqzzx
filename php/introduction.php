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
<div class="content" id="changeHeight">
    <!--勤助魅力 -->
    <div class="introduction">
        <span>魅力勤助</span>
        <hr/>
        <div class="introNav">
            <ul>
                <li><a href="development.php" target="showHere">勤助发展</a></li>
            </ul>
            <ul>
                <li><a href="departmentShow.php" target="showHere">部门风采</a></li>
            </ul>
            <ul>
                <li><a href="processionShow.php" target="showHere">队伍风采</a></li>
            </ul>
            <ul>
                <li><a href="staffShow.php" target="showHere">员工风采</a></li>
            </ul>
        </div>
    </div>
    <!--显示-->
    <div class="introContent">
        <iframe name="showHere">
        </iframe>
    </div>
</div>
<?php
set_footer_id("txtContentOthers");
?>
</body>
</html>

