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
		<div class='span3'>Vui lòng nhập địa chỉ Email:</div>
		<div class='span3'><?php echo CHtml::activeTextField($model, 'email', array('id'=>'emailtooltip', 'class' => 'textboxcontact')); ?></div>
		<a  href="#" rel="tooltip" title="first tooltip">hover over me</a>
		<a id="example" data-placement="top" rel="tooltip" href="#" data-original-title="Tooltip on top">Tooltip on top</a>
		<div class="tooltip fade top in" style="top: 1193px; left: 699.5px; display: block;">
			<div class="tooltip-arrow"></div>
			<div class="tooltip-inner">bbbbbbbbbbbb</div>
		</div>
		<?php echo CHtml::error($model, 'email', array( 'class' => 'alert alert-error' )); ?>
		<div class='span3'><?php $this->widget('CCaptcha'); ?></div>
		<div class='span2'><?php echo CHtml::activeLabel($model, 'verifyCode'); ?></div>
		<div class='span3'><?php echo CHtml::activeTextField($model, 'verifyCode'); ?></div>
		<div class="tooltip fade top in" style="top: 1193px; left: 699.5px; display: block;" data-original-title="">
			<div class="tooltip-arrow"></div>
			<div class="tooltip-inner">46px</div>
		</div>
		<?php echo CHtml::error($model, 'verifyCode', array('class'=>'alert alert-error')); ?>
		
		<?php echo CHtml::submitButton('Gởi', array('class'=>'submitcomment', 'name'=>'submit')); ?>
		
	</div>
	<div class='row'>
	</div>
</div>
<script type="text/javascript">
	$('#example').tooltip('show');
	
</script>
