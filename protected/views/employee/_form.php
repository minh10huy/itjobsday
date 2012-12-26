<?php
/* @var $this EmployeeController */
/* @var $model EmployeeForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'extra_id'); ?>
		<?php echo $form->textField($model,'extra_id',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'extra_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_address'); ?>
		<?php echo $form->textField($model,'email_address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firt_name'); ?>
		<?php echo $form->textField($model,'firt_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'firt_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address2'); ?>
		<?php echo $form->textField($model,'address2',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'county'); ?>
		<?php echo $form->textField($model,'county',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'county'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state_province'); ?>
		<?php echo $form->textField($model,'state_province',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'state_province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_code'); ?>
		<?php echo $form->textField($model,'post_code',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'post_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<?php echo $form->textField($model,'phone_number',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'phone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_career_degree_id'); ?>
		<?php echo $form->textField($model,'fk_career_degree_id'); ?>
		<?php echo $form->error($model,'fk_career_degree_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_register'); ?>
		<?php echo $form->textField($model,'date_register',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'date_register'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_login'); ?>
		<?php echo $form->textField($model,'last_login',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'last_login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actkey'); ?>
		<?php echo $form->textField($model,'actkey',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'actkey'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'admin_comments'); ?>
		<?php echo $form->textField($model,'admin_comments',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'admin_comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_status'); ?>
		<?php echo $form->textField($model,'employee_status',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'employee_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_active'); ?>
		<?php echo $form->textField($model,'is_active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'is_active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->