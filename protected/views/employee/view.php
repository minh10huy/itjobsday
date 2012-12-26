<?php
/* @var $this EmployeeController */
/* @var $model EmployeeForm */

$this->breadcrumbs=array(
	'Employee Forms'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List EmployeeForm', 'url'=>array('index')),
	array('label'=>'Create EmployeeForm', 'url'=>array('create')),
	array('label'=>'Update EmployeeForm', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmployeeForm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmployeeForm', 'url'=>array('admin')),
);
?>

<h1>View EmployeeForm #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'extra_id',
		'email_address',
		'username',
		'password',
		'title',
		'firt_name',
		'last_name',
		'address',
		'address2',
		'city',
		'county',
		'state_province',
		'country',
		'post_code',
		'phone_number',
		'fk_career_degree_id',
		'date_register',
		'last_login',
		'actkey',
		'admin_comments',
		'employee_status',
		'is_active',
	),
)); ?>
