<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'type'=>'inline',
)); ?>

	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'order_id',array('class'=>'span5','maxlength'=>10)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'product_id',array('class'=>'span5','maxlength'=>10)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'product_name',array('class'=>'span5','maxlength'=>255)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'quantity',array('class'=>'span5','maxlength'=>10)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'price',array('class'=>'span5','maxlength'=>5)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>
	</div>
	<div>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'搜索',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
