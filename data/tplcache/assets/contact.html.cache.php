<?php include $this->_include('header.html'); ?>
<div class="content">

    <div class="plc">
        <span class="red_x">当前位置：</span>
        <a href="/" title="首页">首页</a>
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
            <div class="age_li_about age_li_about_960"><div class="response-blk">
                <style>
                    * {
                        padding: 0;
                        margin: 0
                    }
                    .tpl-lxfs1-wrap {
                        padding: 0 10px;
                        height: 315px;
                        margin: 20px 0;
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
                        line-height: 45px;
                        padding: 0 0 14px 70px;
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
                    @media (min-width: 768px) {
                        .tpl-lxfs1-wrap .tpl-lxfs1-bdr {
                            float: left;
                            min-width: 300px;
                            width: 49.39%;
                            float: left;
                            padding-top: 10px
                        }
                        .tpl-lxfs1-wrap .tpl-lxfs1-bdl {
                            float: left;
                            min-width: 300px;
                            width: 37.58%;
                            font-family: "微软雅黑";
                            color: #333;
                            margin: 10px 20px 20px 0
                        }
                        .tpl-lxfs1-wrap .tpl-lxfs1-bdl > p {
                            height: 45px;
                            line-height: 45px;
                            padding: 0 0 14px 70px;
                            margin: 0;
                            margin-top: 14px;
                            border-bottom: 1px solid #ddd;
                            overflow: hidden;
                        }
                        @media (min-width: 996px) {}
                    }

                    /*.a_fz{ font-size:14px; line-height:28px; margin-bottom:60px;}
dl.dl_2{ padding:25px 21px 0;}
.a_fz p{ margin:15px 0;}*/

                    .plc{ }

                    .title_01{ color:#0e60a9; font-size:24px; line-height:45px; height:45px; color:#0b59a1; position:relative; margin:30px 0 15px;}
                    .title_01 img{ vertical-align:top; width:30px; position:absolute; left:0; top:8px;}
                    .title_01 b{ font-weight:normal; letter-spacing:4px; padding-left:45px;}
                    .title_01 span{ font-size:14px; color:#626262;letter-spacing:2px;}
                </style>
                <div style="height:167px;background:url(<?php echo $site_template; ?>20170522165234_1718.jpg) no-repeat 0 0;padding:15px 30px 0 250px;margin-top:30px;">
                    <p style="font-size:24px;color:#1346BB;">
                        欢迎您进入金美特网站！
                    </p>
                    <p>
                        感谢您对金美特的信赖，金美特----液压升降机制造专家！当您进入到此页面时，您已成为我们最尊贵的客人，我们将微笑欢迎您的到来，希望给您每一天带来好心情，并竭诚为您提供服务。
                    </p>
                </div>
                <div class="tpl-lxfs1-wrap">
                    <div class="tpl-lxfs1-bdl">
                        <span><?php echo $site_name; ?></span>
                        <p style="background:url(<?php echo $site_template; ?>20170522171733_7187.jpg) left top no-repeat;">
                            联系电话：<?php $this->block(12);?>
                        </p>
                        <p style="background:url(<?php echo $site_template; ?>20170522171733_7187.jpg) left top no-repeat;">
                            业务热线1：<?php $this->block(22);?>
                        </p>
                        <p style="background:url(<?php echo $site_template; ?>20170522171733_7187.jpg) left top no-repeat;">
                            业务热线2：<?php $this->block(23);?>
                        </p>
                        <p style="background:url(<?php echo $site_template; ?>20170522171733_5312.jpg) left top no-repeat;">
                            传真：<?php $this->block(20);?>
                        </p>
                        <p style="background:url(<?php echo $site_template; ?>20170522171733_6562.jpg) left top no-repeat;">
                            邮箱：<?php $this->block(14);?>
                        </p>
                        <p style="background:url(<?php echo $site_template; ?>20170522171733_4218.jpg) left top no-repeat;">
                            QQ：	<?php $this->block(13);?>
                        </p>
                        <p style="background:url(<?php echo $site_template; ?>20170522171733_5937.jpg) left top no-repeat;">
                            地址：<?php $this->block(15);?>
                        </p>
                    </div>
                    <div style="float:left;min-width:320px;width:49.39%;">
                        <p style="width:100%;max-width:100%;height:auto;margin-bottom:15px;display:block;">
                            <img src="<?php echo $site_template; ?>20170522172234_2031.png" title="MAP" alt="MAP" />
                        </p>
                        <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.2&amp;ak=RnpSFA9OEDOTHokaV1xiHOgY"></script>
                        <!--百度地图容器-->
                        <div style="width:720px;height:500px;border:#ccc solid 1px;font-size:12px" id="map">
                            <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
                            <!--百度地图容器-->
                            <div id="dituContent" style="border:1px solid #CCCCCC;border-image:none;width:720px;height:500px;">
                            </div>
                            <script type="text/javascript">
                                //创建和初始化地图函数：
                                function initMap(){
                                    createMap();//创建地图
                                    setMapEvent();//设置地图事件
                                    addMapControl();//向地图添加控件
                                    addMarker();//向地图中添加marker
                                }

                                //创建地图函数：
                                function createMap(){
                                    var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
                                    var point = new BMap.Point(117.216942,36.980282);//定义一个中心点坐标
                                    map.centerAndZoom(point,16);//设定地图的中心点和坐标并将地图显示在地图容器中
                                    window.map = map;//将map变量存储在全局
                                }

                                //地图事件设置函数：
                                function setMapEvent(){
                                    map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
                                    map.enableScrollWheelZoom();//启用地图滚轮放大缩小
                                    map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
                                    map.enableKeyboard();//启用键盘上下左右键移动地图
                                }

                                //地图控件添加函数：
                                function addMapControl(){
                                    //向地图中添加缩放控件
                                    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
                                    map.addControl(ctrl_nav);
                                    //向地图中添加缩略图控件
                                    var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
                                    map.addControl(ctrl_ove);
                                    //向地图中添加比例尺控件
                                    var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
                                    map.addControl(ctrl_sca);
                                }

                                //标注点数组
                                var markerArr = [{title:"<?php echo $site_name; ?>",content:"咨询热线：<?php $this->block(12);?><br/>销售电话：<?php $this->block(22);?>&nbsp;<?php $this->block(23);?><br/>QQ：<?php $this->block(13);?><br/>邮箱：<?php $this->block(14);?><br/>地址：	<?php $this->block(15);?>",point:"117.215846|36.983367",isOpen:1,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
                                ];
                                //创建marker
                                function addMarker(){
                                    for(var i=0;i<markerArr.length;i++){
                                        var json = markerArr[i];
                                        var p0 = json.point.split("|")[0];
                                        var p1 = json.point.split("|")[1];
                                        var point = new BMap.Point(p0,p1);
                                        var iconImg = createIcon(json.icon);
                                        var marker = new BMap.Marker(point,{icon:iconImg});
                                        var iw = createInfoWindow(i);
                                        var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
                                        marker.setLabel(label);
                                        map.addOverlay(marker);
                                        label.setStyle({
                                            borderColor:"#808080",
                                            color:"#333",
                                            cursor:"pointer"
                                        });

                                        (function(){
                                            var index = i;
                                            var _iw = createInfoWindow(i);
                                            var _marker = marker;
                                            _marker.addEventListener("click",function(){
                                                this.openInfoWindow(_iw);
                                            });
                                            _iw.addEventListener("open",function(){
                                                _marker.getLabel().hide();
                                            })
                                            _iw.addEventListener("close",function(){
                                                _marker.getLabel().show();
                                            })
                                            label.addEventListener("click",function(){
                                                _marker.openInfoWindow(_iw);
                                            })
                                            if(!!json.isOpen){
                                                label.hide();
                                                _marker.openInfoWindow(_iw);
                                            }
                                        })()
                                    }
                                }
                                //创建InfoWindow
                                function createInfoWindow(i){
                                    var json = markerArr[i];
                                    var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
                                    return iw;
                                }
                                //创建一个Icon
                                function createIcon(json){
                                    var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
                                    return icon;
                                }

                                initMap();//创建和初始化地图
                            </script>

                        </div>

                        <div class="clear">
                        </div>
                    </div>
                </div>
            </div></div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
<?php include $this->_include('footer.html'); ?>