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
	 
	<!-- header -->
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
				<div id="menu">
					<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" id='logo' class="brand"><span></span> </a>
					<?php
						$this->widget('zii.widgets.CMenu', array(
									'items'=>array(
						array('label'=>'Trang Chủ', 'url'=>array('/site/index')),
						array('label'=>'Tìm Việc', 'url'=>array('/jobsearch/search')),
						array('label'=>'Tạo Hồ Sơ', 'url'=>array('/createCV/create')),
						array('label'=>'Quản Lý Hồ Sơ', 'url'=>array('/manageCV/viewCV')),
						)));
					?>
				<!-- The drop down menu -->
					<ul class="nav pull-right">
						<?php if(Yii::app()->user->isGuest): ?>
						<li class="menu_right"><a href="/users/sign_up"><?php echo Yii::t('index', 'Đăng Ký')?> </a></li>
						<!-- <li class="divider-vertical"></li> -->
						<li class="dropdown menu_right"><a class="" href="#" data-toggle="dropdown"><?php echo Yii::t('index', 'Đăng Nhập')?> <strong class="caret"></strong></a>
							<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
								<!-- Login form here -->
								<?php echo CHtml::form(Yii::app()->createUrl('site/login'), 'post', array('accept-charset'=>'UTF-8'));?>
									<?php echo CHtml::textField('LoginForm[username]', '', array('id'=> 'LoginForm_username','style'=>'margin-bottom: 15px', 'site'=>'30', 'placeholder'=>'Tên đăng nhập'));?>
									<?php echo CHtml::passwordField('LoginForm[password]', '', array('id'=> 'LoginForm_password', 'style'=>'margin-bottom: 15px', 'size'=>'30', 'placeholder'=>'Mật khẩu'));?>
									<?php echo CHtml::checkBox('rememberMe', '0', array('style'=>'float: left; margin-right: 10px;'))?>
									<?php echo CHtml::label('Nhớ trạng thái đăng nhập', 'rememberMe', array('class'=>'string optional'));?>
									<div class='btnSign'>
										<?php //echo CHtml::submitButton('Đăng Nhập');?>
										<?php echo CHtml::submitButton('Đăng Nhập', array('class'=>'btn btn-primary', 'style'=>'float: left; width: 100%; height: 32px; font-size: 13px; margin-right: 10px;'));?>
									</div>
									<div class='lostpass'>
										<?php echo CHtml::link('[Quên mật khẩu]', '#');?>
									</div>
									<div class='otheracc'>
										<?php echo CHtml::label('Hoặc bằng tài khoản khác', '', array('style'=>'margin: 5px; color: #004ACC;'));?>
									</div>
									<div class='imgFGY'>
										<?php echo CHtml::link('', Yii::app()->createUrl('site/index'),array('class'=>'social-icon facebook'));?>
										<?php echo CHtml::link('', Yii::app()->createUrl('site/index'),array('class'=>'social-icon google'));?>
										<?php echo CHtml::link('', Yii::app()->createUrl('site/index'),array('class'=>'social-icon yahoo'));?>
									</div>
								<?php echo CHtml::endForm();?>
								<!-- 
								<form action="<?php //echo Yii::app()->createUrl('employee/index'); ?>" method="post" accept-charset="UTF-8">
									<input id="LoginForm_username" style="margin-bottom: 15px;" type="text" name="LoginForm[username]" size="30" placeholder="Tên đăng nhập"/> 
									<input id="LoginForm_password" style="margin-bottom: 15px;" type="password" name="LoginForm[password]" size="30" placeholder="Mật khẩu"/> 
									<input id="LoginForm_rememberMe" style="float: left; margin-right: 10px;" type="checkbox" name="LoginForm[rememberMe]" value="1" /> 
									<label class="string optional" for="LoginForm_rememberMe"> Nhớ trạng thái đăng nhập</label>
									<div class='btnSign'>
										<input class="btn btn-primary" style="clear: left; width: 100px; height: 32px; font-size: 13px; margin-right: 10px;" type="submit" name="commit" value="Đăng Nhập" />
									</div>
									<div class='lostpass'>
										<?php //echo CHtml::link('[Quên mật khẩu]', '#');?>
									</div>
									<div class="otheracc">
										<span style="margin: 5px; color: #004ACC;">Hoặc bằng tài khoản khác</span>
									</div>
									<div class="imgFGY">
										<a href="<?php //echo Yii::app()->createUrl('site/index'); ?>" id='fb' class="brand"><span></span> </a>
										<a href="<?php //echo Yii::app()->createUrl('site/index'); ?>" id='go' class="brand"><span></span> </a>
										<a href="<?php //echo Yii::app()->createUrl('site/index'); ?>" id='ya' class="brand"><span></span> </a>
									</div>
								</form>
								-->
							</div>
						</li>
						<?php else: ?>
						<li class="dropdown menu_right">
							<a class="" href="<?php echo Yii::app()->createUrl('site/logout'); ?>" data-toggle="dropdown">Chào, <?php echo Yii::app()->user->name;?><strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li style="margin-top: 5px;"><a href="#"><i class="icon-wrench"></i> Cài đặt</a></li>
								<li style="margin-top: 5px;" class="divider"></li>
								<li style="margin-top: 5px;">
									<a href="<?php echo Yii::app()->createUrl('site/logout'); ?>"><i class="icon-off"></i> Đăng xuất</a>
								</li>
							</ul>
						</li>
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
