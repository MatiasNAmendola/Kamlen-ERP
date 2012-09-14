<div class="changepassword well span5">
	<h1>修改 <?php echo $model->username; ?> 的登陆密码</h1>
	<hr>

	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'user-form',
		'enableAjaxValidation'=>true,
	)); ?>
		<?php $this->widget('bootstrap.widgets.TbAlert'); ?>
		<?php echo $form->errorSummary($model); ?>

		<?php echo $form->passwordFieldRow($model,'orpassword',array('class'=>'span5','maxlength'=>128)); ?>

		<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>128)); ?>

		<?php echo $form->passwordFieldRow($model,'repassword',array('class'=>'span5','maxlength'=>128)); ?>

		<div>
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'buttonType'=>'submit',
				'type'=>'primary',
				'label'=>$model->isNewRecord ? '确定' : '保存',
			)); ?>
		</div>

	<?php $this->endWidget(); ?>
</div>