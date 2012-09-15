<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'products-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php $this->widget('bootstrap.widgets.TbAlert'); ?>
	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model,'category_id',CHtml::listData(ProductsCategory::model()->findAll(), 'id', 'name'),array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'short_name',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'stock',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'cost_price',array('class'=>'span5','maxlength'=>5)); ?>

	<div>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '确定' : '保存',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
