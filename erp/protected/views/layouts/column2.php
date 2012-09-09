<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
               <?php $this->widget('bootstrap.widgets.TbMenu', array(
                      'type'=>'list',
                      'items'=>$this->menu,
                  )); ?>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
        	<?php echo $content; ?>
        </div><!--/span-->
      </div><!--/row-->
<?php $this->endContent(); ?>