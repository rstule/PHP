<?php

session_start();
if($_SESSION['cx']!="超级管理员")
{
	echo "<script>javascript:alert('对不起，您没有该权限');history.back();</script>";
	exit;
}


include_once 'conn.php';

	 
	$addnew=$_POST["addnew"];
	if($addnew=="1")
	{
	$username=$_POST['username'];
	$pwd=$_POST['pwd1'];
	$cx=$_POST['cx'];
	
	$sql="select * from allusers where username='$username' and pwd='$pwd'";
		
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
			{
					
					echo "<script language='javascript'>alert('该用户名已经存在,请换其他用户名！');history.back();</script>";
			}
			else
			{
				//date_default_timezone_set("PRC");
				
				$ndate =date("Y-m-d H:i:s");

					$sql="insert into allusers(username,pwd,cx) values('$username','$pwd','$cx')";
					mysql_query($sql); 
					echo "<script language='javascript'>alert('操作成功！');location.href='yhzhgl.php';</script>";
			}
	 }
	 
	 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<script type="text/javascript" src="ny/js/jquery.min.js"></script>
<script type="text/javascript" src="ny/js/bootstrap.min.js"></script>
<script src="ny/js/jconfirm/jquery-confirm.min.js"></script>
<link href="ny/css/bootstrap.min.css" rel="stylesheet">
<link href="ny/css/materialdesignicons.min.css" rel="stylesheet">
<link href="ny/css/style.min.css" rel="stylesheet">
<link rel="stylesheet" href="ny/js/jconfirm/jquery-confirm.min.css">
</head>

<body>

<script language="javascript">
	function check()
	{
		if(document.form1.username.value=="")
		{
		
			$.alert("请输入用户名") 
				document.form1.username.focus();
			return false;
			
		
		}
		if(document.form1.pwd1.value=="")
		{
			$.alert("请输入密码") 

			document.form1.pwd1.focus();
			return false;
		}
		if(document.form1.pwd2.value=="")
		{
			$.alert("请输入确认密码") 
			
			document.form1.pwd2.focus();
			return false;
		}
		if(document.form1.pwd1.value!=document.form1.pwd2.value)
		{
			//alert("两次密码不一致，请重试");
			$.alert("两次密码不一致，请重试") 
			document.form1.pwd1.value="";
			document.form1.pwd2.value="";
			document.form1.pwd1.focus();
			return false;
		}
	}
</script>
<div >
              <div class="card-header"><h4>添加管理员</h4></div>
              <div class="card-body">
<form id="form1" class="form-horizontal" name="form1" method="post" action="" onSubmit="return check();"><input type="hidden" name="addnew" value="1" />
 <div class='form-group'><label class='col-md-3 control-label'>用户名</label><div class='col-md-7'><input type='text' class='form-control' value='' name='username' id='username' style='width:45%' placeholder='' /></div></div>
 <div class='form-group'><label class='col-md-3 control-label'>密码</label><div class='col-md-7'><input type='password' class='form-control' value='' name='pwd1' id='pwd1' style='width:45%' placeholder='' /></div></div>
 <div class='form-group'><label class='col-md-3 control-label'>确认密码</label><div class='col-md-7'><input type='password' class='form-control' value='' name='pwd2' id='pwd2' style='width:45%' placeholder='' /></div></div>
 <div class='form-group'><label class='col-md-3 control-label'>权限</label><div class='col-md-7'><input name="cx" type="radio" value="普通管理员" checked="checked" />
      普通管理员
        <input type="radio" name="cx" value="超级管理员" />
      超级管理员</div></div>
	
	

   <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button class="btn btn-primary" type="submit" onClick="return check();"><i class="mdi mdi-check"></i> 添加</button>
                    </div>
                  </div>

</form>
   </div>
            </div>
<p>已有管理员列表：</p>
<table class="table table-hover">
  <tr>
    <th>序号</th>
    <th>用户名</th>
    <th>密码</th>
    <th>权限</th>
    <th>添加时间</th>
    <th>操作</th>
  </tr>
  <?php
	  $sql="select * from allusers order by id desc";
	  $query=mysql_query($sql);
	  $rowscount=mysql_num_rows($query);
	 for($i=0;$i<$rowscount;$i++)
	 {
  ?>
  <tr>
    <td><?php
		echo $i+1;
	?></td>
    <td><?php
		echo mysql_result($query,$i,"username");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"pwd");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"cx");
	?></td>
    <td><?php
		echo mysql_result($query,$i,"addtime");
	?></td>
    <td><a class="btn btn-info btn-small" href="del.php?id=<?php
		echo mysql_result($query,$i,"id");
	?>&tablename=allusers" onClick="return confirm('真的要删除？')">删除</a> </td>
  </tr>
  <?php
  	}
  ?>
</table>
<p>&nbsp; </p>
</body>
</html>
