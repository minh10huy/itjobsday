<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>../../../images/favicon.ico" type="image/ico" rel="shortcut icon" />
<!-- blueprint CSS framework 
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
<!-- Bootstrap Framework -->
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css"
	media="screen" />
<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" /> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" /> -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/script/jquery-1.8.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/script/bootstrap.js" type="text/javascript"></script>

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<!-- 
	<div id="header">
		<div id="h_logo">
			<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" id='logo'><span></span> </a>
		</div>
		<div id="h_email_search">
			<span></span>
		</div>
		
	</div>
	 
	<!-- header 

	<div id="mainmenu">
		<div id="menu">
			<?php
				$this->widget('zii.widgets.CMenu', array(
							'items'=>array(
				array('label'=>'Trang Chủ', 'url'=>array('/site/index')),
				array('label'=>'Tìm Việc', 'url'=>array('/jobsearch/search')),
				array('label'=>'Tạo Hồ Sơ', 'url'=>array('/createCV/create')),
				array('label'=>'Quản Lý Hồ Sơ', 'url'=>array('/manageCV/viewCV')),
				array('label'=>'Đăng Ký', 'url'=>array('/user/login'), 'itemOptions'=>array('class'=>'menu_right'),),
				array('label'=>'Đăng Nhập', 'url'=>array('/site/login'), 'itemOptions'=>array('class'=>'menu_right'),),
				)));
			?>
		</div>
	</div>
	 -->
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<!-- Collapsable nav bar -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> </a>
			<!-- Your site name for the upper left corner of the site -->
			<!-- <a class="brand">My Site</a> --> 
			
			<!-- Start of the nav bar content -->
			<div class="nav-collapse">
				<!-- Other nav bar content -->
				<!-- 
				<ul class="nav">
					<li class="active"><a href="#">Trang Chủ</a></li>
                    <li class=""><a href="#">Tìm Việc</a></li>
                    <li class=""><a href="#">Tạo Hồ Sơ</a></li>
                    <li class="dropdown">
                    	<a data-toggle="dropdown" class="dropdown-toggle" href="#">Quản Lý Hồ Sơ <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        	<li><a href="#?page=0">Action</a></li>
                          	<li><a href="#?page=1">Another action</a></li>
                          	<li><a href="#?page=2">Something else here</a></li>
                          	<li class="divider"></li>
                          	<li class="nav-header">Nav header</li>
                          	<li><a href="#">Separated link</a></li>
                          	<li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
				</ul>
				 -->
				<div id="menu">
					<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" id='logo' class="brand"><span></span> </a>
					<?php
						$this->widget('zii.widgets.CMenu', array(
									'items'=>array(
						array('label'=>'Trang Chủ', 'url'=>array('/site/index')),
						array('label'=>'Tìm Việc', 'url'=>array('/jobsearch/search')),
						array('label'=>'Tạo Hồ Sơ', 'url'=>array('/createCV/create')),
						array('label'=>'Quản Lý Hồ Sơ', 'url'=>array('/manageCV/viewCV')),
						//array('label'=>'Đăng Ký', 'url'=>array('/user/login'), 'itemOptions'=>array('class'=>'menu_right'),),
						//array('label'=>'Đăng Nhập', 'url'=>array('/site/login'), 'itemOptions'=>array('class'=>'menu_right'),),
						)));
					?>
				<!-- The drop down menu -->
					<ul class="nav pull-right">
						<li class="menu_right"><a href="/users/sign_up">Đăng Ký</a></li>
						<!-- <li class="divider-vertical"></li> -->
						<?php if(Yii::app()->user->isGuest): ?>
						<li class="dropdown menu_right"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Đăng Nhập <strong class="caret"></strong> </a>
							<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
								<!-- Login form here -->
								
								
								<form action="<?php echo Yii::app()->createUrl('employee/index'); ?>" method="post" accept-charset="UTF-8">
									<input id="LoginForm_username" style="margin-bottom: 15px;" type="text" name="LoginForm[username]" size="30" placeholder="Tên đăng nhập"/> 
									<input id="LoginForm_password" style="margin-bottom: 15px;" type="password" name="LoginForm[password]" size="30" placeholder="Mật khẩu"/> 
									<input id="LoginForm_rememberMe" style="float: left; margin-right: 10px;" type="checkbox" name="LoginForm[rememberMe]" value="1" /> 
									<label class="string optional" for="LoginForm_rememberMe"> Nhớ trạng thái đăng nhập</label>
									<div id='btnSign'>
										<input class="btn btn-primary" style="clear: left; width: 100px; height: 32px; font-size: 13px; margin-right: 10px;" type="submit" name="commit" value="Đăng Nhập" />
									</div>
									<div id='lostpass'>
										<?php echo CHtml::link('[Quên mật khẩu]', '#', array('id'=>'lostpass'));?>
									</div>
									<div id="otheracc">
										<span style="margin: 5px; color: #004ACC;">Hoặc bằng tài khoản khác</span>
									</div>
									<div id="imgFGY">
										<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" id='fb' class="brand"><span></span> </a>
										<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" id='go' class="brand"><span></span> </a>
										<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" id='ya' class="brand"><span></span> </a>
									</div>
								</form>
							</div>
						</li>
								<?php else: ?>
								<?php echo "Welcome!"; ?>
								<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	$(function() {
	// Setup drop down menu
		$('.dropdown-toggle').dropdown();
		//Fix input element click problem
		$('.dropdown input, .dropdown label').click(function(e) {
			e.stopPropagation();
		});
	});
</script>
<script>
	$(function() {
	    $(".nav li").click(function() {
	        $(".nav li").removeClass('active');
	        $(this).addClass('active'); 	
	    });
	});
</script>
	 
	 
	<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
	)); ?>
		<!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy;
			<?php echo date('Y'); ?>
			by My Company.<br /> All Rights Reserved.<br />
			<?php echo Yii::powered(); ?>
		</div>
		<!-- footer -->

	</div>
	<!-- page -->

</body>
</html>
