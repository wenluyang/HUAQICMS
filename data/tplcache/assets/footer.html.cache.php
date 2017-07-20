<div class="footWrap">
    <div class="footer">
        <div class="flogo fl"><a href="/" title="<?php echo $site_name; ?>"><img src="<?php echo $site_template; ?>Img/logo.png" alt="<?php echo $site_name; ?>" title="<?php echo $site_name; ?>" /><span>金美特</span></a></div>
        <div class="fnav">
            <h2>导航</h2>
            <p>
                <?php $return = $this->_category("num=10");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
                <a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['catname']; ?>" ><?php echo $xiao['catname']; ?></a>
                <?php } ?>
            </p></div>
        <div class="contact">
            <h2><a href="javascript:void(0);">公司信息</a></h2>
            <p>电话：<?php $this->block(12);?> &nbsp;&nbsp;
                传真：<?php $this->block(20);?><br />
                邮箱：<?php $this->block(14);?>&nbsp;&nbsp;销售一线：	<?php $this->block(22);?><br />
                销售二线：<?php $this->block(23);?>&nbsp;&nbsp;售后服务：<?php $this->block(24);?><br />
                地址：	<?php $this->block(15);?></p>
        </div>

        <div class="code fr"><img src="	<?php $this->block(18);?>" alt="金美特" title="金美特" /><span>扫一扫<br />联系微信客服</span></div>
    </div>
    <div class="fwz1">
        <span class="fr">百度统计  CNZZ<em></em> </span><?php echo $site_name; ?>版权所有<em></em></div>
</div>


<div class="client-2">
    <ul id="client-2">
        <li class="li01"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php $this->block(13);?>&site=qq&menu=yes" target="_blank" title="咨询">
            <img src="<?php echo $site_template; ?>Img/Common/ico01.gif" alt="" />咨询</a></li>
        <li class="li02"><a href="javascript:void(0);"><img src="<?php echo $site_template; ?>Img/Common/ico02.gif" alt="" />电话</a>
            <div class="tel"><span>电话</span><b><?php $this->block(12);?></b></div>
        </li>
        <li class="li03"><a href="<?php $this->block(12);?>"><img src="<?php echo $site_template; ?>Img/Common/ico03.gif" alt="" />微信</a>
            <div class="code1"><img src="<?php $this->block(18);?>" alt="" /></div>
        </li>
        <li class="li01"><a href="/contact.html" target="_blank" title="联系">
            <img src="<?php echo $site_template; ?>Img/Common/ico001.gif" alt="" />联系</a></li>
        <li class="lastli"><a href="#logo"><img src="<?php echo $site_template; ?>Img/Common/ico04.gif" alt="" /></a></li>
    </ul>
</div>



<!--[if IE 6]>
<script src="<?php echo $site_template; ?>JS/DD_belatedPNG_0.0.8a.js" type="text/javascript"> </script>
<script type="text/javascript">
    DD_belatedPNG.fix('*');
</script>
<![endif]-->
<script src="<?php echo $site_template; ?>JS/rollup.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $("div.s_bj").insertAfter("div.topadcs");
</script>




</body></html><script type="text/javascript">
    // SetFenLei("8", { "30": "ryzs", "31": "hxjs", "32": "sczx", "33": "pyxc" }, "1", "div.a_fz");
    if (1 == 3) {
        $(function () {
            loadJs("/plug/fancybox/jquery.fancybox-1.3.4.pack.js", function () {
                loadCss("/plug/fancybox/jquery.fancybox-1.3.4.css");
                $("a.group").fancybox();
            })
        })
    }
    if (SID == "0001,0006") {
        $(".content").find("dl").removeClass("h_300");
        $(".content").find("dl").addClass("h_301");
    }
    if (SID == "0001,0003") {
        $(".content").find("dl").removeClass("h_300");
        $(".content").find("dl").addClass("h_302");
    }
    if (SID == "0001,0010" || SID == "0001,0011") {
        $(".content").find("dl").removeClass("h_300");
        $(".content").find("dl").addClass("dl_10");
    }
</script>