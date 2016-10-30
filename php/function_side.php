<!--右侧功能键-->
<div class="rightFunction">
    <!--返回顶部-->
    <div class="top">
        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>">
            顶部
        </a>
    </div>

    <!--share-->
    <div class="share">
        <div class="shareContent">
            <script type="text/javascript">
                (function(){
                    var p = {
                        url:location.href, /*获取URL，可加上来自分享到QQ标识，方便统计*/
                        desc:'', /*分享理由(风格应模拟用户对话),支持多分享语随机展现（使用|分隔）*/
                        title:'中南大学铁道勤工助学中心', /*分享标题(可选)*/
                        summary:'勤工助学中心主要有家教、兼职、失物招领、二手交易等业务，致力于打造更好的服务中心', /*分享摘要(可选)*/
                        pics:'', /*分享图片(可选)*/
                        flash: '', /*视频地址(可选)*/
                        site:'网页分享', /*分享来源(可选) 如：QQ分享*/
                        style:'201',
                        width:50,
                        height:50
                    };
                    var s = [];
                    for(var i in p){
                        s.push(i + '=' + encodeURIComponent(p[i]||''));
                    }
                    document.write(['<a class="qcShareQQDiv" href="http://connect.qq.com/widget/shareqq/index.html?',s.join('&'),'" target="_blank">分享到QQ</a>'].join(''));
                })();
            </script>
            <script src="http://connect.qq.com/widget/loader/loader.js" widget="shareqq" charset="utf-8"></script>

        </div>
    </div>
</div>

