<div class="lostpassword"> 
	<p>Chúng tôi sẽ gởi email hướng dẫn bạn tạo mật khẩu mới</p>
</div>
<?php if($model->hasErrors()): ?>
	<div class="alert alert-block">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<?php echo CHtml::errorSummary($model); ?>
	</div>
<?php endif; ?>
<div class="formDiv">
	<?php echo CHtml::form('', 'post', array('class'=>'frmcontact')); ?>
	<div class='row'>
		<div class='span3' style="width: 175px;">Vui lòng nhập địa chỉ Email:</div>
		<div class='span3' style="height: 30px;"><?php echo CHtml::activeTextField($model, 'email', array('class'=>'tip', 'rel'=>'tooltip', 'title'=>'Nhập Email')); ?></div>
		<div class="span3" style="height: 30px;"><?php echo CHtml::error($model, 'email', array('class' => 'alert alert-error', 'style'=>'padding: 3px 0px;')); ?></div>
	</div>
	<div class="row">
		<div class="span3" style="width: 175px;"></div>
		<div class='span3' style=""><?php $this->widget('CCaptcha'); ?></div>
	</div>
	<div class="row">
		<div class='span3' style="width: 175px;" align="right">Nhập mã bảo vệ:</div>
		<div class='span3' style="height: 32px;"><?php echo CHtml::activeTextField($model, 'verifyCode', array('class'=>'tip', 'rel'=>'tooltip', 'title'=>'Nhập mã bảo vệ')); ?></div>
		<div class="span3" style="height: 32px;"><?php echo CHtml::error($model, 'verifyCode', array('class' => 'alert alert-error', 'style'=>'padding: 3px;')); ?></div>	
	</div>
	<div class="row">
		<div class="span3" style="width: 175px;"></div>
		<div class="span2"><?php echo CHtml::submitButton('Gởi', array('class'=>'btn-primary', 'name'=>'submit')); ?></div>
	</div>
	<div class='row'>
		
		
	</div>
<script type="text/javascript">
	$(document).ready(function () {
		$(".tip").tooltip({
			'selector': '',
			'placement': 'right',
		});
		console.log("jimmy");
	});
</script>
</div>
