 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <!-------  index style  ------>
<style type="text/css">
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre,a, abbr,
acronym, address, big, cite, code, del, dfn, em, font, ins, kbd, q, s, samp, small,strike, sub, sup,
tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, caption,tbody, tfoot, thead, tr,th
 {
	border: 0;
	font-family: inherit;
	font-size: 100%;
	font-style: inherit;
	font-weight: inherit;
	margin: 0;
	outline: 0;
	padding: 0;
	vertical-align: top;
}
.jump {padding:140px 0 200px 0;}
.jump div{width:450px;position:relative;left:48%;margin-top:10%;margin-left:-225px;margin-right:-225px;border:1px solid #FF7200; border-radius: .3em;}
.jump div p{color:#000;font:16px "Microsoft YaHei";text-align:center;margin-bottom:20px;}
.jump div p.msg-title{font:24px "Microsoft YaHei";color:#fff;background:#FF7200;}
.jump div p.notice span,.jump div p.notice a{color:#FF5500;font:bold 16px Arial;}
.jump div p.notice a:hover{color:#000;}
 #error{height:100%;padding:0; color:#FF0000s}
 

</style>
		<title>信息提示</title>
</head>
<body>
	<!-------  error jump start ------>
 	<div id="error" class="maincontent">
			<div class="jump">
				<div>
				  <p class="msg-title">信息提示！</p>
				  <p class=""></p>
				  <p class="error"><?php echo $msg; ?></p>
				  <p class="notice"><?php if($url==1){ ?>
					<a href="javascript:history.back();" >如果您的浏览器没有自动跳转，请点击这里</a>
					<script language="javascript">setTimeout(function(){history.back();}, <?php echo $time; ?>);</script>
					<?php } else{?>
					<a href="<?php echo $url?>">如果您的浏览器没有自动跳转，请点击这里</a>
					<script language="javascript">setTimeout("location.href='<?php echo $url; ?>';", <?php echo $time; ?>);</script>   
					<?php } ?></p>
				</div>
			</div>
	</div>

</body>
</html>