<?php include $this->_include('header.html'); ?>
<div class="content">

    <div class="plc">
        <span class="red_x">当前位置：</span>
        <a href="/" title="首页">首页</a> »
        <?php echo position($catid, ' &raquo;'); ?>
    </div>    <div class="a_nav content clearfix">
    <ul class="clearfix">
        <?php $i = 1;   $return = $this->_category("parentid=1");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
        <li sid='0001,0002' class="<?php if ($current) { ?>cur<?php } ?> li_<?php echo $i; ?>"><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['catname']; ?>"><?php echo $xiao['catname']; ?></a></li>
        <?php $i++;  } ?>
    </ul>
</div>
    <div class="clear"></div>
    <div class="a_fz" id="Div1">
        <div class="allcontent clearfix">
            <div class="a_fz_con_3_5">
                <?php $return = $this->_listdata("catid=$catid page=$page pagesize=15"); extract($return); if (is_array($return))  foreach ($return as $key=>$xiao) { ?>
                <dl class="h_300">
                    <dt><a target="_blank" rel="group" class="group" href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><img src="<?php echo image($xiao[thumb]); ?>" alt="<?php echo $xiao['title']; ?>" title="<?php echo $xiao['title']; ?>" /></a></dt>
                    <dd><a target="_blank" href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['title']; ?>"><?php echo $xiao['title']; ?></a></dd>
                </dl>
                <?php } ?>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<?php include $this->_include('footer.html'); ?>