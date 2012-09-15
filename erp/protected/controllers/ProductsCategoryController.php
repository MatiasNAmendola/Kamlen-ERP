<?php

class ProductsCategoryController extends RController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';
	public $defaultAction = 'admin';

	//Rights 接管权限管理 Begin
	public function filters()
	{
		return array(
				'rights',
		);
	}

	public function allowedActions()
	{
		return '';
	}
	//Rights 接管权限管理 End

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ProductsCategory;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductsCategory']))
		{
			$model->attributes=$_POST['ProductsCategory'];
			if($model->save())
				// $this->redirect(array('view','id'=>$model->id));
				Yii::app()->user->setFlash('success', '信息添加成功！ 您可以 <a data-dismiss="alert">继续添加</a> 或者 <a href="admin">返回列表页</a>');
				$this->refresh();
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ProductsCategory']))
		{
			$model->attributes=$_POST['ProductsCategory'];
			if($model->save())
				// $this->redirect(array('view','id'=>$model->id));
				Yii::app()->user->setFlash('success', '信息编辑成功！ <a href="../admin">返回列表页</a>');
				$this->refresh();
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ProductsCategory('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ProductsCategory']))
			$model->attributes=$_GET['ProductsCategory'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=ProductsCategory::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='products-category-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
