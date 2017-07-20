<?php include $this->_include('header.html'); ?>
<div class="content">
    <div class="rightl">
        <div class="righttop"></div>
        <div class="plc"><span class="red_x">当前位置：</span><a href="/" title="首页">首页</a> &raquo; <?php echo position($catid, ' &raquo;'); ?></div>
        <div class="rightbot"></div>
        <div class="righttop"></div>
        <div class="pro_main">
            <div id="printableview">


                <dl class="pro_details details">
                    <dt class="details-slider-box">
                    <ul class="aaa"><img src="<?php echo image($thumb); ?>" width="430" height="430px"/></ul>

                    </dt>
                    <dd>
                        <h3><?php echo $title; ?></h3>
                        <div class="shortdesc">
                            <p><?php echo $chanpinmiaoshu; ?></p>
                        </div>
                        <div class="pd_hotline">
                            <span>全国服务热线：</span><span class="font_hotline"><?php $this->block(12);?></span>
                        </div>
                        <div class="propar" style="text-align: center; padding-top: 20px;">
                            <div class="proparp">
                                <a href="http://wpa.qq.com/msgrd?v=3&site=<?php echo $site_name; ?>&menu=yes&uin=	<?php $this->block(13);?>" rel="nofollow" target="_blank" title="在线咨询"><img style="border: 0" src="<?php echo $site_template; ?>img/buynowsmalls.gif" alt="在线咨询" /></a>
                            </div>
                        </div>
                    </dd>
                </dl>






                <div class="clear"></div>
                <div class="proinfo " id="detailvalue0">
                    <?php if ($chanpinjianjie!="") { ?>
                    <p style="text-align: center; margin: 30px 0px;">
                        <img src="<?php echo $site_template; ?>20170524140630_0468.jpg" title="产品介绍" align="center" alt="产品介绍" />
                    </p>

                    <?php echo $chanpinjianjie;  } ?>

                    <p style="text-align: center;margin:30px 0;">
                        <img src="<?php echo $site_template; ?>20170524133939_9218.jpg" title="产品展示" align="center" alt="产品展示" />
                    </p>

                    <?php echo $content; ?>
                    <img src="<?php echo $site_template; ?>20170524140852_0156.jpg" title="加工流程" align="center" alt="加工流程" />
                </p>
                    <p style="text-align: center;">
                        <img src="<?php echo $site_template; ?>img/jg.jpg" title="加工流程" alt="加工流程" />
                    </p>
                    <p style="text-align: center;">
                        <img src="<?php echo $site_template; ?>20170524140908_3281.jpg" title="加工实力" align="center" alt="加工实力" />
                    </p>
                    <div style="background:url(<?php echo $site_template; ?>img/20170524163819_0000.jpg) no-repeat 0 0;width:930px;height:547px;">
                        <p style="padding:0 0 0 50px;*padding-top:-20px;_padding-top:-20px;*margin-top:0px;_margin-top:0px;">
                            <b><span style="font-size: 18px; color: #0027b0;">高科技加工设备</span></b>
                        </p>
                        <p style="padding:0px 0 0 50px;width:215px;">
                            引进国内外曝光机、蚀刻机、显影机、清洗机、立式蚀刻机、贴膜机等先进生产设备。速度有保障。
                        </p>
                        <p style="padding:10px 0 0 50px;">
                            <b><span style="font-size: 18px; color: #0027b0;">精细化蚀刻工艺</span></b>
                        </p>
                        <p style="padding:0 0 0 50px;width:215px;">
                            产品的精度可以达到最小开孔0.03mm，最细线径0.015mm，均匀度可达到+/-0.03mm。精度有保障。
                        </p>
                        <p style="padding:0px 0 0 50px;">
                            <b><span style="font-size:18px;color:#0027b0;">多层级品控检测</span></b>
                        </p>
                        <p style="padding:0 0 0 50px;width:215px;">
                            产品加工完成经过24道检测工序，严格把控每一个细节，检测合格率高达98%。品质有保障。
                        </p>
                    </div>
                    <p style="text-align: center;margin:30px 0;">
                        <img src="<?php echo $site_template; ?>img/20170524140100_5468.jpg" title="联系鑫海森" align="center" alt="联系鑫海森" />
                    </p>
                    <div class="response-blk">
                        <style>
                            * {
                                padding: 0;
                                margin: 0
                            }
                            .tpl-lxfs1-wrap {
                                padding: 0 10px;
                                height: 445px;
                                *height: 445px;
                                margin: 20px 0;
                                *margin: 20px 0;
                            }
                            .tpl-lxfs1-wrap .tpl-lxfs1-bdl {
                                min-width: 320px;
                                font-family: "微软雅黑";
                                color: #333;
                                margin: 10px 20px 20px 0
                            }
                            .tpl-lxfs1-wrap .tpl-lxfs1-bdl > span {
                                font-size: 18px;
                                font-weight: bold;
                                display: block;
                                color: #1346BB;
                                margin-bottom: 20px
                            }
                            .tpl-lxfs1-wrap .tpl-lxfs1-bdl > p {
                                line-height: 28px;
                                padding: 0 0 14px 70px;
                                *padding: 0 0 14px 70px;
                                margin-top: 14px;
                                border-bottom: 1px solid #ddd;
                                overflow: hidden;
                            }
                            .tpl-lxfs1-wrap .tpl-lxfs1-bdr img {
                                width: 100%;
                                max-width: 100%;
                                height: auto;
                                margin-bottom: 15px;
                                display: block;
                            }
                            .tpl-lxfs1-wrap .tpl-lxfs1-bdl {
                                float: left;
                                min-width: 300px;
                                width: 39.5%;
                                *width: 39.5%;
                                font-family: "微软雅黑";
                                color: #333;
                                margin: 10px 20px 20px 0
                            }
                            .tpl-lxfs1-wrap .tpl-lxfs1-bdl > p {
                                height: 45px;
                                line-height: 28px;
                                padding: 0 0 14px 70px;
                                margin: 0;
                                margin-top: 14px;
                                border-bottom: 1px solid #ddd;
                                overflow: hidden;
                            }
                            @media (min-width: 996px) {}
                            }
                        </style>
                        <div class="tpl-lxfs1-wrap">
                            <div class="tpl-lxfs1-bdl">
                                <span>深圳市鑫海森科技有限公司</span>
                                <p style="background:url(<?php echo $site_template; ?>20170522171733_7187.jpg) left top no-repeat;">
                                    联系电话：0755-29791052<br />
                                    0755-29791035
                                </p>
                                <p style="background:url(<?php echo $site_template; ?>20170522171733_5312.jpg) left top no-repeat;">
                                    传真：0755-29791571
                                </p>
                                <p style="background:url(<?php echo $site_template; ?>20170522171733_6562.jpg) left top no-repeat;">
                                    邮箱：info@xinhsen.com
                                </p>
                                <p style="background:url(<?php echo $site_template; ?>20170522171733_4218.jpg) left top no-repeat;">
                                    QQ：410656052
                                </p>
                                <p style="background:url(<?php echo $site_template; ?>20170522171733_5937.jpg) left top no-repeat;">
                                    地址：广东省深圳市宝安区沙井镇大王山工业一路17号2栋
                                </p>
                            </div>
                            <div style="float:left;min-width:320px;width:530px;">
                                <p style="width:100%;max-width:100%;height:auto;margin-bottom:15px;display:block;">
                                    <img src="<?php echo $site_template; ?>20170522172234_2031.png" title="MAP" alt="MAP" />
                                </p>
                                <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2&amp;ak=RnpSFA9OEDOTHokaV1xiHOgY"></script>
                                <!--百度地图容器-->
                                <div style="width:530px;height:340px;border:#ccc solid 1px;font-size:12px" id="map">
                                </div>
                                <script type="text/javascript">
                                    //创建和初始化地图函数：
                                    function initMap(){
                                        createMap();//创建地图
                                        setMapEvent();//设置地图事件
                                        addMapControl();//向地图添加控件
                                        addMapOverlay();//向地图添加覆盖物
                                    }
                                    function createMap(){
                                        map = new BMap.Map("map");
                                        map.centerAndZoom(new BMap.Point(113.806603,22.718066),19);
                                    }
                                    function setMapEvent(){
                                        map.enableScrollWheelZoom();
                                        map.enableKeyboard();
                                        map.enableDragging();
                                        map.enableDoubleClickZoom()
                                    }
                                    function addClickHandler(target,window){
                                        target.addEventListener("click",function(){
                                            target.openInfoWindow(window);
                                        });
                                    }
                                    function addMapOverlay(){
                                        var markers = [
                                            {content:"联系电话：0755-29791052 0755-29791035<br/>  传真：0755-29791571<br/>  电子邮件：info@xinhsen.com<br/>  QQ：410656052<br/>  公司地址：广东省深圳市宝安区沙井镇大王山工业一路17号2栋",title:"深圳市鑫海森科技有限公司",imageOffset: {width:0,height:-21},position:{lat:22.717854,lng:113.806728}}
                                        ];
                                        for(var index = 0; index < markers.length; index++ ){
                                            var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
                                            var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                                                imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
                                            })});
                                            var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
                                            var opts = {
                                                width: 200,
                                                title: markers[index].title,
                                                enableMessage: false
                                            };
                                            var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
                                            marker.setLabel(label);
                                            addClickHandler(marker,infoWindow);
                                            map.addOverlay(marker);
                                        };
                                    }
                                    //向地图添加控件
                                    function addMapControl(){
                                        var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
                                        scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
                                        map.addControl(scaleControl);
                                        var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
                                        map.addControl(navControl);
                                        var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
                                        map.addControl(overviewControl);
                                    }
                                    var map;
                                    initMap();
                                </script>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;margin:30px 0;">
                    </div>
                </div>

               

            </div>
            <div class="clear"></div>


        </div>
        <div class="rightbot"></div>
    </div>
    <?php include $this->_include('pro_left.html'); ?>
    <div class="clear"></div>
</div>
<!--content:end-->
<script type="text/javascript">
    productLoad();
</script>
<script type="text/javascript">
    var temp_html = '<li><img src="{$path$}" title="不锈钢网片蚀刻加工" alt="不锈钢网片蚀刻加工" /></li>';
    var __html = "";

    //数组排序
    ARR_IMG_PATH.reverse();

    for (var i = 0; i < ARR_IMG_PATH.length; i++) {
        if (i == 0) {
            __html = temp_html.replace(/\{\$path\$\}/ig, ARR_IMG_PATH[i]).replace(/\{\$title\$\}/ig, OBJ_TITLE);
        } else {
            __html += temp_html.replace(/\{\$path\$\}/ig, ARR_IMG_PATH[i]).replace(/\{\$title\$\}/ig, OBJ_TITLE);
        }
    }
    $(".details-slider-box ul").html(__html);
    $('.details').slide({ mainCell: ".details-slider-box ul", effect: "leftLoop", autoPlay: true, vis: 1, prevCell: ".btnl", nextCell: ".btnr" });
    { $type$ } Load();
</script>
<?php include $this->_include('footer.html'); ?>