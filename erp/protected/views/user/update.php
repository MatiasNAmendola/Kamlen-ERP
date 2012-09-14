<?php echo $this->renderPartial('_menu'); ?>

<h1>编辑用户 <?php echo $model->username; ?></h1>
<hr>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>