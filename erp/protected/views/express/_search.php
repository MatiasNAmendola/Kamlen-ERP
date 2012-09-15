<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'type'=>'inline',
)); ?>

	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>20)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'delivery',array('class'=>'span5','maxlength'=>20)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'mobile',array('class'=>'span5','maxlength'=>20)); ?>
	</div>
	<div>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'搜索',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
