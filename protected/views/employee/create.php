<?php
/* @var $this EmployeeController */
/* @var $model EmployeeForm */

$this->breadcrumbs=array(
	'Employee Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmployeeForm', 'url'=>array('index')),
	array('label'=>'Manage EmployeeForm', 'url'=>array('admin')),
);
?>

<h1>Create EmployeeForm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>