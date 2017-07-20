<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head>
    <title>管理登录-</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel='stylesheet' type='text/css' href='css/admin_login.css'>
    </head>
  
  <body>
    <div class="l1">　　
      <img src="http://www.imcdn.com/tongyong/logo.png" alt="最快，最好用的网站" /></div>
    <div class="l2">
      <div class="banner_div">
        <div style="margin:0 auto; width:100%; padding-top:90px;">
          <div class="main">
            <div class="title"></div>
            <div class="login">
              	<form action="" method="post">
                <div class="inputbox">
                  <ul>
                    <li>
                      <h2>用户名：</h2>
                      <input type="text" name="username" id="login_name" size="12" onfocus="this.style.borderColor='#fc9938'" onblur="this.style.borderColor='#dcdcdc'" /></li>
                    <li>
                      <h2>密 码：</h2>
                      <input type="password" name="password" id="login_pwd" size="12" onfocus="this.style.borderColor='#fc9938'" onblur="this.style.borderColor='#dcdcdc'" /></li>
                    <li>
                      <h2>验证码：</h2>
                      <input type="text" name="code" id="verify" size="3" onfocus="this.style.borderColor='#fc9938'" onblur="this.style.borderColor='#dcdcdc'" />
                     <img id="code" src="../index.php?c=api&a=checkcode&width=100&height=30" align="absmiddle" title="看不清楚？换一张" onclick="document.getElementById('code').src='../index.php?c=api&a=checkcode&width=85&height=26&'+Math.random();" style="cursor:pointer; margin-top:-3px;"></li>
                    <li>
                      <i class="fa fa-link fa-3x"></i>
                      <input class="button orange bigrounded" name="submit" type="submit" value="登　　录" id="input" /></li>
                  </ul>
                </div>
                <div style="clear:both"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="l3">
      <div class="copyright">
        <br />
        <br />技术支持:
        <a href="http://www.faspot.com/">华企云商 faspot.com</a>
        <BR>
        <BR></div>
    </div>
  </body>

</html>