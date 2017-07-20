<?php include $this->admin_tpl('header');?>

<div class="subnav">
	<div class="content-menu">
		<a href="<?php echo url('keylink'); ?>"  class="on"><em>全部关键字</em></a>
		<?php if($this->menu('keylink-add')) { ;?>
		<a href="<?php echo url('keylink/add'); ?>" class="add"><em>添加关键字</em></a>
    	<?php } ?>
	</div>
	<div class="bk10"></div>
		<form action="" method="post">
		<input name="id" type="hidden" value="<?php echo $data['id']; ?>">
		<table width="100%" class="table_form">
		<tr>
			<th width="80">关键字： </th>
			<td><input class="input-text" type="text" name="data[name]" value="<?php echo $data['name']; ?>" size="20"/></td>
		</tr>
		<tr>
			<th width="80">连接地址： </th>
			<td><input class="input-text" type="text" name="data[link]" value="<?php echo $data['link']; ?>" size="40"/></td>
		</tr>
		<tr>
			<th width="80">优先级： </th>
			<td><input class="input-text" type="text" name="data[weight]" value="<?php echo $data['weight']; ?>" size="40"/></td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td><input class="button" type="submit" name="submit" value="提交" /></td>
		</tr>
		</table>
		</form>
</div>
<script type="text/javascript">top.document.getElementById('position').innerHTML = '关键字连接';</script>

</body>
</html>