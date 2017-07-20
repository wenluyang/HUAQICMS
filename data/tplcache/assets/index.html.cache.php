<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="zh-CN" xml:lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title><?php echo $site_title; ?></title>
    <meta name="keywords" content="<?php echo $site_keywords; ?>" />
    <meta name="description" content="<?php echo $site_description; ?>" />
    <link key="resetcommon" href="<?php echo $site_template; ?>resetcommon.css" rel="stylesheet" type="text/css" />
    <link key="index" href="<?php echo $site_template; ?>index.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" key="nsw_index" src="<?php echo $site_template; ?>JS/NSW_Index.js"></script>
</head>
<body>

<div class="topWrap">
    <div class="header">
        <div class="twz"><span class="fr">
        <a href="javascript:void(0);" onclick="javascript:addBookmark(this)" title="收藏金美特"><img src="<?php echo $site_template; ?>Img/Common/a_ico01.gif" alt="" />收藏金美特</a>
        <a href="/about.html" title="公司简介" target="_blank"><img src="<?php echo $site_template; ?>Img/Common/a_ico02.gif" alt="" />公司简介</a>
        <a href="/Sitemap.xml" title="网站地图" target="_blank"><img src="<?php echo $site_template; ?>Img/Common/a_ico03.gif" alt="" />网站地图</a>
        </span>您好！欢迎来到<?php echo $site_name; ?>官网！</div>
        <div class="t_c">
            <div class="fl logo"><a href="/" title="金美特" name="logo"><img src="<?php echo $site_template; ?>Img/logo.jpg" alt="金美特" title="金美特" /></a></div>
            <h2><span><?php echo $site_name; ?></span><br>液压升降机研发制造专家</h2>
            <p><span>全国咨询热线</span><?php $this->block(12);?></p>
        </div>
    </div>
</div>
<div class="h_nav" id="x_menu" style="z-index:9999;">
    <ul> <?php $i = 0;   $return = $this->_category("num=10");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
        <li class="<?php if ($current) { ?>cur<?php }  if ($i==count($return)-1) { ?>nobg<?php } ?>"><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['catname']; ?>" ><?php echo $xiao['catname']; ?></a></li>
        <?php $i++;  } ?></ul>
</div>

<!--搜索-->





<div class="banner fullSlide">
    <div class="bd">
        <ul>

            <?php $return = $this->_listdata("table=diy_huangdeng   num=10"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
            <li _src="url(<?php echo $xiao['tupian']; ?>)"><a href="<?php echo $xiao['wangzhi']; ?>" title="<?php echo $xiao['biaoti']; ?>" target="_blank"></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="hd"><ul></ul></div>
    <span class="prev png"></span>
    <span class="next png"></span>
</div>

<div class="s_bj">
    <div class="search">
        <div class="s_inp01 fr">
            <input type="text" class="inp01 fl" value="请输入关键词搜索" id="seachkeywords" onfocus="this.value=''" />
            <input type="text" class="inp02 fl" id="sousuo" style="cursor:pointer;" />
        </div>
        <p class="fl"><b>大家都在搜索：</b> <?php $return = $this->_category("parentid=11 num=4");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
            <a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['catname']; ?>"><?php echo $xiao['catname']; ?></a>
            <?php } ?></p>
    </div>
</div>


 <div class="pro_bj">
    <div class="pro">
        <h2><a href="/product.html" title="金美特产品展示">金美特产品展示</a><span>用心把握每一个“金美特” 全力保障品质</span></h2>





        <div class="list fl">
            <ul>

                <?php $return = $this->_category("parentid=11");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
                <li><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['catname']; ?>"><?php echo $xiao['catname']; ?></a></li>
                <?php } ?>

            </ul>
        </div>



        <div class="pro1 fr">




            <ul>
                <?php $return = $this->_listdata("catid=11 num=12"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                <li> <a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>" target="_blank">
                    <img src="<?php echo image($xiao[thumb]); ?>" alt="<?php echo $xiao['title']; ?>" title="<?php echo $xiao['title']; ?>" /><span><?php echo $xiao['title']; ?></span></a></li>

                <?php } ?>
            </ul>



            <script type="text/javascript">
                $(".pro1 ul").find("li:last").addClass("nomar");
            </script>

        </div>
    </div>
</div>
<div class="ys_bj">
    <h2>13年的品牌沉淀   液压升降机行业翘楚<span>以技术为核心、视质量为生命、奉用户为上帝</span></h2>
    <div class="ys1"></div>
    <div class="ys2"></div>
    <div class="ys3"></div>
    <div class="ys4"></div>
    <div class="ys">
        <p class="p01"><img src="<?php echo $site_template; ?>Img/Index/ysimg01.jpg" alt="" /></p>
        <p class="p02"><img src="<?php echo $site_template; ?>Img/Index/ysimg02.jpg" alt="" /></p>
        <p class="p03"><img src="<?php echo $site_template; ?>Img/Index/ysimg03.jpg" alt="" /></p>
        <p class="p04"><img src="<?php echo $site_template; ?>Img/Index/ysimg04.jpg" alt="" /></p>
        <p class="p05"><img src="<?php echo $site_template; ?>Img/Index/ysimg05.jpg" alt="" /></p>
        <p class="p06"><img src="<?php echo $site_template; ?>Img/Index/ysimg06.jpg" alt="" /></p>
        <p class="p07"><img src="<?php echo $site_template; ?>Img/Index/ysimg07.jpg" alt="" />
            <img src="<?php echo $site_template; ?>Img/Index/ysimg08.jpg" alt="" />
            <img src="<?php echo $site_template; ?>Img/Index/ysimg09.jpg" alt="" /><img src="<?php echo $site_template; ?>Img/Index/ysimg10.jpg" alt="" /></p>
        <dl class="dl01">
            <dt><span>专业研发团队  实力雄厚</span>13年研发制造经验，5000平米生产厂房</dt>
            <dd>拥有资深生产团队和专业生产车间，集生产、设计、销售于一体的液压升降设备专业制造商，拥有经验丰富的一流研发生产团队，严格的流程管理、生产工序、测试环境，达到高品质水平</dd>
        </dl>
        <dl class="dl02">
            <dt><span>选材优异  按客户需求定制</span>精选行业品牌材料供应商，生产流程标准化</dt>
            <dd>金美特与多家国内外知名供应商合作，液压升降机原材料品质保障；</dd>
            <dd>10多年沉淀形成生产及管理的标准化，技术力量雄厚，产品合格率达98%以上，远超同行业水平。</dd>
        </dl>
        <dl class="dl03">
            <dt><span>研发实力强  精度高</span>强大的技术团队，实现高标准出厂    </dt>
            <dd>公司拥有一支强大的技术工程师，行业沉淀久，生产制造经验丰富</dd>
            <dd>专业技术人员调试，严格质检，高标准出厂。</dd>
        </dl>
        <dl class="dl04">
            <dt><span>服务保障好  配合佳</span>多方位服务方案，满足客户的一站式采购需求</dt>
            <dd>与大型物流企业长期合作，业务辐射区域内专线运输，及时送货</dd>
            <dd>专门装卸车队伍，24小时内多车同时装卸，准时发货。</dd>
            <dd>专业工程师团队上门考察，给客户提供免费工程设计方案</dd>
        </dl>
    </div>
</div>



<div class="coo_bj">
    <div class="coo">
        <h2><a href="/case.html" title="金美特合作伙伴">金美特合作伙伴</a><span>感恩每一位客户的一路相伴  </span></h2>
        <div class="coo_z fl"><img src="<?php echo $site_template; ?>Img/Index/coo_z.png" alt="" /></div>
        <div class="coo_c fl">
            <div class="coo_c2">
                <?php $return = $this->_listdata("catid=13 num=10"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                <dl>
                    <dt><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>" target="_blank">
                        <img src="<?php echo image($xiao[thumb]); ?>" alt="<?php echo $xiao['title']; ?>" title="<?php echo $xiao['title']; ?>" /></a></dt>
                    <dd><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>" target="_blank">
                        <br><br><br><br>
                    </a>
                        <h3><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>" target="_blank"><?php echo $xiao['title']; ?></a></h3>
                        <p><?php echo strcut($xiao[description],120); ?>...<a href="h<?php echo $xiao['url']; ?>" title="查看详情" target="_blank">【查看详情】</a></p></dd>
                </dl>
                <?php } ?>

            </div>
        </div>
        <div class="coo_y fr"><img src="<?php echo $site_template; ?>Img/Index/coo_y.png" alt="" /></div>
    </div>
</div>


<script type="text/javascript">
    $(function () {
        $(".coo_bj").slide({ mainCell: ".coo_c2", effect: "leftLoop", autoPlay: true, vis: 3, scroll: 1, prevCell: ".coo_z", nextCell: ".coo_y" });
    });
</script><div class="lc">
    <h2><a href="javascript:void(0);">金美特制造服务流程</a><span>严格把控生产流程的每一步</span></h2>
    <ul>
        <li><img src="<?php echo $site_template; ?>Img/Index/lc01.jpg" alt="" /><span>a 升降机原材料储藏车间</span><p><img src="<?php echo $site_template; ?>Img/Index/lcimg1.png" alt="" /></p></li>
        <li><img src="<?php echo $site_template; ?>Img/Index/lc02.jpg" alt="" /><span>b 升降平台大型下料车间</span><p><img src="<?php echo $site_template; ?>Img/Index/lcimg2.png" alt="" /></p></li>
        <li><img src="<?php echo $site_template; ?>Img/Index/lc03.jpg" alt="" /><span>c 升降机全自动焊接车间</span><p><img src="<?php echo $site_template; ?>Img/Index/lcimg3.png" alt="" /></p></li>
        <li><img src="<?php echo $site_template; ?>Img/Index/lc04.jpg" alt="" /><span>d 货梯喷砂除锈车间</span><p><img src="<?php echo $site_template; ?>Img/Index/lcimg4.png" alt="" /></p></li>
        <li class="nomar"><img src="<?php echo $site_template; ?>Img/Index/lc05.jpg" alt="" /><span>e 升降机自动化烤漆车间</span><p><img src="<?php echo $site_template; ?>Img/Index/lcimg5.png" alt="" /></p></li>
        <li><img src="<?php echo $site_template; ?>Img/Index/lc06.jpg" alt="" /><span>f 升降机组装车间</span><p><img src="<?php echo $site_template; ?>Img/Index/lcimg6.png" alt="" /></p></li>
        <li><img src="<?php echo $site_template; ?>Img/Index/lc07.jpg" alt="" /><span>g 升降机成品仓库</span><p><img src="<?php echo $site_template; ?>Img/Index/lcimg7.png" alt="" /></p></li>
        <li><img src="<?php echo $site_template; ?>Img/Index/lc08.jpg" alt="" /><span>h 专业工程师上门考察</span><p><img src="<?php echo $site_template; ?>Img/Index/lcimg8.png" alt="" /></p></li>
        <li><img src="<?php echo $site_template; ?>Img/Index/lc09.jpg" alt="" /><span>i 包装出货专业装卸团队</span><p><img src="<?php echo $site_template; ?>Img/Index/lcimg9.png" alt="" /></p></li>
        <li class="nomar"><img src="<?php echo $site_template; ?>Img/Index/lc10.jpg" alt="" /><span>j 贴心的售后服务</span><p><img src="<?php echo $site_template; ?>Img/Index/lcimg10.png" alt="" /></p></li>
    </ul>
</div>



<div class="about_bj">
    <div class="about">
        <h2><a href="/about.html">走进金美特</a><span>进取、求实 、严谨、 团结</span></h2>



        <dl>
            <dt class="pr">
                <a class="a_video" href="javascript:" style="z-index: 1; visibility: visible;"></a>

                <img src="<?php echo $site_template; ?>img/t1.jpg">

            </dt>


            <dd><h3><a href="/about.html"><?php echo $site_name; ?></a></h3>
                <p><?php $this->block(19);?>...
                    <a href="/about.html">【查看详情】</a></p></dd>
        </dl>
    </div>
</div>


<script type="text/javascript">

    $(function () {
        var a_imgs = $(".about dl dt a.a_video");
        a_imgs.css({ "z-index": "1", "visibility": "visible" });
        a_imgs.click(function () {
            a_imgs.css({ "z-index": "0", "visibility": "hidden" });
            $(".vdo").show().removeClass("hide");
        });
    })
</script>


<div class="xc plug" data-src='[".xc_nav ul.zzz li",".show_c"]' fn="TabCat">
    <div class="xc_nav">
        <ul class="zzz">
            <li class=" cur "><a href="/video.html" title="产品视频" target="_blank">产品视频</a></li>
            <li class=" "><a href="/photo.html" title="公司相册" target="_blank">公司相册</a></li>
        </ul>
    </div>
    <div class="xc_c plug" data-src='{titCell:null,mainCell:"ul",effect:"leftLoop",autoPlay:true,vis:4,scroll:1}' fn="slide">
        <ul>
            <?php $return = $this->_listdata("catid=17 num=10"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
            <li><a target="_blank" rel="group_7" class="group" href='<?php echo image($xiao[thumb]); ?>' title="<?php echo $xiao['title']; ?>">
                <img src="<?php echo image($xiao[thumb]); ?>" alt="<?php echo $xiao['title']; ?>" title="<?php echo $xiao['title']; ?>" width="280px" height="260px"/><span><?php echo $xiao['title']; ?></span></a></li>
            <?php } ?>

        </ul>
    </div>
    <div class="xc_c plug" data-src='{titCell:null,mainCell:"ul",effect:"leftLoop",autoPlay:true,vis:4,scroll:1}' fn="slide">
        <ul>
            <?php $return = $this->_listdata("catid=3 num=10"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
            <li><a target="_blank" rel="group_7" class="group" href='<?php echo image($xiao[thumb]); ?>' title="<?php echo $xiao['title']; ?>">
                <img src="<?php echo image($xiao[thumb]); ?>" alt="<?php echo $xiao['title']; ?>" title="<?php echo $xiao['title']; ?>" width="280px" height="280px"/><span><?php echo $xiao['title']; ?></span></a></li>
            <?php } ?>

        </ul>
    </div>

</div>


<script type="text/javascript">
    $(".xc").find(".xc_c:eq(1)").addClass("ooox");
    $(".xc").find(".xc_c:eq(2)").addClass("ooox");

    $(".xc").find("div.xc_c:first").siblings("div.xc_c").hide();
    $(".xc_nav ul.zzz li").mouseover(function () {
        var _index = $(this).addClass("cur").siblings("li").removeClass("cur").parent("ul").children("li").index(this);
        $(".xc div.xc_c").eq(_index).show().siblings("div.xc_c").hide();
    });
</script><div class="news_bj">
    <div class="content">
        <h2><a href="/news.html">聚焦金美特 </a><span>实时关注行业热点</span></h2>




        <div class="news fl">
            <h3><span class="fr"><a href="/news.html">MORE+</a></span><i><a href="/news.html">金美特动态</a><img src="<?php echo $site_template; ?>Img/Index/news_w.gif" alt="" /></i></h3>
            <div class="news_c">
                <div class="news_c1">
                    <?php $return = $this->_listdata("catid=9 num=4"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                    <dl>
                        <dt><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>" target="_blank">
                            <img src="<?php echo $site_template; ?>Img/Index/news.jpg" alt="<?php echo $xiao['title']; ?>" title="<?php echo $xiao['title']; ?>" /></a></dt>
                        <dd><h4><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>" target="_blank"><?php echo $xiao['title']; ?></a></h4>
                            <p><?php echo $xiao['description']; ?>...
                                <a href="<?php echo $xiao['url']; ?>" title="详情" target="_blank">【详情】</a></p></dd>
                    </dl>
                    <?php } ?>
                </div>
            </div>
            <ul>

                <?php $return = $this->_listdata("catid=9 num=4"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                <li><span class="fr"><?php echo date('Y-m-d',$xiao['time']); ?></span><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>" target="_blank"><?php echo $xiao['title']; ?></a></li>
                <?php } ?>
            </ul>
        </div>





        <div class="fr news2">





            <div class="wt">
                <h3><span class="fr"><a href="/cjwt.html" title="MORE">MORE+</a></span>
                    <i><a href="/cjwt.html" title="常见问答">常见问答</a>
                        <img src="<?php echo $site_template; ?>Img/Index/wt_w.gif" alt="" /></i></h3>
                <div class="xxx" id="cjwt" style="margin-top:10px;">
                    <?php $return = $this->_listdata("catid=10 num=5"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                    <dl>
                        <dt> <a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>" target="_blank">
                            <img src="<?php echo image($xiao[thumb]); ?>" alt="<?php echo $xiao['title']; ?>" title="<?php echo $xiao['title']; ?>" /></a></dt>
                        <dd><h4> <a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>" target="_blank"><?php echo $xiao['title']; ?></a></h4>
                            <p><?php echo $xiao['description']; ?>...</p></dd>
                    </dl>
                    <?php } ?>
                </div>
            </div>




            <script type="text/javascript">
                $(function () {
                    new Marquee("cjwt", 0, 1, 434, 200, 35, 0, 1000, 22);
                });
            </script>




            <div class="news1">
                <h3><span class="fr"><a href="/hydt.html">MORE+</a></span><i><a href="/hydt.html">行业动态</a><img src="<?php echo $site_template; ?>Img/Index/news_w1.gif" alt="" /></i></h3>
                <p><img src="<?php echo $site_template; ?>Img/Index/news1.jpg" alt="" /></p>
                <ul>
                    <?php $return = $this->_listdata("catid=8 num=5"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                    <li><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>" target="_blank"><?php echo $xiao['title']; ?></a></li>
                    <?php } ?>

                </ul>
            </div>        </div>
    </div>



    <div class="link">
        <h2><a title="友情链接" target="_blank">友情链接</a> </h2>
        <p>

        </p>

    </div>



</div>
<?php include $this->_include('footer.html'); ?>