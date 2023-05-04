<script type="text/javascript" src="ny/js/jquery.min.js"></script>
<script type="text/javascript" src="ny/js/bootstrap.min.js"></script>
<script src="ny/js/jconfirm/jquery-confirm.min.js"></script>
<link href="ny/css/bootstrap.min.css" rel="stylesheet">
<link href="ny/css/materialdesignicons.min.css" rel="stylesheet">
<link href="ny/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="ny/js/jconfirm/jquery-confirm.min.css">
<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$huifu=$_POST["huifu"];
	
	$sql="update liuyanban set huifu='$huifu' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('操作成功!');location.href='liuyanban_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>设置留言板</title>

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
<?php
$sql="select * from liuyanban where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<div >
              <div class="card-header"><h4>留言板设置</h4></div>
              <div class="card-body">
                <form class="form-horizontal" action="" method="post" id="form1" name="form1" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
                 <div class='form-group' style='display:none'><label class='col-md-3 control-label'>账号</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,zhanghao);?>' name='zhanghao' id='zhanghao' style='width:45%' placeholder='请输入账号' /></div></div>
      <div class='form-group' style='display:none'><label class='col-md-3 control-label'>性别</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,xingbie);?>' name='xingbie' id='xingbie' style='width:45%' placeholder='请输入性别' /></div></div>
      <div class='form-group' style='display:none'><label class='col-md-3 control-label'>姓名</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,xingming);?>' name='xingming' id='xingming' style='width:45%' placeholder='请输入姓名' /></div></div>
      <div class='form-group' style='display:none'><label class='col-md-3 control-label'>留言</label><div class='col-md-7'><textarea id='liuyan' placeholder='' name='liuyan' class='form-control'  style='width:75%'><?php echo mysql_result($query,0,liuyan);?></textarea></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>回复</label><div class='col-md-7'><textarea id='huifu' placeholder='' name='huifu' class='form-control'  style='width:75%'><?php echo mysql_result($query,0,huifu);?></textarea></div></div>
      
				 <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button class="btn btn-primary" type="submit" onClick="return check();"><i class="mdi mdi-check"></i> 设置</button>
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
