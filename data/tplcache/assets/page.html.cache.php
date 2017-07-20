<?php include $this->_include('header.html'); ?>
<div class="content">

    <div class="plc">
        <span class="red_x">当前位置：</span>
        <a href="/" title="首页">首页</a>
        &raquo;   <?php echo position($catid, ' &raquo;'); ?>
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
            <div class="age_li_about age_li_about_960"><p style="text-align: center; ">
                <span style="font-size:24px;"><b>金美特&mdash;&mdash;</b></span><span style="color: rgb(0, 51, 153); font-size: 24px;"><b>13年专注液压升降机研发制造</b></span>
            </p>


                <p style="text-indent: 2em;">
                    <?php $this->block(19);?>

                </p>
                <p style="text-align: center;">
                    <img src="<?php echo $site_template; ?>20170524140908_3281.jpg" title="生产实力" align="center" alt="生产实力" />
                </p>
                <div style="background:url(<?php echo $site_template; ?>20170527105050_7463.jpg) no-repeat 0 0;width:1200px;height:714px;">
                    <p style="padding:0 0 0 50px;*padding-top:-20px;_padding-top:-20px;*margin-top:0px;_margin-top:0px;">
                        <b><span style="font-size: 18px; color: #0027b0;">专业研发团队 实力雄厚</span></b>
                    </p>
                    <p style="padding:0px 0 0 50px;width:215px;">
                        拥有资深生产团队和专业生产车间，集生产设计销售一体的液压升降机制造商，拥有经验丰富的一流研发团队，严格的管理、生产工序、测试环境，达到高品质水平。
                    </p>
                    <p style="padding:40px 0 0 50px;">
                        <b><span style="font-size: 18px; color: #0027b0;margin-left: 9px">选材优异 按客户需求定制</span></b>
                    </p>
                    <p style="padding:0 0 0 50px;width:215px;">
                        金美特与多家国内外知名供应商合作，液压升降机原材料品质保障；
                    </p>
                    <p style="padding:40px 0 0 50px;">
                        <b><span style="font-size: 18px; color: #0027b0;margin-left: 9px">研发实力强 精度高</span></b>
                    </p>
                    <p style="padding:0 0 0 50px;width:215px;margin-left: 1px;margin-top: 17px;">
                        公司拥有一支强大的技术工程师，行业沉淀久，生产制造经验丰富
                    </p>
                </div>
                <p style="text-align: center;">
                    <img src="<?php echo $site_template; ?>20170527111746_8168.jpg" title="加工流程" align="center" alt="加工流程" />
                </p>
                <p>
                    <img src="<?php echo $site_template; ?>20170527124912_6535.png" title="鑫海森加工流程" class="imgindex_2" alt="鑫海森加工流程" width="1200" height="484" />
                </p>
                <p style="text-align: center;">
                    <img src="<?php echo $site_template; ?>20170527111336_2024.jpg" title="售后服务" align="center" alt="售后服务" />
                </p>
                <style>.qw{font-family:microsoft yahei;width:100%;margin:0 10px;}
                .qw p{font-family:microsoft yahei;margin:5px 0;}
                .qw h3{font-size:18px;line-height:25px;font-weight:bold;}
                .qw_ys1{width:270px;height:420px;padding:20px 17px 0 17px;background:#f1f1f1;float:left;border-top:#30a6d4 solid 10px;}
                .qw_ys2{width:510px;height:420px;padding:20px 17px 0 17px;margin-left:20px;background:#f1f1f1;float:left;border-top:#8acf1c solid 10px;}
                .qw_ys3{width:270px;height:420px;padding:20px 17px 0 17px;margin-left:20px;background:#f1f1f1;float:left;border-top:#d9c038 solid 10px;}
                </style>
                <div class="qw">
                    <div class="qw_ys1">
                        <h3>
                            售后服务工作流程及管理制度
                        </h3>
                        <p>
                            <b>一，售后服务管理目的：</b><b>为规范售后服务工作，满足客户的需求，保证客户在使用我司产品时，能发挥最大的效益，提高客户对产品的满意度和信任度，提高产品的市场占有率，制定售后服务管理制度及工作流程。</b><br />
                            <span style="color:#FF0000;"><b>	<?php $this->block(24);?>。</b></span>
                        </p>
                        <p>
                            <b>二，售后服务内容：1，根据客户的合同以及图纸的要求，对质量协议期间内的产品，因为制作过程以及或我司因为协作供应商的原因造成我司产品的返修或者报废。我司无偿为客户进行补货或者返修。</b>
                        </p>
                        <p>
                            <b>2，对于质量协议期外的产品，因为我司的原因造成的报废或者返修，我司必须第一时间安排返修或者补货，并以产品的最优惠的价格为客户处理。</b>
                        </p>
                        <p>
                            <br  />
                        </p>
                        <p>
                            <b> </b>
                        </p>
                        <b> </b>
                    </div>
                    <b>
                        <div class="qw_ys2">
                            <h3>
                                <p>
                                    <span style=";font-family:宋体;font-size:14px"> </span>
                                </p>
                                <p style="font-family: 'microsoft yahei'; ">
                                    三，售后服务的标准及要求
                                </p>
                                <p style="font-family: 'microsoft yahei'; ">
                                    <br  />
                                </p>
                                <br />
                            </h3>
                            <p>
                                1，售后服务人员必须树立客户的满意是检验售后服务的标准的理念，在服务中积极、热情、耐心的解答客户提出的各种问题，讲解产品的使用注意事项。客户的无法解答的提问时，应该耐心的解释并反馈回公司售后服务总部协助解决。
                            </p>
                            <p>
                                2，售后人员应该举止文明，大方得体，礼貌待人，主动服务和客户建立良好的合作关系。
                            </p>
                            <p>
                                3，接到服务信息或者投诉必须于8小时内予以回复。需要到达客户现场的，在客户规定时间内必须到达现场。
                            </p>
                            <p>
                                4，决不允许售后人员向客户索取财务费用或者提出无理要求。
                            </p>
                            <p>
                                <br  />
                            </p>
                        </div>
                        <div class="qw_ys3">
                            <p>
                                5，售后人员对客户反馈的问题必须报与公司并全程跟进处理。对同一问题决不允许重复出现。
                            </p>
                            <p>
                                6.售后服务人员完成工作任务后必须填写《售后服务报告单》，并要请客户填写《售后服务满意度调查表》。
                            </p>
                            <p>
                                7，重大质量问题报告公司总部，反馈给相关部门予以解决，并全程跟进。
                            </p>
                        </div>
                    </b>
                </div>
                <b>
                    <div style="clear:both;">
                    </div>
                </b></div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<?php include $this->_include('footer.html'); ?>