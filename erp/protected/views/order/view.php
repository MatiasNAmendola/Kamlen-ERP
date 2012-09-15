<?php echo $this->renderPartial('_menu'); ?>

<h1>View Order #<?php echo $model->id; ?></h1>
<hr>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'order_nubmer',
		'nickname',
		'realname',
		'contact',
		'channel_id',
		'sales',
		'cost',
		'express_cost',
		'express_id',
		'express_number',
		'profit',
		'status',
		'note',
		'username',
		'create_time',
		'modify_time',
	),
)); ?>
