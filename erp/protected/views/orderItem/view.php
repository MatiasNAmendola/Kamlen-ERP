<?php echo $this->renderPartial('_menu'); ?>

<h1>View OrderItem #<?php echo $model->id; ?></h1>
<hr>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'order_id',
		'product_id',
		'product_name',
		'quantity',
		'price',
		'status',
	),
)); ?>
