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
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$zhanghao=$_POST["zhanghao"];
    $mima=$_POST["mima"];
    $xingming=$_POST["xingming"];
    $xingbie=$_POST["xingbie"];
    $diqu=$_POST["diqu"];
    $Email=$_POST["Email"];
    $zhaopian=$_POST["zhaopian"];
    
	
	$sql="update yonghuzhuce set zhanghao='$zhanghao',mima='$mima',xingming='$xingming',xingbie='$xingbie',diqu='$diqu',Email='$Email',zhaopian='$zhaopian' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改用户注册</title>

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

<body>
<?php
$sql="select * from yonghuzhuce where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>

<div >
              <div class="card-header"><h4>用户注册修改</h4></div>
              <div class="card-body">
                <form class="form-horizontal" action="" method="post" id="form1" name="form1" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
                 <div class='form-group'><label class='col-md-3 control-label'>账号</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,zhanghao);?>' readonly='readonly' name='zhanghao' id='zhanghao' style='width:45%' placeholder='请输入账号' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>密码</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,mima);?>' name='mima' id='mima' style='width:45%' placeholder='请输入密码' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>姓名</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,xingming);?>' name='xingming' id='xingming' style='width:45%' placeholder='请输入姓名' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>性别</label><div class='col-md-7'><select class='form-control' name='xingbie' id='xingbie' style='width:45%'><option value="男">男</option><option value="女">女</option></select></div></div><script language="javascript">document.form1.xingbie.value='<?php echo mysql_result($query,0,xingbie);?>';</script>
      <div class='form-group'><label class='col-md-3 control-label'>地区</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,diqu);?>' name='diqu' id='diqu' style='width:45%' placeholder='请输入地区' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>Email</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,Email);?>' name='Email' id='Email' style='width:45%' placeholder='请输入Email' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>照片</label><div class='col-md-7'><input name='zhaopian' type='text' id='zhaopian' data-place='right' class='form-control' value='<?php echo mysql_result($query,0,zhaopian);?>' style='width:75%; float:left;'/>&nbsp;<input type='button' name='Submit2' class='btn btn-primary' value='上传' onClick="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)" /></div></div>
      
				 <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button class="btn btn-primary" type="submit" onClick="return check();"><i class="mdi mdi-check"></i> 修改</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>
