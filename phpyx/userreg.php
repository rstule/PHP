<?php 
include_once 'conn.php';
session_start();
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];
	$sql="select id from yonghuzhuce where zhanghao='".$zhanghao."'";
	$query=mysql_query($sql);
	$rowscount=mysql_num_rows($query);
	if($rowscount>0)
	{
		echo "<script>javascript:alert('对不起，该账号已经存在，请换其他账号再试！！');history.back();</script>";
	}
	else
	{
		$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$zhaopian') ";
		mysql_query($sql);
		
		echo "<script>javascript:alert('注册成功!请待管理员审核后方可正常登录！');location.href='index.php';</script>";
	}
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>用户注册</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="qtimages/img/favicon.ico">
    <link rel="stylesheet" href="qtimages/css/bootstrap.min.css">
    <link rel="stylesheet" href="qtimages/css/owl.carousel.min.css">
    <link rel="stylesheet" href="qtimages/css/flaticon.css">
    <link rel="stylesheet" href="qtimages/css/slicknav.css">
    <link rel="stylesheet" href="qtimages/css/animate.min.css">
    <link rel="stylesheet" href="qtimages/css/magnific-popup.css">
    <link rel="stylesheet" href="qtimages/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="qtimages/css/themify-icons.css">
    <link rel="stylesheet" href="qtimages/css/slick.css">
    <link rel="stylesheet" href="qtimages/css/nice-select.css">
    <link rel="stylesheet" href="qtimages/css/style.css">
	<link rel="stylesheet" href="./qtimages/sl_common_form.css">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("请输入账号");document.form1.zhanghao.focus();return false;}
	if(document.form1.mima.value==""){alert("请输入密码");document.form1.mima.focus();return false;}
	if(document.form1.mima.value!=document.form1.mima2.value){alert("对不起，两次密码不一致，请重试");document.form1.mima.focus();return false;}
	if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}
	if(document.form1.Email.value==""){alert("请输入Email");document.form1.Email.focus();return false;}
	if(document.form1.zhaopian.value==""){alert("请输入照片");document.form1.zhaopian.focus();return false;}
	var strEmail = document.getElementById("Email").value;  
  var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
  var email_Flag = reg.test(strEmail);
  if(email_Flag){
  
  }
  else{
   alert("对不起，您输入的邮箱地址格式错误。");
   return false;
  }
}
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
    <?php include_once 'qttop.php';?>
    <main>
        <?php include_once 'bht.php';?>
        <section class="new-product-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle mb-70">
                            <h2>用户注册</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="content-form">
                                <form name="form1" method="post" action=""> 
<table width="80%" height=550  align="center" cellpadding="3" cellspacing="1" class="newsline"  >
							<tr>
                              <td align="right">账号：</td>
                              <td align="left"><input name='zhanghao' type='text' id='zhanghao' value='' placeholder="请输入账号" class="user" />
                              &nbsp;*</td>
                            </tr> 
                            <tr>
                              <td align="right">密码：</td>
                              <td align="left"><input name='mima' type='password' id='mima' value='' placeholder="请输入密码" class="password"  />
                                &nbsp;* 确认密码： 
                              <input name='mima2' type='password' id='mima2' value='' placeholder="请输入确认密码" class="password"  /></td>
                            </tr>
                            <tr>
                              <td align="right">姓名：</td>
                              <td align="left"><input name='xingming' type='text' id='xingming' value='' placeholder="请输入姓名" class="user" />
                              &nbsp;*</td>
                            </tr>
                            <tr>
                              <td align="right">性别：</td>
                              <td align="left"><select name='xingbie' id='xingbie' class="xingbie">
                                  <option value="男">男</option>
                                  <option value="女">女</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td align="right">地区：</td>
                              <td align="left"><select name='diqu' id='diqu' class="xingbie" >
                                  <option value="浙江">浙江</option>
                                  <option value="湖北">湖北</option>
                                  <option value="河南">河南</option>
                                  <option value="北京">北京</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td align="right">Email：</td>
                              <td align="left"><input name='Email' type='text' id='Email' value='' class="user"   placeholder="请输入Email"/>
                              &nbsp;*</td>
                            </tr>
                            <tr>
                              <td align="right">照片：</td>
                              <td align="left"><input name='zhaopian' type='text' id='zhaopian' value=''  class="user"  />
                              &nbsp;* <input type="button" onClick="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)" value="上传" class="content-form-signup" /></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td align="left"><input type="hidden" name="addnew" value="1" />
                                  <input type="submit" name="Submit" value="注册" class="content-form-signup"  onclick='return check();' />
                              <input type="reset" name="Submit2" value="重置" class="content-form-signup"  /></td>
                            </tr>
              </table>
    </form>
					</div>

                </div>
            </div>
        </section>
        <?php include_once 'sidebufen.php';?>
    </main>
   <?php include_once 'qtdown.php';?>
</body>
</html>