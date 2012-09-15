<?php echo $this->renderPartial('_menu'); ?>

<h1>View Products #<?php echo $model->id; ?></h1>
<hr>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_id',
		'name',
		'short_name',
		'stock',
		'cost_price',
		'status',
	),
)); ?>
