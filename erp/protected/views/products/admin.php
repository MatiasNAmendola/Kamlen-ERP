<?php echo $this->renderPartial('_menu'); ?>
<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('products-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Products</h1>
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
    'label' => '添加产品',
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
	'id'=>'products-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'category_id',
		array('name'=>'category_id','filter'=>CHtml::listData(ProductsCategory::model()->findAll(), 'id', 'name'),'value'=>'$data->products_category->name'),
		'name',
		'short_name',
		'stock',
		//'cost_price',
		array('name'=>'cost_price','value'=>'$data->cost_price'),
		array('name'=>'status','filter'=>Yii::app()->params['Product_Status'], 'value'=>'Yii::app()->params["Product_Status"][$data->status]'),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{update} {delete}'
		),
	),
)); ?>
