<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
		程序员接单网
		</title>
		<?php echo $this->Html->css('bootstrap.min'); ?>
		<?php echo $this->Html->css('main'); ?>
		<?php echo $this->Html->script('jquery'); ?>
		<?php echo $this->Html->script('bootstrap.min'); ?>
	</head>
	<style type="text/css">
		body table{font-size:12px;}
		#content{min-height:500px;}
		.tip{font-size:12px;color:#666;}
		.red{color:#a00;}
		.sub{font-size:14px;}
		img{max-width:100%;}
	</style>
	<body>
		<div class="container">
		    <div class="masthead">
		        <ul class="nav nav-pills pull-right">

		            <li><a href="/">首页</a></li>
		            <li><a href="/Tasks/index">个人中心</a></li>
		            <?php if ($user['email']): ?>
		            <li><a href="/Tasks/index"><?php echo $user['email']; ?></a></li>
		            <?php endif ?>
		            <li><a href="/users/logout">退出</a></a></li>
		        </ul>
		        <h3 class="muted"><a href="/">程序员接单网</a>
					<span class="sub">首页</span>
		        </h3>
		    </div>
		    <hr>
			<div id="content">
		        <?php echo $this->Session->flash(); ?>
		        <?php echo $this->fetch('content'); ?>
			</div>
		    <hr>
		    <div class="footer">
		        <p>© Company 2013</p>
		    </div>
		</div>
	</body>
</html>	