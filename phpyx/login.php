<?php
//验证登录信息
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	$login=$_POST["login"];
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	$cx=$_POST['cx'];
	$yzm=$_POST['yzm'];
	//$userpass=md5($userpass);
	if($login=="1")
	{
		if($yzm==$_SESSION['regsession_code'])
		{
		
		}
		else
		{
			echo "<script language='javascript'>alert('请输入正确验证码！');location.href='login.html';</script>";
			die;
		}
		if ($username!="" && $pwd!="" && $yzm!="")
		{
		if($cx=="管理员"){$sql="select * from allusers where username='$username' and pwd='$pwd'";}
		if($cx=="用户"){$sql="select * from yonghu where zhanghao='$username' and mima='$pwd' ";}
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					if($cx=="管理员"){
						$_SESSION['cx']=mysql_result($query,0,"cx");
					}
					else
					{
						$_SESSION['cx']=$cx;
					}
					
					echo "<script language='javascript'>alert('登录成功！');location='main.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('用户名或密码错误！');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('请输入完整！');history.back();</script>";
		}
	}
	
//}
?>


