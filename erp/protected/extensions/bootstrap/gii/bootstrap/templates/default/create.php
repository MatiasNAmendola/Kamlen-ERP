<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php echo "<?php echo \$this->renderPartial('_menu'); ?>\n"; ?>

<h1>Create <?php echo $this->modelClass; ?></h1>
<hr>
<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
