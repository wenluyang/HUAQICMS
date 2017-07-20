<?php include $this->_include('header.html'); ?>
<div class="content">
    <div class="right">
        <div class="righttop"></div>
        <div class="right_main">
            <div class="plc">
                <span class="red_x">当前位置：</span>
                <a href="/" title="首页">首页</a> »
                <?php echo position($catid, ' &raquo;'); ?>
            </div>           <div class="news_con News_2 News_2_3">

            <div class="left2_main">
                <div class="n_info_con" id="printableview">
                    <h1><?php echo $title; ?></h1>
                    <div class="info_con_tit">
                        <div class="info_con_tit">
                            <div class="n_tit">
                                <span>来源：<?php echo $site_name; ?></span>
                                <span>浏览：<span id="cntrHits"><script type="text/javascript" src="<?php echo url('api/hits',array('id'=>$id)); ?>"></script></span></span>
                                <span>发布日期：<?php echo date("Y-m-d H:i:s", $time); ?>【<a href="javascript:;" onclick="ChangeFontSize(this,'16px')">大</a> <a class="cur" href="javascript:;" onclick="ChangeFontSize(this,'14px')">中</a> <a href="javascript:;" onclick="ChangeFontSize(this,'12px')">小</a>】</span>
                            </div>
                        </div>
                    </div>
                    <div id="cntrBody">
                        <?php echo $content; ?>
                    </div>
                    <div class="clear"></div>
                    <div class="gduo" id="gduo">
                        <?php if ($next_page) { ?><span>下一篇：<a href="<?php echo $next_page['url']; ?>"><?php echo $next_page['title']; ?></a> </span><?php }  if ($prev_page) { ?>上一篇：<a href="<?php echo $prev_page['url']; ?>"><?php echo $prev_page['title']; ?></a><?php } ?>
                    </div>
                </div>

            </div>                                                <div class="clear"></div>

        </div>
        </div>
        <div class="rightbot"></div>

        <style type="text/css">
            .new-s dl{width: 930px;margin: 0 auto;padding-top:15px;height:143px;}
            .new-s dl dt {height:143px;width: 232px;float: left;position: relative;border-bottom: 0 solid #e2e2e2}
            .new-s dl dt img{width: 232px;height: 135px;transition:All 0.4s ease-in-out;-webkit-transition:All 0.4s ease-in-out;-moz-transition:All 0.4s ease-in-out;-o-transition:All 0.4s ease-in-out;}
            .new-s dl dt a:hover img{transform:scale(1.05);-webkit-transform:scale(1.05);-moz-transform:scale(1.05);-o-transform:scale(1.05);-ms-transform:scale(1.05);}
            .new-s dl dt p{width: 232px;height: 28px; overflow:hidden; text-overflow:ellipsis; display: none;position: absolute;top:95px;left:0px;font: 14px 'Microsoft  YaHei';color: #fff;text-align: center;line-height: 28px}
            .new-s dl dd{width: 670px;float: right;height:138px;border-bottom: 1px solid #e2e2e2; position:relative;}
            .new-s dl dd p{color: #353e47;font-size: 16px;font-weight: bold;margin-bottom:8px;}
            .new-s dl dd span{font-size: 14px ;color: #353e47;display:inline-block;width: 670px;line-height: 28px; height:84px; overflow:hidden;}
            .new-s dl dd a{display: inline-block;font: 12px 'Microsoft YaHei','微软雅黑';color: #397BE1; float:right; position:absolute; bottom:15px; right:5px;}
            .news_random ul li a{ color:#353e47;padding-top:2px;}
            .news_random ul{ padding-top:10px; margin:0 auto;}
            .news_random ul li{width:445px; padding:0; font-size:13px;}
            .news_random ul li.fr{ float:right;}
            .new-s dl dd p:hover{cursor:pointer;}
        </style>
        <div class="RandomNews">
            <h4 class="diysr">
                推荐资讯
                <i> / Recommended News</i>
                <div class="line"></div>
            </h4>
            <div class="news_random news_random_ new-s">
                <?php $return = $this->_listdata("catid=7 num=1"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                <dl>
                    <dt><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>" target="_blank"><img src="<?php echo $site_template; ?>Img/Index/news.jpg" alt="<?php echo $xiao['title']; ?>" title="<?php echo $xiao['title']; ?>" /><p><?php echo $xiao['title']; ?></p></a></dt>
                    <dd>
                        <p onclick="javascript:window.open('<?php echo $xiao['url']; ?>','_blank')"><?php echo $xiao['title']; ?></p>
                        <span><?php echo $xiao['description']; ?>...</span>
                        <a href="<?php echo $xiao['url']; ?>" title="更多详情" target="_blank">【更多详情】</a>
                    </dd>
                </dl>
                <?php } ?>
                <ul>
                    <?php $i = 0;   $return = $this->_listdata("catid=7 num=16"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                    <li class=" <?php if ($i%2==0) { ?>fl<?php } else { ?>fr<?php } ?>">
                        <span class="fr"><?php echo date('Y-m-d',$xiao['time']); ?></span>
                        <a target="_blank" href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><?php echo $xiao['title']; ?></a>
                    </li>
                    <?php $i++;  } ?>


                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>

    <?php include $this->_include('news_left.html'); ?>
</div>
<div class="clear"></div>
<script type="text/javascript">
    if ($("div.right").height() > $('div.left')) {
        $("#righttuijian").hide().next("div.rightbot").hide();
    } else {
        $("#lefttuijian").hide();
    }
    //SetFenLei("3", { "17": "KHJZ" }, "4");
    if (SID == "0001,0012") {
        $(".news_con").find("dl").removeClass("dl_2");
        $(".news_con").find("dl").addClass("dl_300");
    }
    if (SID == "0001,0012") {
        $(".news_con").find("dl").removeClass("dl_2");
        $(".news_con").find("dl").addClass("dl_200");
    }
    $(".news_con").find("dl.dl_2s:last").addClass("noo");
</script>
<?php include $this->_include('footer.html'); ?>