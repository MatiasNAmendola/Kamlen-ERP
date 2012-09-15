<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'order-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php $this->widget('bootstrap.widgets.TbAlert'); ?>
	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'order_nubmer',array('class'=>'span5','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'nickname',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textAreaRow($model,'contact',array('rows'=>6, 'cols'=>50, 'class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'sales',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->dropDownListRow($model,'channel_id',CHtml::listData(Channel::model()->findAll(), 'id', 'name'),array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->dropDownListRow($model,'express_id',CHtml::listData(Express::model()->findAll(), 'id', 'name'),array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textAreaRow($model,'note',array('rows'=>6, 'cols'=>50, 'class'=>'span5')); ?>

	<div>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '确定' : '保存',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
