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
	$biaoti=$_POST["biaoti"];
    $leibie=$_POST["leibie"];
    $neirong=$_POST["neirong"];
    $shouyetupian=$_POST["shouyetupian"];
    $dianjilv=$_POST["dianjilv"];
    $tianjiaren=$_POST["tianjiaren"];
    
	
	$sql="update xinwentongzhi set biaoti='$biaoti',leibie='$leibie',neirong='$neirong',shouyetupian='$shouyetupian',dianjilv='$dianjilv',tianjiaren='$tianjiaren' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改新闻通知</title>
<link rel="stylesheet" href="kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="kindeditor-4.1.10/plugins/code/prettify.css" />
	<script charset="utf-8" src="kindeditor-4.1.10/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="neirong"]', {
				cssPath : 'kindeditor-4.1.10/plugins/code/prettify.css',
				uploadJson : 'kindeditor-4.1.10/php/upload_json.php',
				fileManagerJson : 'kindeditor-4.1.10/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
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
$sql="select * from xinwentongzhi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{

?>

<div >
              <div class="card-header"><h4><?php echo mysql_result($query,0,leibie);?>修改</h4></div>
              <div class="card-body">
                <form class="form-horizontal" action="" method="post" id="form1" name="form1" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
                 <div class='form-group'><label class='col-md-3 control-label'>标题</label><div class='col-md-7'><input class='form-control' value='<?php echo mysql_result($query,0,biaoti);?>' type='text' id='biaoti' name='biaoti'  placeholder='请输入标题..' style='width:75%'></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>类别</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,leibie);?>' name='leibie' id='leibie' style='width:45%' placeholder='请输入类别' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>内容</label><div class='col-md-7'><textarea name="neirong" style="width:670px;height:200px;visibility:hidden;"><?php echo mysql_result($query,0,neirong);?></textarea></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>首页图片</label><div class='col-md-7'><input name='shouyetupian' type='text' id='shouyetupian' data-place='right' class='form-control' value='<?php echo mysql_result($query,0,shouyetupian);?>' style='width:75%; float:left;'/>&nbsp;<input type='button' name='Submit2' class='btn btn-primary' value='上传' onClick="javaScript:OpenScript('upfile.php?Result=shouyetupian',460,180)" /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>点击率</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,dianjilv);?>' name='dianjilv' id='dianjilv' style='width:45%' placeholder='请输入点击率' /></div></div>
      <div class='form-group'><label class='col-md-3 control-label'>添加人</label><div class='col-md-7'><input type='text' class='form-control' value='<?php echo mysql_result($query,0,tianjiaren);?>' name='tianjiaren' id='tianjiaren' style='width:45%' placeholder='请输入添加人' /></div></div>
      
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
