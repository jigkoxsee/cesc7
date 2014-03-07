<?php

class UserController extends Controller
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
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('index','update','showimage','pdf','actionSuperuser'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('view'),
                'users'=>array('admin'),
            ),
            array('deny',  // deny all users
                'actions'=>array('delete'),
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
        $this->header="Register New User";
        $model=User::model()->findByPk(Yii::app()->user->id);
        if(!Yii::app()->user->isGuest){
            if($model!=null){
                $this->redirect(array('/user'));
            }
            else{

                $model=new User;
                // Uncomment the following line if AJAX validation is needed
                $this->performAjaxValidation($model);
                if(isset($_POST['User']))
                {
                    $model->attributes=$_POST['User'];
                    $model->regisip=Yii::app()->request->userHostAddress;
                    $model->username=Yii::app()->user->id;
                    if(isset(Yii::app()->session['fbeauth']['birthday'])){
                        $bd=Yii::app()->session['fbeauth']['birthday'];
                        $model->birthdate=substr($bd,-4)."-".substr($bd,-7,2)."-".substr($bd,0,2);
                    }


                    if($model->save())
                        $this->redirect(array('/user'));//$this->redirect(array('/site/login'));
                }

                $this->render('create',array(
                    'model'=>$model,
                ));
                
            }
        }else{
            $this->redirect(array('/site/login'));
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($uid)
    {

        //FBSendNotice::sendNotice('1449083385318999','5f7eea8cee76108d8c6367c53b7d55ce');
        $model=$this->loadModel($uid);

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if(isset($_POST['User']))
        {
            $model->attributes=$_POST['User'];


            if($model->save())
                $this->redirect(array('/user'));//'uid'=>$model->uid
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($uid)
    {
        $this->loadModel($uid)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $_SESSION["isNotSuperuser"] = 'true';
        /*$dataProvider=new CActiveDataProvider('User');
        $this->render('index',array('dataProvider'=>$dataProvider,));*/
        $this->render('index',array());
    }

    /**
     * Manages all models.
     */
    public function actionSuperuser($pwd)
    {
    	$this->layout='columnSuper';
    	//if(Yii::app()->user->id=='100000154047359')
        if($pwd=='7pmaccsec')
    	{
            $_SESSION["isNotSuperuser"] = 'false';
			$model=new User('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

			$this->render('admin',array(
				'model'=>$model,
			));
	    }else{
            throw new CHttpException(404,'The requested page does not exist.');
        }
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return User the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=User::model()->findByPk($id);
        //if($model===null)
        //    throw new CHttpException(404,'The requested page does not exist.');
        //if($model===null)
        //    $this->redirect(array('user/create')); //throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param User $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }



    public function actions()
    {
        return array(
            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
                'transparent'=>true,
                'testLimit'=>1,
                'foreColor'=>0x348017
            ),
        );


    }

    public function actionShowimage($filename = false)
    {
        //$this->render('showimage',array('filename'=>$filename));
        $fileUpload=Upload::model()->findByPk($filename);

        if(Yii::app()->user->id==$fileUpload->create_username)
            $filename=$fileUpload->file;
        else{
            throw new CHttpException(401,'Unauthorized.');
        }
        //$model=$this->loadModel(Yii::app()->user->id);
        
        //$filename=$fileUpload->id;

        //TEST

        if ($filename)
        {
            $path =  Yii::getPathOfAlias('application.uploads'). '/';
            if (file_exists($path. $filename))
            {
                $file=@file_get_contents($path. $filename);
                if($file)
                {
                    Yii::app()->request->sendFile($filename,$file);
                }else{
                    throw new CHttpException(403,'Forbidden.');
                }
            } else {
                echo $filename.", File not found!";
            }
        }
        return null;

    }

    public function actionPdf()
    {

        $mPDF1 = Yii::app()->ePdf->mpdf('th', 'A4');
        $mPDF1->useSubstitutions = true;
        $mPDF1->WriteHTML($this->renderPartial('pdf', array(), true));
        $mPDF1->SetAuthor("CE KMITL 51");
        $mPDF1->SetCreator('CE SMART CAMP7');
        $mPDF1->SetTitle('ใบสมัครค่าย');
        $mPDF1->SetSubject('CESC : Quiz');
        $mPDF1->Output('CE Smart Camp 7.pdf','I');

    }

}
