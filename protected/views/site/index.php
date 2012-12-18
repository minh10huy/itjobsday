<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="btn-group">
	<button class="btn btn-primary">Action</button>
	<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu">
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>



<div id="signEmail">
	<div>
	<?php echo Yii::t('index', 'Đăng ký nhận việc hằng ngày')?>
	</div>
	<div class='input-append'>
	<?php echo CHtml::form('#Newsletter');?>
	<?php //echo CHtml::activeLabel($model, 'email');?>
	<?php echo CHtml::activeTextField($model, 'email', array('class'=>'span2', 'id'=>'appendedInputButton', 'placeholder'=>'Email'));?>
	<?php echo CHtml::error($model, 'email');?>
	<?php echo CHtml::submitButton(Yii::t('index', 'Gửi đi'), array('name'=>'signEmail', 'class'=>'btn'))?>
	</div>
</div>
<div id='search'>
	<div class='input-prepend'>
	<?php echo CHtml::form('#Search');?>
		<div class="btn-group">
		<?php echo CHtml::button('Action');?>

		</div>
		<?php echo CHtml::activeTextField($model, 'email', array('class'=>'btn-group'));?>
		<?php echo CHtml::error($model, 'search');?>
		<?php echo CHtml::submitButton(Yii::t('index', 'Tìm'), array('name'=>'search'));?>
	</div>
</div>
<h1>
	Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?> </i>
</h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following
	two files:</p>
<ul>
	<li>View file: <code>
	<?php echo __FILE__; ?>
		</code></li>
	<li>Layout file: <code>
	<?php echo $this->getLayoutFile('main'); ?>
		</code></li>
</ul>

<p>
	For more details on how to further develop this application, please
	read the <a href="http://www.yiiframework.com/doc/">documentation</a>.
	Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
	should you have any questions.
</p>
