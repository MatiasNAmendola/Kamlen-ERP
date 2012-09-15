<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'type'=>'inline',
)); ?>

	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'order_nubmer',array('class'=>'span5','maxlength'=>30)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'nickname',array('class'=>'span5','maxlength'=>50)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'realname',array('class'=>'span5','maxlength'=>20)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textAreaRow($model,'contact',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'channel_id',array('class'=>'span5','maxlength'=>10)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'sales',array('class'=>'span5','maxlength'=>8)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'cost',array('class'=>'span5','maxlength'=>8)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'express_cost',array('class'=>'span5','maxlength'=>8)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'express_id',array('class'=>'span5','maxlength'=>10)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'express_number',array('class'=>'span5','maxlength'=>30)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'profit',array('class'=>'span5','maxlength'=>8)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textAreaRow($model,'note',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>20)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5','maxlength'=>10)); ?>
	</div>
	<div class='searchrow'>
		<?php echo $form->textFieldRow($model,'modify_time',array('class'=>'span5','maxlength'=>10)); ?>
	</div>
	<div>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'搜索',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
