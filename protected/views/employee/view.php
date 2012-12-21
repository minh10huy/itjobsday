<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Employee', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Employee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employee', 'url'=>array('admin')),
);
?>

<h1>View Employee #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'extra_id',
		'email_address',
		'username',
		'passwd',
		'title',
		'fname',
		'sname',
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
