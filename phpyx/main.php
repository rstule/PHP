<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>��Ϸ�̳�ϵͳ</title>
    <link rel="stylesheet" href="images/css/pintuer.css">
    <link rel="stylesheet" href="images/css/admin.css">
    <script src="images/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
    <div class="header bg-main">
        <div class="logo margin-big-left fadein-top">
            <h1><img src="images/sp.jpg" class="radius-circle rotate-hover" height="50" alt="" />��Ϸ�̳�ϵͳ</h1>
        </div>
        <div class="head-l"><a class="button button-little bg-green" href="index.php" target="_parent"><span class="icon-home"></span> ǰ̨��ҳ</a> 
            &nbsp;&nbsp;<a class="button button-little bg-red" href="logout.php"><span class="icon-power-off"></span> �˳���¼</a> </div>
			 <div class="head-l"></div>
    </div>
    <div class="leftnav">
        <div class="leftnav-title text-center"><strong><span class="icon-list"></span>�˵��б�</strong></div>
<?php
if ($_SESSION["cx"]=="��������Ա" || $_SESSION["cx"]=="��ͨ����Ա"){include_once 'left_guanliyuan.php';}if ($_SESSION["cx"]=="�û�"){include_once 'left_yonghu.php';}
?>
    </div>
    <script type="text/javascript">
        $(function() {
            $(".leftnav h2").click(function() {
                $(this).next().slideToggle(200);
                $(this).toggleClass("on");
            })
            $(".leftnav ul li a").click(function() {
                $("#a_leader_txt").text($(this).text());
                $(".leftnav ul li a").removeClass("on");
                $(this).addClass("on");
            })
        });
    </script>
    <ul class="bread">
        <li><a  class="icon-home"> ��ҳ</a></li>
        <li><a  id="a_leader_txt">��վ��Ϣ</a></li>
         <li><b></b><span style="color:red;"><span class="icon-user"></span>&nbsp;&nbsp;��ǰ�û��� <?php echo $_SESSION['username'];?>[<?php echo $_SESSION['cx'];?>]</php></span></li> 
    </ul>
    <div class="admin">
        <iframe scrolling="auto" rameborder="0" src="sy/sy.php" name="hsgmain" width="100%" height="100%"></iframe>
    </div>
</body>
</html>
