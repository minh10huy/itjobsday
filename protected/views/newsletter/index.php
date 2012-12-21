<div id="signEmail">
	<div>
	<?php echo Yii::t('index', 'Đăng ký nhận việc hằng ngày')?>
	</div>
	<div class='input-append'>
	<?php echo CHtml::form('#Newsletter');?>
	<?php //echo CHtml::activeLabel($model, 'email');?>
	<?php echo CHtml::activeTextField($model, 'email', array('class'=>'span2', 'id'=>'appendedInputButton', 'placeholder'=>'Email'));?>
	<?php echo CHtml::error($model, 'email');?>
	<?php echo CHtml::submitButton(Yii::t('index', 'Gửi đi'), array('name'=>'signEmail', 'class'=>'btn'))?>
	</div>
</div>
<!--
<div id='search'>
	<div class="input-prepend">
		<div class="btn-group">
			<button class="btn btn-primary">Công Việc</button>
			<button data-toggle="dropdown"
				class="btn btn-primary dropdown-toggle">
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">Công Việc</a></li>
				<li><a href="#">CVs</a></li>
				<li><a href="#">Something</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated</a></li>
			</ul>
		</div>
		<input style="height: 24px; width: 200px;" class="span2" id="prependedDropdownButton" type="text">
		<button style="border-radius: 0 4px 4px 0;" type="submit" class="btn">Search</button>
	</div>
</div>
 
 -->