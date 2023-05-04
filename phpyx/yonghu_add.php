<script type="text/javascript" src="ny/js/jquery.min.js"></script>
<script type="text/javascript" src="ny/js/bootstrap.min.js"></script>
<script src="ny/js/jconfirm/jquery-confirm.min.js"></script>
<link href="ny/css/bootstrap.min.css" rel="stylesheet">
<link href="ny/css/materialdesignicons.min.css" rel="stylesheet">
<link href="ny/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="ny/js/jconfirm/jquery-confirm.min.css">
<?php
session_start();
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>用户</title>

<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" charset="gb2312"></script>
</head>
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
</script>
<body>

<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){$.alert("请输入账号");document.form1.zhanghao.focus();return false;}    if(document.form1.mima.value==""){$.alert("请输入密码");document.form1.mima.focus();return false;}    if(/^1[3|4|5|6|7|8|9][0-9]\d{8,8}$/.test(document.form1.shouji.value) || /^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/.test(document.form1.shouji.value)){}else{$.alert("手机必需电话格式");document.form1.shouji.focus();return false;}    if(!(/^\d{15}$|^\d{18}$|^\d{17}[xX]$/.test(document.form1.shenfenzheng.value))){$.alert("身份证必需身份证格式");document.form1.shenfenzheng.focus();return false;}    
}
	function gow()
	{
		location.href='yonghu_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value+"&id=<?php echo $_GET["id"]?>";
	}
	function hsgxia2shxurxu(nstr,nwbk)
{
	if (eval("form1."+nwbk).value.indexOf(nstr)>=0)
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value.replace(nstr+"；", "");
	}
	else
	{
		eval("form1."+nwbk).value=eval("form1."+nwbk).value+nstr+"；";
	}
}
</script>



<div >
              <div class="card-header"><h4>用户添加</h4></div>
              <div class="card-body">
                <form class="form-horizontal" action="?id=<?php echo $_GET["id"]?>" method="post" id="form1" name="form1" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
                 <div class='form-group'><label class='col-md-3 control-label'>账号</label><div class='col-md-7'><input type='text' class='form-control' value='' name='zhanghao' id='zhanghao' style='width:45%' placeholder='请输入账号' /></div></div>    <div class='form-group'><label class='col-md-3 control-label'>密码</label><div class='col-md-7'><input type='text' class='form-control' value='' name='mima' id='mima' style='width:45%' placeholder='请输入密码' /></div></div>    <div class='form-group'><label class='col-md-3 control-label'>姓名</label><div class='col-md-7'><input type='text' class='form-control' value='' name='xingming' id='xingming' style='width:45%' placeholder='请输入姓名' /></div></div>    <div class='form-group'><label class='col-md-3 control-label'>性别</label><div class='col-md-7'><select class='form-control' name='xingbie' id='xingbie' style='width:45%'><option value="男">男</option><option value="女">女</option></select></div></div>    <div class='form-group'><label class='col-md-3 control-label'>手机</label><div class='col-md-7'><input type='text' class='form-control' value='' name='shouji' id='shouji' style='width:45%' placeholder='请输入手机' /></div></div>    <div class='form-group'><label class='col-md-3 control-label'>身份证</label><div class='col-md-7'><input type='text' class='form-control' value='' name='shenfenzheng' id='shenfenzheng' style='width:45%' placeholder='请输入身份证' /></div></div>    <div class='form-group'><label class='col-md-3 control-label'>照片</label><div class='col-md-7'><input name='zhaopian' type='text' id='zhaopian' data-place='right' class='form-control'  style='width:75%; float:left;'/>&nbsp;<input type='button' name='Submit2' class='btn btn-primary' value='上传' onclick="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)" /></div></div>    <div class='form-group'><label class='col-md-3 control-label'>备注</label><div class='col-md-7'><textarea id='beizhu' placeholder='' name='beizhu' class='form-control'  style='width:75%'></textarea></div></div>    
				 <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button class="btn btn-primary" type="submit" onClick="return check();"><i class="mdi mdi-check"></i> 添加</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
<p>&nbsp;</p>
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
</body>
</html>
