<?php echo $this->renderPartial('_menu'); ?>

<h1>Update Order <?php echo $model->id; ?></h1>
<hr>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>