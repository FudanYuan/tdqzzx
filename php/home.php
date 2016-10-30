<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keyword" content="中南大学铁道校区勤工助学中心">
    <title>中南大学铁道校区勤工助学中心</title>
    <?php
        include_once("adminDB.php");
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
    <!--通知公告-->
    <div class="contentNotice">
    <a class="noticeTitle" href="announcementList.php">通知公告</a>
    <hr/>
    <?php
        $sql = "select * from notice ".
            "where (id_notice = (select max(id_notice) from notice))";
        if($result = $adminDB->ExecSQL($sql,$conn)){
        ?>
            <div class="noticeLeft">
                <?php
                $title = $result[0]['title'];
                ?>
                <a  href="#" title="<?php echo $title;?>">
                    <img class="noticeImg" src="<?php echo $result[0]["image"];?>"
                         title="<?php echo $result[0]["title"]?>">
                </a><br/>
                <div class="noticeDesc" title="<?php echo $title;?>">
                    <a href="#">
                        <?php
                        $title = $subStr->dealStr($title,0,90);
                        echo $title;?>
                    </a>
                </div>
            </div>
        <?php
        }?>
    <div class="noticeList">
        <ul>
            <?php
            $sql = "select * from notice ";
            $result = $adminDB->ExecSQL($sql,$conn);
            $raw = count($result);
            $raw > 6 ? $num = 6 : $num = $raw;
            for($i=$raw-2;$i>$raw-$num-2;$i--){
                ?>
                <li>
                    <div class="list">
                        <?php
                        $title = $result[$i]['title'];
                        ?>
                        <a class="list_src" href="#" title="<?php echo $title;?>">
                            <?php
                            $title = $subStr->dealStr($title,0,45);
                            echo $title;?>
                        </a>
                        <span class="list_date"><?php echo $result[$i]['is_time'];?></span>
                    </div>
                </li>
                <?php
            }?>
        </ul>
    </div>
</div>

    <!--中心信息-->
    <div class="contentInfo">
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

    <!--侧部信息-->
    <div class="contentSide">
        <!--魅力勤助-->
        <div class="sideDiv">
            <div class="logo">
                <a href="introduction.php" class="logoLink"><img src="../images/1中心.png" class="sideLogo"></a>
                <div class="desc"><a href="introduction.php" class="txtLink">魅力勤助</a></div>
            </div>
            <a href="#"><img class="sideImg" src="#"></a>
        </div>

        <!--人物风采-->
        <div class="sideDiv">
            <div class="logo">
                <a href="#" class="logoLink"><img src="../images/2个人.png" class="sideLogo"></a>
                <div class="desc"><a href="#" class="txtLink">人物风采</a></div>
            </div>
            <a href="#"><img class="sideImg" src="#"></a>
        </div>

        <!--加入我们-->
        <div class="sideDiv">
            <div class="logo">
                <a href="#" class="logoLink"><img src="../images/3加入.png" class="sideLogo"></a>
                <div class="desc"><a href="#" class="txtLink">加入我们</a></div>
            </div>
            <a href="#"><img class="sideImg" src="#"></a>
        </div>
    </div>

    <!--家教信息-->
    <div class="contentTutor">
        <a class="tutorTitle" href="tutorList.php">家教信息</a>
        <a class="parentIn" href="tutorRelease.php">
            <img src="../images/in.png" width="17px" height="17px">
            家长入口
        </a>
        <hr/>
        <div>
            <!--读取数据库至数组tutor_info-->
            <ul>
                <?php
                $sql = "select * from fraulein_info";
                $result = $adminDB->ExecSQL($sql,$conn);
                $raw = count($result);
                $raw > 8 ? $num = 8 : $num = $raw;
                for($i=$raw-1;$i>$raw-$num-1;$i--){
                    ?>
                    <li>
                        <div class="list" id="tutorList">
                            <?php
                            $tutorInfo = "•【";
                            $tutorInfo .= $result[$i]['id_parent']."号家教】";
                            $tutorInfo .= $result[$i]['location']."招聘";
                            $tutorInfo .= $result[$i]['subjects']."家教";
                            ?>
                            <a class="list_src" href="#" title="<?php echo $tutorInfo;
                            ?>">
                                <?php
                                $tutorInfo = $subStr->dealStr($tutorInfo,0,42)."【快来报名】";
                                echo $tutorInfo;
                                ?>
                            </a>
                            <span class="list_date"><?php echo $result[$i]['apply_date'];?></span>
                        </div>
                    </li>
                    <?php
                }?>
            </ul>
        </div>
    </div>

    <!--兼职信息-->
    <div class="contentJob">
        <a class="jobTitle" href="jobList.php">兼职信息</a>
        <a class="BossIn" href="jobRelease.php">
            <img src="../images/in.png" width="17px" height="17px">
            企业入口
        </a>
        <hr/>
        <div>
            <ul>
                <!--读取数据库至数组job_info-->
                <?php
                $sql = "select * from company";
                $result = $adminDB->ExecSQL($sql,$conn);
                $raw = count($result);
                $raw > 8 ? $num = 8 : $num = $raw;
                for($i=$raw-1;$i>$raw-$num-1;$i--){
                    ?>
                    <li>
                        <div class="list" id="jobList">
                            <?php
                            $jobInfo = "•【";
                            $jobInfo .= $result[$i]['id_parttime']."号兼职】";
                            $jobInfo .= $result[$i]['job_place']."招聘";
                            $jobInfo .= $result[$i]['job_content']."兼职";
                            ?>
                            <a class="list_src" href="#" title="<?php echo $jobInfo;?>">
                                <?php
                                $jobInfo = $subStr->dealStr($jobInfo,0,42)."【快来报名】";
                                echo $jobInfo;
                                ?>
                            </a>
                            <span class="list_date"><?php echo $result[$i]['apply_date'];?></span>
                        </div>
                    </li>
                    <?php
                }?>
            </ul>
        </div>
    </div>

    <!--失物信息-->
    <div class="contentLost">
        <a class="lostTitle" href="lostList.php">失物信息</a>
        <a class="lostPublish" href="lostRelease.php">
            <img src="../images/in.png" width="17px" height="17px">
            发布信息
        </a>
        <hr/>
        <div>
            <ul>
                <!--读取数据库至数组lost_info-->
                <?php
                $sql = "select * from lost";
                $result = $adminDB->ExecSQL($sql,$conn);
                $raw = count($result);
                $raw > 8 ? $num = 8 : $num = $raw;
                for($i=$raw-1;$i>$raw-$num-1;$i--){
                    ?>
                    <li>
                        <div class="list" id="lostList">
                            <?php
                            $lostInfo = "•【";
                            $lostInfo .= $result[$i]['id_lost']."号";
                            $lostInfo .= $result[$i]['type']."】";
                            $lostInfo .= $result[$i]['item'].":";
                            $lostInfo .= $result[$i]['description'];
                            ?>
                            <a class="list_src" href="#" title="<?php echo $lostInfo;?>">
                                <?php
                                $lostInfo = $subStr->dealStr($lostInfo,0,34).
                                    "【". $result[$i]['publisher']."发布】";
                                echo $lostInfo;
                                ?>
                            </a>
                            <span class="list_date"><?php echo $result[$i]['date'];?></span>
                        </div>
                    </li>
                    <?php
                }?>
            </ul>
        </div>
        <div class="lostImg">
            <?php
            for($i=$raw-1;$i>$raw-$num-1;$i--){
            ?>
            <a class="imgList" href="#"><img src="<?php echo $result[$i]['img']?>"></a>
                <?php
            }?>
        </div>
    </div>

    <!--二手信息-->
    <div class="contentUnused">
        <a href="unusedList.php">闲置物品</a>
        <a class="unusedPublish" href="unusedRelease.php">
            <img src="../images/in.png" width="17px" height="17px">
            发布信息
        </a>
        <hr/>
        <div class="unusedImg">
            <?php
            $sql = "select * from unused";
            $result = $adminDB->ExecSQL($sql,$conn);
            $raw = count($result);
            $raw > 8 ? $num = 8 : $num = $raw;
            for($i=$raw-1;$i>$raw-$num-1;$i--){
                ?>
                <a class="imgList" href="#"><img src="<?php echo $result[$i]['img']?>"></a>
                <?php
            }?>
        </div>

        <div>
            <ul>
                <?php
                for($i=$raw-1;$i>$raw-$num-1;$i--){
                    ?>
                    <li>
                        <div class="list" id="unusedList">
                            <?php
                            $unusedInfo = "•【";
                            $unusedInfo .= $result[$i]['id_unused']."号】";
                            $unusedInfo .= $result[$i]['publisher']."想";
                            $unusedInfo .= $result[$i]['type']."手";
                            $unusedInfo .= $result[$i]['item'].":";
                            $unusedInfo .= $result[$i]['description'];
                            ?>
                            <a class="list_src" href="#" title="<?php echo $unusedInfo; ?>">
                                <?php
                                  $unusedInfo = $subStr->dealStr($unusedInfo,0,42)."【拍拍拍】";
                                echo $unusedInfo;
                                ?>
                            </a>
                            <span class="list_date"><?php echo $result[$i]['date'];?></span>
                        </div>
                    </li>
                    <?php
                }?>
            </ul>
        </div>
    </div>
</div>
<!--网页页脚-->
<?php
    set_footer_id("");
?>
</body>
</html>