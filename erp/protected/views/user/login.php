<div class='well login'>
	<div class='loginlogo'>
		<?=CHtml::encode(Yii::app()->name)?>
	</div>
	<div class='loginform'>
		<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		    'id'=>'login-form',
		    'enableClientValidation'=>true,
		    'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		    'htmlOptions'=>array('class'=>''),
		)); ?>
		 
		<?php echo $form->textFieldRow($model, 'username', array('class'=>'span3')); ?>
		<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
		<?php echo $form->checkboxRow($model, 'rememberMe'); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'登陆')); ?>
		 
		<?php $this->endWidget(); ?>
	</div>
</div>