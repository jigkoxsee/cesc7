<?php

class UploadController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            /* array('allow',  // allow all users to perform 'index' and 'view' actions
                 'users'=>array('*'),
             ),*/

            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('photo'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete','index','view','create','update'),
                'users'=>array('admin'),
            ),
            array('deny',  // deny all users
                'actions'=>array('photo','delete'),
                'users'=>array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model=new Upload;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Upload']))
        {
            $model->attributes=$_POST['Upload'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
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
        $this->redirect(array('/user'));
        /*
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Upload']))
        {
            $model->attributes=$_POST['Upload'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }

        $this->render('update',array(
            'model'=>$model,
        ));*/
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->redirect(array('/user'));
        /*
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        */
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $this->redirect(array('/user'));
        /*
        $dataProvider=new CActiveDataProvider('Upload');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));*/
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $this->redirect(array('/user'));
        /*
        $model=new Upload('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Upload']))
            $model->attributes=$_GET['Upload'];

        $this->render('admin',array(
            'model'=>$model,
        ));*/
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Upload the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Upload::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Upload $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='upload-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }


    public function actionPhoto($des)
    {

        $dir = Yii::getPathOfAlias('application.uploads');
        $fileName = '';
        $uploaded = false;
        $model2=User::model()->findByPk(Yii::app()->user->id);//load data into Model
        $model=new Upload();

        $this->performAjaxValidation($model);
        if(isset($_POST['Upload']))
        {
            $model->attributes=$_POST['Upload'];
            $file=CUploadedFile::getInstance($model,'file');
            $new_name = Yii::app()->user->id.'_'.$des."_".time().".".$file->getExtensionName(); // newname คือชื่อใหม่ เปลี่ยนเป็นชื่ออะไรก็ได้ (อย่าลืม มีจุดต่อท้ายด้วย)
            $model->file = $new_name; // บันทึกชื่อไฟล์ใหม่ที่กำหนด เก็บไว้ใน model
            $model->create_username=Yii::app()->user->name;
            $model->description=$des;//TODO(ziko):Should list all sheet that wan to upload

            if( $des=="pr"||
                $des=="rb1"||
                $des=="rb2"||
                $des=="rb3"||
                $des=="rb4"||
                $des=="nw1"||
                $des=="nw2"||
                $des=="nw3"||
                $des=="nw4"){

                switch ($des)
                {
                    case 'pr':
                        $model2->sheet_parent=$new_name;
                        break;
                    case 'rb1':
                        $model2->sheet_rb1=$new_name;
                        break;
                    case 'rb2':
                        $model2->sheet_rb2=$new_name;
                        break;
                    case 'rb3':
                        $model2->sheet_rb3=$new_name;
                        break;
                    case 'rb4':
                        $model2->sheet_rb4=$new_name;
                        break;
                    case 'nw1':
                        $model2->sheet_nw1=$new_name;
                        break;
                    case 'nw2':
                        $model2->sheet_nw2=$new_name;
                        break;
                    case 'nw3':
                        $model2->sheet_nw3=$new_name;
                        break;
                    case 'nw4':
                        $model2->sheet_nw4=$new_name;
                        break;
                    default:
                        echo "error";
                }
                //$model2->repeatpassword=$model2->password;
                /*if(!$model2->validate()){
                    $str="";
                    foreach ($model2->getErrors() as $value) {
                        foreach ($value as $value2) {
                            $str=$str.$value2;
                        }
                    }
                    throw new CHttpException(500,'User error'.$str);
                }*/

                if(!$model2->save(false,NULL))
                    throw new CHttpException(405,'User profile error');

                if($model->validate()){
                    $uploaded = $file->saveAs($dir.'/'.$new_name);
                    $fileName = $new_name;
                }else{
                    $str="";
                    foreach ($model->getErrors() as $value) {
                        foreach ($value as $value2) {
                            $str=$str.$value2.", ";
                        }
                    }
                    throw new CHttpException(405,'Upload error #'.$str." Back to do again.");
                }

                if($model->save()){     //เก็บข้อมูลลง Database
                    $this->redirect(array('/user'));
                }else{
                    throw new CHttpException(405,'File upload error');
                }

            }else{
                //TODO(ziko):do some thing
                //$this->redirect(array('/user'));
                throw new CHttpException(403,'Forbidden.');
            }



        }
        $this->render( 'photo', array(
            'model' => $model,
            'uploaded' => $uploaded,
            'dir' => $dir,//TODO(ziko):change this
            'fileName' => $fileName,
        ));

    }
}
