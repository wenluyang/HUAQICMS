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
            <div class="age_li_about age_li_about_960"><p style="text-align: center;">
                <img src="<?php echo $site_template; ?>img/a1.jpg" title="金美特简介" align="center" alt="金美特简介" />
            </p>
                <div style="width:800px;margin-left:215px;">
                    <p style="text-align: center;">
                        济南金美特升降机械有限公司 是专业生产液压升降平台，移动式升降机，固定式升降平台，铝合金升降机，升降舞台，登车桥等。生产设备先进，技术力量雄厚，工艺流程先进合理，检测手段齐全。具有设计新颖、结构合理、升降平衡、操作简单、维修方便等其他产品不可替代的优点。广泛用于厂房维护、工业安装、设备检修物业管理、仓库、航空、机场、港口、车站、机械、化工、医药、电子、电力等高空设备安装和检修。
                    </p>
                    <p style="text-align: center;">
                        具体产品有：<span style="color:#1b4cbb;">
                           <?php $return = $this->_category("parentid=11");  if (is_array($return))  foreach ($return as $key=>$xiao) { $allchildids = @explode(',', $xiao['allchildids']);    $current = in_array($catid, $allchildids); echo $xiao['catname']; ?>&nbsp;&nbsp;
   <?php } ?>                    </span>。
                    </p>
                </div>
                <div style="clear:both;border-bottom:5px #ccc solid;margin:50px 0;">
                </div>
                <div style="float:left;width:500px;">
                    <img src="<?php echo $site_template; ?>img/a22.jpg" title="鑫海森" alt="鑫海森" />
                </div>
                <div style="float:right;width:680px;">
                    <p style="margin-top: -10px;">
                        <img src="<?php echo $site_template; ?>img/a2.jpg" title="服务保障" alt="服务保障" />
                    </p>
                    <p>
                        济南金美特升降机械有限公司一贯秉承“客户第一、质量第一、服务第一”之经营理念，贯彻以市场为导向，以信息化技术为保障，以人性化管理为核心方针，建设一支能力强，知识广，反应快的国际营销团队。形成了覆盖全国的销售网络，产品畅销国内外。在任何地区，都能得到济南金美特升降机械有限公司专业技术人员最及时优质的服务。自产品交货之日起壹年内，正常使用情况下，由于产品质量原因(非使用不当等人为原因)造成的设备故障，免费保修。公司为客户提供终身制的产品上门维护和另配件平价供应。
                    </p>
                    <p style="margin-top:60px;">
                        <img src="<?php echo $site_template; ?>img/a333.jpg" title="加工实力" alt="加工实力" />
                    </p>
                    <p>
                        公司凭借强大的技术力量和多年的生产经验，不断采用新技术、新工艺、新材料，产品各项技术指标达到国内同行业领先水平。公司坚持以人为本，勇于探索，不断追求，努力创新发展，不断向社会提供领先适用的新产品，并以全优的服务占领市场，深受广大用户的信赖，享有良好的公众诚信度。产品销往山东、河北、山西、黑龙江、江西、内蒙古、广州、北京、天津、上海、深圳等二十几个省市地区。
                    </p>
                </div>
                <div style="clear:both;margin:50px 0;">
                </div>



             </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<?php include $this->_include('footer.html'); ?>