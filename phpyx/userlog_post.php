<?php
session_start();
include_once 'conn.php';
	$username=$_POST['username'];
	$pwd=$_POST['pwd1'];
	$cx=$_POST['cx'];
	$yzm=$_POST['yzm'];
	//$userpass=md5($userpass);
	
		if($yzm==$_SESSION['regsession_code'])
		{
		
		}
		else
		{
			echo "<script language='javascript'>alert('��������ȷ��֤�룡');location.href='index.php';</script>";
			die;
		}
		if ($username!="" && $pwd!="" && $yzm!="")
		{
		if($cx=="����Ա"){$sql="select * from allusers where username='$username' and pwd='$pwd'";}
		if($cx=="�û�"){$sql="select * from yonghu where zhanghao='$username' and mima='$pwd' ";}
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					if($cx=="����Ա"){
						$_SESSION['cx']=mysql_result($query,0,"cx");
					}
					else
					{
						$_SESSION['cx']=$cx;
					}
					
					echo "<script language='javascript'>alert('��¼�ɹ���');location='index.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('�û������������');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('������������');history.back();</script>";
		}
	

?>


