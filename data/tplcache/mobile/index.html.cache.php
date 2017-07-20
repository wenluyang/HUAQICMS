<!DOCTYPE HTML>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title><?php echo $site_title; ?></title>
    <meta name="keywords" content="<?php echo $site_keywords; ?>" />
    <meta name="description" content="<?php echo $site_description; ?>" />
    <link key="common" href="<?php echo $site_template; ?>css/common.css" rel="stylesheet" type="text/css" />
    <link key="index" href="<?php echo $site_template; ?>css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class='wrap'>
    <header class="g-hd clearfix">
        <a href="/" name="logo"><h3><img  src="<?php echo $site_template; ?>images/Common/logo.jpg" alt=""></h3></a>
        <p><?php echo $site_name; ?></p>
    </header>    <link href="<?php echo $site_template; ?>Css/slick.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $site_template; ?>js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $site_template; ?>js/slick.js" type="text/javascript"></script>
    <section class="g-bd">


        <div class="g-adv  clearfix ">
            <div class="m-box">
                <div class="ad"><a href="/product.html" ><img src="<?php echo $site_template; ?>images/banner.jpg" /></a></div>

            </div>
            <div class="clear"></div>
        </div>


        <script type="text/javascript">
            $('.m-box').slick({ arrows: false, speed: 300, slidesToShow: 1, slidesToScroll: 1, autoplay: true });
        </script> <nav>
        <a href="/" class="cur"><em><img src="<?php echo $site_template; ?>images/Index/ico1.png" alt=""></em>金美特首页</a>
        <a href="/product.html"><em><img src="<?php echo $site_template; ?>images/Index/ico2.png" alt=""></em>产品中心</a>
        <a href="/case.html"><em><img src="<?php echo $site_template; ?>images/Index/ico3.png" alt=""></em>工程案例</a>
        <a href="/news.html"><em><img src="<?php echo $site_template; ?>images/Index/ico4.png" alt=""></em>新闻中心</a>
        <a href="/about.html"><em><img src="<?php echo $site_template; ?>images/Index/ico5.png" alt=""></em>公司简介</a>
        <a href="/contact.html"><em><img src="<?php echo $site_template; ?>images/Index/ico6.png" alt=""></em>联系金美特</a>
    </nav>



        <div class="pro">
            <h2>金美特<span>升降机产品展示 </span><em>Etch product display</em></h2>
            <div class="g-list">
                <?php $return = $this->_category("parentid=11");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
                <a href="<?php echo $xiao['url']; ?>"><?php echo $xiao['catname']; ?></a>
                <?php } ?>


            </div>



 </div>
        <div class=" g-ys clearfix">
            <h2>13年的品牌沉淀  <span>液压升降机行业翘楚 </span><em>13 years of brand deposit etching industry</em></h2>
            <div class="ys_c">
                <div class="con">
                    <p><img src="<?php echo $site_template; ?>images/Index/ys1.jpg" alt=""></p>
                    <dl>
                        <dt><b>专业研发团队 实力雄厚</b>13年行业加工经验，5000平米生产厂房     </dt>
                        <dd>拥有资深生产团队和专业生产车间，集生产、设计、销售于一体的液压升降设备专业制造商，拥有经验丰富的一流研发生产团队，严格的流程管理、生产工序、测试环境，达到高品质水平</dd>
                    </dl>
                </div>
                <div class="con">
                    <p><img src="<?php echo $site_template; ?>images/Index/ys2.jpg" alt=""></p>
                    <dl>
                        <dt><b>选材优异 按客户需求定制</b>精选行业品牌材料供应商，生产流程标准化     </dt>
                        <dd>金美特与多家国内外知名供应商合作，液压升降机原材料品质保障。10多年沉淀形成生产及管理的标准化，技术力量雄厚，产品合格率达98%以上，远超同行业水平。</dd>
                    </dl>
                </div>
                <div class="con">
                    <p><img src="<?php echo $site_template; ?>images/Index/ys3.jpg" alt=""></p>
                    <dl>
                        <dt><b>研发实力强 精度高</b>强大的技术团队，实现高标准出厂   </dt>
                        <dd>公司拥有一支强大的技术工程师，行业沉淀久，生产制造经验丰富，专业技术人员调试，严格质检，高标准出厂。</dd>
                    </dl>
                </div>
                <div class="con">
                    <p><img src="<?php echo $site_template; ?>images/Index/ys4.jpg" alt=""></p>
                    <dl>
                        <dt><b>服务保障好 配合佳</b>多方位加工配合，满足客户的一站式采购需求     </dt>
                        <dd>与大型物流企业长期合作，业务辐射区域内专线运输，及时送货，专门装卸车队伍，24小时内多车同时装卸，准时发货。专业工程师团队上门考察，给客户提供免费工程设计方案。</dd>
                    </dl>
                </div>
            </div>
            <div class="left2 prev2"><img src="<?php echo $site_template; ?>images/Index/left.png" alt=""></div>
            <div class="right2 next2"><img src="<?php echo $site_template; ?>images/Index/right.png" alt=""></div>
            <div class="clear"></div>
        </div>
        <script type="text/javascript">
            $('.ys_c').slick({
                dots: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow:".prev2",
                nextArrow:".next2",
            });
        </script>






        <div class=" g-coo clearfix">
            <h2>金美特  <span><a href="/case.html">合作伙伴</a></span><em>Xin haisen partners</em></h2>
            <div class="coo_c">

                <div class="con">
                    <?php $return = $this->_listdata("catid=13 num=1,2"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                    <dl>
                        <dt><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>">
                            <img src="<?php echo image($xiao[thumb]); ?>" alt="<?php echo $xiao['title']; ?>"  height="186px"/></a></dt>
                        <dd>
                            <h3><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><?php echo $xiao['title']; ?>...</a></h3>
                            <p><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><?php echo $xiao['description']; ?>...<i>【查看详情】</i></a></p></dd>
                    </dl>
                    <?php } ?>

                </div><div class="con">                          <?php $return = $this->_listdata("catid=13 num=3,2"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                <dl>
                    <dt><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>">
                        <img src="<?php echo image($xiao[thumb]); ?>" alt="<?php echo $xiao['title']; ?>"  height="186px"/></a></dt>
                    <dd>
                        <h3><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><?php echo $xiao['title']; ?>...</a></h3>
                        <p><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><?php echo $xiao['description']; ?>...<i>【查看详情】</i></a></p></dd>
                </dl>
                <?php } ?>
            </div><div class="con">  <?php $return = $this->_listdata("catid=13 num=5,2"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                <dl>
                    <dt><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>">
                        <img src="<?php echo image($xiao[thumb]); ?>" alt="<?php echo $xiao['title']; ?>"  height="186px"/></a></dt>
                    <dd>
                        <h3><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><?php echo $xiao['title']; ?>...</a></h3>
                        <p><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><?php echo $xiao['description']; ?>...<i>【查看详情】</i></a></p></dd>
                </dl>
                <?php } ?>                       </div>

            </div>

            <div class="clear"></div>
        </div>


        <script type="text/javascript">
            $('.coo_c').slick({
                dots: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false,
            });
        </script>




        <div class="g-about">
            <h2><a href="/about.html" title="金美特简介">走进金美特 </a><i>Into the xin hai sen</i></h2>
            <dl>
                <dt>  <img src="<?php echo $site_template; ?>images/index/t1.jpg"> </dt>
                <dd><h3><a href="/about.html" title="金美特简介"><?php echo $site_name; ?></a></h3>
                    <p><a href="/about.html" title="金美特简介">	<?php $this->block(19);?>	...<i>【查看详情】</i></a></p></dd>
            </dl>
        </div>
        <div class="g-news j-slide-not ">
            <a href="/news.html"><h2>more+</h2></a>
            <ul class="m-cnt">
                <li>公司新闻</li>
                <li>行业动态</li>
                <li>常见问答</li>
            </ul>
            <div class="m-box">





                <div class="con">
                    <ul>
                        <?php $return = $this->_listdata("catid=9 num=5"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                        <a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><li> <?php echo $xiao['title']; ?>  </li></a>
                        <?php } ?>

                    </ul>
                </div>




                <div class="con">
                    <ul>
                        <?php $return = $this->_listdata("catid=8 num=5"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                        <a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><li> <?php echo $xiao['title']; ?>  </li></a>
                        <?php } ?>
                    </ul>
                </div>




                <div class="con">
                    <ul>
                        <?php $return = $this->_listdata("catid=10 num=5"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                        <a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><li> <?php echo $xiao['title']; ?>  </li></a>
                        <?php } ?>
                    </ul>
                </div>            </div>
        </div>
    </section>


    <?php include $this->_include('footer.html'); ?>