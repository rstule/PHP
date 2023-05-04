<script type="text/javascript" src="ny/js/jquery.min.js"></script>
<script type="text/javascript" src="ny/js/bootstrap.min.js"></script>
<script src="ny/js/jconfirm/jquery-confirm.min.js"></script>
<link href="ny/css/bootstrap.min.css" rel="stylesheet">
<link href="ny/css/materialdesignicons.min.css" rel="stylesheet">
<link href="ny/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="ny/js/jconfirm/jquery-confirm.min.css">
<?php 
$lb=$_GET["lb"];
include_once 'conn.php';

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$content=$_POST["neirong"];
	$sql="update dx set content='$content' where leibie= '".$lb."'";

	mysql_query($sql);
	echo "<script>javascript:alert('操作成功!');location.href='dx.php?lb=$lb';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改dx</title>
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

<link rel="stylesheet" href="css.css" type="text/css">
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
$sql="select * from dx where leibie='".$lb."'";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<div >
              <div class="card-header"><h4><?php echo mysql_result($query,0,leibie);?>修改</h4></div>
              <div class="card-body">
                <form class="form-horizontal" action="" method="post" id="form1" name="form1" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
      <div class='form-group'><label class='col-md-3 control-label'>内容</label><div class='col-md-7'><textarea name="neirong" style="width:670px;height:400px;visibility:hidden;"><?php echo mysql_result($query,0,content);?></textarea></div></div>
     
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
	else
	{
		$sql="insert into dx(leibie,content) values('$lb','$lb')";
		mysql_query($sql);
		echo "<script language='javascript'>location.href='dx.php?lb=$lb';</script>";
	}
?>
</body>
</html>
