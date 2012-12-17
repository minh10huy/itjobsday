<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />

<!-- blueprint CSS framework -->
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
	media="screen, projection" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	media="print" />
<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/menu.css" />

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
	<div id="header">
		<a href="<?php echo Yii::app()->createUrl('site/index'); ?>" id='logo'><span></span>
		</a>
	</div>
	<!-- header -->
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
						array('label'=>'Đăng Nhập', 'url'=>array('/user/login'), 'itemOptions'=>array('class'=>'menu_right'),),
				),
			));	?>
		</div>
	</div>
	<div class="container" id="page">

		<!--
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->

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
