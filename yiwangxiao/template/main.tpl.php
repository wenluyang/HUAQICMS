<?php include $this->admin_tpl('header');?>
<!--<script type="text/javascript">$(function(){$.getScript("<?php echo $client_url;?>");});</script>-->
<?php if(!is_file(DATA_DIR . 'cache' . DS."category.cache.php")) echo '<script type="text/javascript">location.href="'. url('index/cache') .'";</script>';?>

<!--未授权用户请不要私自更改版权 ，否则后果自负！-->

<div class="subnav">
<div class="mr10" style="width:80%">
	<table width="100%"   class="m-table m-table2 m-table-row">
	<thead class="m-table-thead s-table-thead">
	<tr>
		<th align="left">授权信息</th>
	</tr>
	</thead>
	<tbody >
		<tr >
		<td align="left">当前域名：<?php echo $_SERVER['HTTP_HOST']?></td>
		</tr>
		<tr >
		<td align="left" id="license">授权信息：已授权</td>
		</tr>
		<tr >
		<td align="left">联系方式：<a href="#" style="cursor:pointer" onclick="javascript:window.open('http://wpa.qq.com/msgrd?v=3&uin=446404957&site=qq&menu=yes', '_blank', 'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');"><img border="0" src="./img/qq.gif" alt="点击这里给我发消息" title="点击这里给我发消息"/> 446404957</a></td>
		</tr>
		<tr >
		<td align="left" style="border-bottom: 0px;">官方网站：<a target="_blank" href="http://www.faspot.com/">www.faspot.com</a></td>
		</tr>
		</tbody>
	</table>	
    <div class="bk10"></div>
	<table width="100%"   class="m-table m-table2 m-table-row">
	<thead class="m-table-thead s-table-thead">
	<tr>
		<th align="left">使用说明</th>
	</tr>
	</thead>
	<tbody >
		<tr >
		<td align="left">1、非技术人员请勿随意修改<font color="red">URL配置</font>、<font color="red">内容模型</font>、<font color="red">表单模型</font>、<font color="red">自定义表</font>及<font color="red">模板</font>，否则可能导致系统不能正常运行；</td>
		</tr>
		<tr >
		<td align="left">2、如果在未修改的情况下，网站出现异常，请先点击这里<a style="color:#f00;" href="/admin/index.php?c=index&a=cache" target="_self">更新缓存</a>，再按CTRL+F5强制刷新；</td>
		</tr>
		<tr >
		<td align="left">3、增加栏目时，请先在栏目菜单中点编辑查看已有栏目的设置，<font color="red">参考已有栏目设置，以保证新加栏目正常显示</font>；</td>
		</tr>
		<tr >
		<td align="left">4、如果后台无法正常上传图片，请使用<font color="green">Chrome内核</font>的浏览器，推荐使用UC浏览器(<a style="color:#f00;"  target="_blank" href="http://pc.uc.cn/">官方下载</a>)或360极速浏览器(<a  style="color:#f00;" target="_blank" href="http://chrome.360.cn/">官方下载</a>)；</td>
		</tr>
		<tr >
		<td align="left">运行环境：<?php echo $_SERVER['SERVER_SOFTWARE'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mysql版本：<?php echo $this->db->getServerVersion()?></td>
		</tr>
		</tbody>
	</table>
</div>
</div>
</body>
</html>