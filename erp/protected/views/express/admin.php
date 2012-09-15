<?php echo $this->renderPartial('_menu'); ?>
<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('express-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Expresses</h1>
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
    'label' => '添加快递',
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
	'id'=>'express-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'delivery',
		'mobile',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{view} {update} {delete}'
		),
	),
)); ?>
