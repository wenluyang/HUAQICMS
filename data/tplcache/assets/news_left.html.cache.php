<div class="left">

    <div class="leib2">
        <div class="tit">
            金美特新闻中心
        </div>
        <div class="nr">
            <?php $return = $this->_category("parentid=7");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids);?>
            <h3 sid='0001,0002'><a href="<?php echo $xiao['url']; ?>" title="<?php echo $xiao['catname']; ?>"><?php echo $xiao['catname']; ?></a></h3>
            <?php } ?>
        </div>
    </div>
    <div class="leftlx">
        <h5>联系金美特</h5>
        <div class="nrdiv">
            <div class="phone">
                <span>咨询热线：</span>
                <p class="tel"><?php $this->block(12);?></p>
            </div>
            <p>传真：<?php $this->block(20);?></p>
            <p>业务热线1:<?php $this->block(22);?></p>
            <p>业务热线2:<?php $this->block(23);?></p>
            <p>售后服务:<?php $this->block(24);?></p>
            <p>邮箱：<?php $this->block(14);?></p>
            <p>地址：<?php $this->block(15);?></p>
        </div>
    </div>
</div>