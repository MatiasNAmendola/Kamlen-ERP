<?php echo $this->renderPartial('_menu'); ?>

<h1>View Express #<?php echo $model->id; ?></h1>
<hr>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'delivery',
		'mobile',
	),
)); ?>
