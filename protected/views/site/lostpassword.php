<div class="lostpassword"> 
	<p><?php Yii::t('site/lostpassword', 'Chúng tôi sẽ gởi email hướng dẫn bạn tạo mật khẩu mới.') ?></p>
</div>
<?php if(Yii::app()->user->hasFlash('wrongPass')): ?>
<div class="errorDiv">
	<h2><?php echo 'Quên Mật Khẩu'; ?></h2>
</div>
<div class="formDiv">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'class' => 'formlostpass',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	));?>
	<div class='row'>
		<?php echo $form->labelEx($model, 'email');?>
	</div>
</div>




<?php //else:?>
<div class="successDiv">
	<h2><?php echo 'DUNG Mật Khẩu'; ?></h2>
</div>

<?php endif;?>

