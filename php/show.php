<?php
/**
 * Created by PhpStorm.
 * User: Jeremy
 * Date: 2016/10/27
 * Time: 21:45
 */
function show($imgsrc, $title, $link, $desc){
?>
    <!--宣传栏（图文消息）-->
    <div class="Show">
        <a href="#">
            <img class="showImg" src="<?php echo $imgsrc;?>" width="100%" title="<?php echo $title;?>">
        </a>
        <a class="showText" href="<?php echo $link;?>"><?php echo $desc;?></a>
    </div>
<?php
    }
?>