<?php
/* @var $this EmployeeController */
/* @var $model EmployeeForm */

$this->breadcrumbs=array(
	'Employee Forms'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmployeeForm', 'url'=>array('index')),
	array('label'=>'Create EmployeeForm', 'url'=>array('create')),
	array('label'=>'View EmployeeForm', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EmployeeForm', 'url'=>array('admin')),
);
?>

<h1>Update EmployeeForm <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>