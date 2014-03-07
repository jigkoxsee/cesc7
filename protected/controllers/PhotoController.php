<?php

class PhotoController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}


	public function actionPhoto()
	{
		$param1 = "Upload Photo 123";
		// $this->render('photo',array('param1'=>$param1));

		$dir = Yii::getPathOfAlias('application.uploads');
		$fileName = '';
		$uploaded = false;

		$model=new Upload();

		if(isset($_POST['Upload']))
		{
			$model->attributes=$_POST['Upload'];
			$file=CUploadedFile::getInstance($model,'file');
			$new_name = time().'_' . $file->getName(); // newname คือชื่อใหม่ เปลี่ยนเป็นชื่ออะไรก็ได้ (อย่าลืม มีจุดต่อท้ายด้วย)
			$model->file = $new_name; // บันทึกชื่อไฟล์ใหม่ที่กำหนด เก็บไว้ใน model

			if($model->validate()){
				$uploaded = $file->saveAs($dir.'/'.$file->getName());
				$fileName = $file->getName();
			}

			if($model->save())     //เก็บข้อมูลลง Database
			$this->redirect(array('view','id'=>$model->id));

		}

		$this->render( 'photo', array(
				'model' => $model,
				'uploaded' => $uploaded,
				'dir' => $dir,
				'fileName' => $fileName,
				));

	}


	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}