<?php include $this->admin_tpl('header');?>
<script type="text/javascript">
top.document.getElementById('position').innerHTML = '关键字连接';
</script>
<div class="subnav">
	<div class="content-menu">
		<a href="<?php echo url('keylink'); ?>"  class="on"><em>全部关键字</em></a>
		<?php if($this->menu('keylink-add')) { ;?>
		<a href="<?php echo url('keylink/add'); ?>" class="add"><em>添加关键字</em></a>
    	<?php } ?>
	</div>
	<div class="bk10"></div>
	<form action="" method="post" name="myform">
	<table width="100%"  class="m-table m-table2 m-table-row">
	<thead class="m-table-thead s-table-thead">
	<tr>
		<th width="25" align="left">ID</th>
		<th align="left">关键字</th>
		<th align="left">连接地址</th>
		<th align="left">优先级</th>
		<th  width="80"  align="left">操作</th>
	</tr>
	</thead>
	<tbody >
	<?php if (is_array($list))  foreach ($list as $t) { ?>
	<tr >
		<td align="left"><?php echo $t['id']; ?></td>
		<td align="left"><?php echo $t['name']; ?></td>
		<td align="left"><a href="<?php echo $t['link']; ?>"><?php echo $t['link']; ?></a></td>
		<td align="left"><?php echo $t['weight']; ?></td>
		<td align="left">
		<a href="<?php echo url('keylink/edit',array('id'=>$t['id'])); ?>">编辑</a> | 
		<a  href="javascript:confirmurl('<?php  echo url('keylink/del/',array('id'=>$t['id']));?>','确定删除 『<?php echo $t['name']; ?> 』区块吗？')" >删除</a>
		</td>
		</td>
	</tr>
	<?php  } ?>
	</table>
	</form>
</div>
</body>
</html>