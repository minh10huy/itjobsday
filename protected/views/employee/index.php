<?php
/* @var $this EmployeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Employee Forms',
);

$this->menu=array(
	array('label'=>'Create EmployeeForm', 'url'=>array('create')),
	array('label'=>'Manage EmployeeForm', 'url'=>array('admin')),
);
?>

<h1>Employee Forms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
