<?php
session_start();
//xuxyxaodenxglxxu
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$zhanghao=$_POST["zhanghao"];    $mima=$_POST["mima"];    $xingming=$_POST["xingming"];    $xingbie=$_POST["xingbie"];    $shouji=$_POST["shouji"];    $shenfenzheng=$_POST["shenfenzheng"];    $zhaopian=$_POST["zhaopian"];    $beizhu=$_POST["beizhu"];    
	
	
	
	
	ischongfu("select id from yonghu where  zhanghao='$zhanghao'");
	$sql="insert into yonghu(zhanghao,mima,xingming,xingbie,shouji,shenfenzheng,zhaopian,beizhu) values('$zhanghao','$mima','$xingming','$xingbie','$shouji','$shenfenzheng','$zhaopian','$beizhu') ";
	mysql_query($sql);
	
	
	echo "<script>javascript:alert('操作成功!');history.back();</script>";



}
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>用户</title>
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
<link rel="stylesheet" href="images/hsgcommon/divqt.css" type="text/css">
<link rel="stylesheet" href="images/hsgcommon/commonqt.css" type="text/css">



<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
	function check()
{
	if(document.form1.zhanghao.value==""){$.alert("请输入账号");document.form1.zhanghao.focus();return false;}    if(document.form1.mima.value==""){$.alert("请输入密码");document.form1.mima.focus();return false;}    if(/^1[3|4|5|6|7|8|9][0-9]\d{8,8}$/.test(document.form1.shouji.value) || /^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/.test(document.form1.shouji.value)){}else{$.alert("手机必需电话格式");document.form1.shouji.focus();return false;}    if(!(/^\d{15}$|^\d{18}$|^\d{17}[xX]$/.test(document.form1.shenfenzheng.value))){$.alert("身份证必需身份证格式");document.form1.shenfenzheng.focus();return false;}    
}
	function gow()
	{
		location.href='yonghuadd.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
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
                            <h2>用户</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="content-form">
                               

<form id="form1" name="form1" method="post" action="">
<table width="98%" border="0"  align="center" cellpadding="3" cellspacing="1" bordercolor="#cccccc"  class="newsline">    
	<tr><td>账号：</td><td><input name='zhanghao' type='text' id='zhanghao' value='' class="form-control" /><div style="margin-top:16px;">&nbsp;*</div></td></tr>    <tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='' class="form-control" /><div style="margin-top:16px;">&nbsp;*</div></td></tr>    <tr><td>姓名：</td><td><input name='xingming' type='text' id='xingming' value='' class="form-control" /></td></tr>    <tr><td>性别：</td><td><select name='xingbie' id='xingbie' class="form-control"><option value="男">男</option><option value="女">女</option></select></td></tr>    <tr><td>手机：</td><td><input name='shouji' type='text' id='shouji' value='' class="form-control" /><div style="margin-top:16px;">&nbsp;必需电话格式</div></td></tr>    <tr><td>身份证：</td><td><input name='shenfenzheng' type='text' id='shenfenzheng' value='' class="form-control" /><div style="margin-top:16px;">&nbsp;必需身份证格式</div></td></tr>    <tr><td>照片：</td><td><input name='zhaopian' type='text' id='zhaopian' value=''class="form-control"  /><div style="margin-top:16px;">&nbsp;<input type='button' name='Submit2' style='width:50px; height:30px;' value='上传' onclick="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)" /></div></td></tr>    <tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' class="form-control3" ></textarea></td></tr>    
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="确定" onclick="return check();"  class="btn btn-info btn-small" />
      <input type="reset" name="Submit2" value="重置" class="btn btn-info btn-small" /></td>
    </tr>
  </table>
</form>

<?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('对不起，您输入的账号已经存在，请重试!');history.back();</script>";
			exit;
		}
		
	}
?>
					</div>
                </div>
            </div>
        </section>
        <?php include_once 'sidebufen.php';?>
    </main>
   <?php include_once 'qtdown.php';?>
   
</body>
</html>
