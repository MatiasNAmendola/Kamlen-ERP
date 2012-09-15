<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'express-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?php $this->widget('bootstrap.widgets.TbAlert'); ?>
	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'delivery',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'mobile',array('class'=>'span5','maxlength'=>20)); ?>

	<div>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? '确定' : '保存',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
