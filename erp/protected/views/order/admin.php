<?php echo $this->renderPartial('_menu'); ?>
<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('order-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Orders</h1>
<hr>
<?php
$this->widget('bootstrap.widgets.TbButton', array(
    'label' => '高级搜索',
    'icon' => 'search',
    'type' => 'normal',
    'size' => 'normal',
    'url' => array('#'),
    'htmlOptions'=>array('class'=>'search-button','style'=>'margin-right:10px'),
));
$this->widget('bootstrap.widgets.TbButton', array(
    'label' => '添加订单',
    'icon' => 'plus',
    'type' => 'normal',
    'size' => 'normal',
    'url' => array('create'),
    'htmlOptions'=>array('style'=>'margin-right:10px'),
));
?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'order-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'order_nubmer',
		array('name'=>'order_nubmer','value'=>'CHtml::link($data->order_nubmer,"/orderItem/admin/orderid/".$data->id)','type'=>'raw'),
		'nickname',
		'realname',
		'contact',
		'channel_id',
		'sales',
		//'cost',
		//'express_cost',
		'express_id',
		//'express_number',
		//'profit',
		'status',
		//'note',
		'username',
		'create_time',
		//'modify_time',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{view} {update} {delete}'
		),
	),
)); ?>
