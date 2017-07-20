<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="zh-CN" xml:lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title><?php echo $site_title; ?></title>
    <meta name="keywords" content="<?php echo $site_keywords; ?>" />
    <meta name="description" content="<?php echo $site_description; ?>" />
    <link key="resetcommon" href="<?php echo $site_template; ?>resetcommon.css" rel="stylesheet" type="text/css" />
    <link key="style" href="<?php echo $site_template; ?>Style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" key="nsw_jcia" src="<?php echo $site_template; ?>JS/NSW_JCIA.js"></script>
    <style type="text/css">
        .title_01{ color:#0e60a9; font-size:24px; line-height:45px; height:45px; color:#0b59a1; position:relative; margin:30px 0 15px;}
        .title_01 img{ vertical-align:top; width:30px; position:absolute; left:0; top:8px;}
        .title_01 b{ font-weight:normal; letter-spacing:4px; padding-left:45px;}
        .title_01 span{ font-size:14px; color:#626262;letter-spacing:2px;}
    </style>
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


<div class="s_bj">
    <div class="search">
        <div class="s_inp01 fr">
            <input type="text" class="inp01 fl" value="请输入关键词搜索" id="seachkeywords" onfocus="this.value=''" />
            <input type="text" class="inp02 fl" id="sousuo" style="cursor:pointer;" />
        </div>
        <p class="fl"><b>大家都在搜索：</b>
            <?php $return = $this->_category("parentid=11 num=4");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
            <a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['catname']; ?>"><?php echo $xiao['catname']; ?></a>
            <?php } ?>
        </p>
    </div>
</div>




<div class="topadcs">
    <a class="fullad" href="/product.html" style="background:url(<?php echo $site_template; ?>img/banner.jpg) no-repeat center top;"></a>
</div>