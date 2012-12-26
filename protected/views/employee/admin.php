<?php
/* @var $this EmployeeController */
/* @var $model EmployeeForm */

$this->breadcrumbs=array(
	'Employee Forms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List EmployeeForm', 'url'=>array('index')),
	array('label'=>'Create EmployeeForm', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('employee-form-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employee Forms</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employee-form-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'extra_id',
		'email_address',
		'username',
		'password',
		'title',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
