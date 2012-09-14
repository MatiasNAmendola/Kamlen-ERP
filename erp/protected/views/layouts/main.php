<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="utf-8">
            <title><?php echo CHtml::encode($this->pageTitle); ?></title>
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl;?>/css/custombootstarp.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">

            <!-- Le styles -->
            <style type="text/css">
              body {
                padding-top: 60px;
                padding-bottom: 40px;
              }
              .sidebar-nav {
                padding: 9px 0;
              }
            </style>
         
            <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->

            <!-- Le fav and touch icons -->
      </head>

  <body>

<?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'', // null or 'inverse'
    'brand'=>CHtml::encode(Yii::app()->name),
    'brandUrl'=>'/',
    'collapse'=>true, // requires bootstrap-responsive.css
    'fluid'=>true,
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'首页', 'url'=>'/'),
                //array('label'=>'用户管理', 'icon'=>'user', 'url'=>'/user','visible'=>Yii::app()->getUser()->checkAccess('/user')),
            ),
        ),
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'登陆', 'url'=>'/user/login','visible'=>Yii::app()->user->isGuest),
                array('label'=>Yii::app()->user->name, 'icon'=>'user','url'=>'#', 'items'=>array(
                    array('label'=>'修改密码', 'icon'=>'pencil', 'url'=>'/user/changePassword/'.Yii::app()->user->id),
                    array('label'=>'用户管理', 'icon'=>'user', 'url'=>'/user','visible'=>Yii::app()->getUser()->checkAccess('/user')),
                    array('label'=>'权限管理', 'icon'=>'eye-open', 'url'=>'/rights','visible'=>Yii::app()->getUser()->checkAccess('/rights')),
                    '---',
                    array('label'=>'退出', 'url'=>'/user/logout'),
                ),'visible'=>!Yii::app()->user->isGuest),
            ),
        ),
    ),
)); ?>
<div class="container-fluid">
<?php echo $content; ?>
      <hr>

      <footer>
        Copyright &copy; <?php echo date('Y'); ?> by My Company.  All Rights Reserved.  <?php echo Yii::powered(); ?>
      </footer>

    </div><!--/.fluid-container-->
  </body>
</html>
