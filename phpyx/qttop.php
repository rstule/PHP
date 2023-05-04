<header>
<div class="header-area">
	<div class="main-header header-sticky">
		<div class="container-fluid">
			<div class="menu-wrapper">
				<div class="logo">
					<a href="index.php"><img src="qtimages/img/logo/logo.png" alt=""></a>
				</div>
				<div class="main-menu d-none d-lg-block">
					<nav>                                                
						<ul id="navigation">  
	<li><a href="index.php">网站首页</a></li>
	
	
</li><li><a href="#">商品信息</a>
	<ul class="submenu">
		<li><a href="shangpinxinxilisttp.php">商品信息</a></li> 
	</ul>
</li><li><a href="#">在线留言</a>
	<ul class="submenu">
		<li><a href="lyb.php">在线留言</a></li> <li><a href="lyblist.php">查看留言</a></li> 
	</ul>
</li><!--yoxulixuyaxn-->
	<li><a href="login.html">后台管理</a></li>
</ul>
					</nav>
				</div>
				<div class="header-right">
					<ul>
						<li>
							<div class="nav-search search-switch">
								<span class="flaticon-search"></span>
							</div>
						</li>
						<?php 
				if ($_SESSION['username']=="" )
				{
			?>              
						<li><span class="flaticon-user"></span> <a href="yonghuadd.php" >注册</a> |  <a href="userlog.php">登录</a></li>
					
						<?php 
						}
			  else
			  {
			 ?>
			<font color="#000000" >当前用户：<?php echo $_SESSION['username']?>,[<?php echo $_SESSION['cx']?>]</font>&nbsp; <a href="logout.php"  onclick="return confirm('确定要退出？')" ><font color="#000000">退出</font></a> <font color="#000000">|</font> <a href="main.php" ><font color="000000">个人中心</font></a>
			  <?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-12">
				<div class="mobile_menu d-block d-lg-none"></div>
			</div>
		</div>
	</div>
</div>
</header>
<div class="search-model-box">
	<div class="h-100 d-flex align-items-center justify-content-center">
		<div class="search-close-btn">+</div>
		<form class="search-model-form" action='dingdanxinxilist.php' method="post">
			<input type="text" id="search-input" name='dingdanhao' placeholder="Searching key.....">
		</form>
	</div>
</div>
