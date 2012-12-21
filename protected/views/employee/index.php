<?php
/* @var $this EmployeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employees',
);

$this->menu=array(
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>Employees</h1>
 
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
),
)); ?>

<?php echo $form->textField($model, 'username', array('id'=>'LoginForm_username', 'name'=>'LoginForm[username]', 'size'=>'30', 'style'=>'margin-bottom: 15px', 'placeholder'=>'Tên đăng nhập'));?>
<?php echo $form->error($model,'username'); ?>
<?php echo $form->passwordField($model, 'password', array('id'=>'LoginForm_password', 'name'=>'LoginForm[password]', 'size'=>'30', 'style'=>'margin-bottom: 15px', 'placeholder'=>'Mật khẩu'));?>
<?php echo CHtml::submitButton('Login'); ?>

<?php $this->endWidget();?>

 