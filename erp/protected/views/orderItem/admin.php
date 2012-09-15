<?php echo $this->renderPartial('_menu'); ?>

<h1>订单号: <?=$order['order_nubmer']?></h1>
<hr>
<div class="well order_detail">
	<li><b>昵称:</b> <?=$order['nickname']?></li>
	<li><b>姓名:</b> <?=$order['realname']?></li>
	<li><b>收货地址:</b> <?=$order['contact']?></li>
	<li><b>订单金额:</b> <?=$order['sales']?></li>
	<li><b>订单状态:</b> <?=$order['status']?></li>
	<li><b>快递:</b> <?=$order['express_id']?></li>
	<li><b>快递价格:</b> <?=$order['express_cost']?></li>
	<li><b>快递单号:</b> <?=$order['express_number']?></li>
</div>
<hr>

<?php
$this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'添加订单',
    'type'=>'normal',
    'size' => 'normal',
    'htmlOptions'=>array(
        'data-toggle'=>'modal',
        'data-target'=>'#myModal',
    ),
));

$this->widget('bootstrap.widgets.TbButton', array(
    'label' => '返回订单列表',
    'icon' => 'chevron-left',
    'type' => 'normal',
    'size' => 'normal',
    'url' => array('/order'),
    'htmlOptions'=>array('class'=>'search-button','style'=>'margin-right:10px'),
));
?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'order-item-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'order_id',
		'product_id',
		'product_name',
		'quantity',
		'price',
		/*
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{view} {update} {delete}'
		),
	),
)); ?>
<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Modal header</h4>
</div>
 
<div class="modal-body">
    <p>One fine body...</p>
</div>
 
<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Save changes',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>
 
<?php $this->endWidget(); ?>