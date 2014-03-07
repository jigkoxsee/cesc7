<?php

class UploadController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='//layouts/column1';

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
        $modelUp=new Upload;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($modelUp);

        if(isset($_POST['Upload']))
        {
            $modelUp->attributes=$_POST['Upload'];
            if($modelUp->save())
                $this->redirect(array('view','id'=>$modelUp->id));
        }

        $this->render('create',array(
            'model'=>$modelUp,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        //$this->redirect(array('/user'));
        
        $modelUp=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($modelUp);

        if(isset($_POST['Upload']))
        {
            $modelUp->attributes=$_POST['Upload'];
            //if($modelUp->save())
            //    $this->redirect(array('view','id'=>$modelUp->id));
        }

        $this->render('update',array(
            'model'=>$modelUp,
        ));
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
        $modelUp=new Upload('search');
        $modelUp->unsetAttributes();  // clear any default values
        if(isset($_GET['Upload']))
            $modelUp->attributes=$_GET['Upload'];

        $this->render('admin',array(
            'model'=>$modelUp,
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
        $modelUp=Upload::model()->findByPk($id);
        if($modelUp===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $modelUp;
    }

    /**
     * Performs the AJAX validation.
     * @param Upload $modelUp the model to be validated
     */
    protected function performAjaxValidation($modelUp)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='upload-form')
        {
            echo CActiveForm::validate($modelUp);
            Yii::app()->end();
        }
    }


    public function actionPhoto($des)
    {

        $dir = Yii::getPathOfAlias('application.uploads');
        $fileName = '';
        $uploaded = false;
        $mUpload=User::model()->findByPk(Yii::app()->user->id);//load data into Model
        $modelUp=new Upload();

        $this->performAjaxValidation($modelUp);
        if(isset($_POST['Upload']))
        {
            $modelUp->attributes=$_POST['Upload'];
            $file=CUploadedFile::getInstance($modelUp,'file');
            $fileNo=0;
            switch ($des)
                {
                    case 'pr':
                        $fileNo=0;
                        break;
                    case 'stpic':
                        $fileNo=1;
                        break;
                    case 'otpic':
                        $fileNo=2;
                        break;
                    case 'gen1':
                        $fileNo=3;
                        break;
                    case 'gen2':
                        $fileNo=4;
                        break;
                    case 'gen3':
                        $fileNo=5;
                        break;
                    case 'rb1':
                        $fileNo=6;
                        break;
                    case 'rb2':
                        $fileNo=7;
                        break;
                    case 'rb3':
                        $fileNo=8;
                        break;
                    case 'rb4':
                        $fileNo=9;
                        break;
                    case 'nw1':
                        $fileNo=10;
                        break;
                    case 'nw2':
                        $fileNo=11;
                        break;
                    case 'nw3':
                        $fileNo=12;
                        break;
                    case 'nw4':
                        $fileNo=13;
                        break;
                    case 'stid':
                        $fileNo=14;
                        break;
                    default:
                        $fileNo=99;
                        echo "error";
                        break;
                }
            $new_name = Yii::app()->user->id.'_'.$fileNo.".".$file->getExtensionName(); // newname คือชื่อใหม่ เปลี่ยนเป็นชื่ออะไรก็ได้ (อย่าลืม มีจุดต่อท้ายด้วย)
            $modelUp->file = $new_name; // บันทึกชื่อไฟล์ใหม่ที่กำหนด เก็บไว้ใน model
            $modelUp->create_username=Yii::app()->user->id;
            $modelUp->description=$des;//TODO(ziko):Should list all sheet that wan to upload

            if( $des=="pr"||
            	$des=="stid"||
            	$des=="gen1"||
                $des=="gen2"||
                $des=="gen3"||
                $des=="stpic"||
                $des=="otpic"||
                $des=="rb1"||
                $des=="rb2"||
                $des=="rb3"||
                $des=="rb4"||
                $des=="nw1"||
                $des=="nw2"||
                $des=="nw3"||
                $des=="nw4"){

                
                //$mUpload->repeatpassword=$mUpload->password;
                /*if(!$mUpload->validate()){
                    $str="";
                    foreach ($mUpload->getErrors() as $value) {
                        foreach ($value as $value2) {
                            $str=$str.$value2;
                        }
                    }
                    throw new CHttpException(500,'User error'.$str);
                }*/

                
                if($modelUp->validate()){
                    $uploaded = $file->saveAs($dir.'/'.$new_name);
                    $fileName = $new_name;
                    
                }else{
                    $str="";
                    foreach ($modelUp->getErrors() as $value) {
                        foreach ($value as $value2) {
                            $str=$str.$value2.", ";
                        }
                    }
                    throw new CHttpException(405,'Upload error #'.$str);
                }

                if($modelUp->save()){     //เก็บข้อมูลลง Database
                    switch ($des)
                    {   case 'pr':
                            $mUpload->sheet_parent=$modelUp->id;
                            break;
                        case 'stpic':
                            $mUpload->student_pic=$modelUp->id;
                            break;
                        case 'otpic':
                            $mUpload->other_pic=$modelUp->id;
                            break;
                        case 'gen1':
                            $mUpload->sheet_gen1=$modelUp->id;
                            break;
                        case 'gen2':
                            $mUpload->sheet_gen2=$modelUp->id;
                            break;
                        case 'gen3':
                            $mUpload->sheet_gen3=$modelUp->id;
                            break;
                        case 'rb1':
                            $mUpload->sheet_rb1=$modelUp->id;
                            break;
                        case 'rb2':
                            $mUpload->sheet_rb2=$modelUp->id;
                            break;
                        case 'rb3':
                            $mUpload->sheet_rb3=$modelUp->id;
                            break;
                        case 'rb4':
                            $mUpload->sheet_rb4=$modelUp->id;
                            break;
                        case 'nw1':
                            $mUpload->sheet_nw1=$modelUp->id;
                            break;
                        case 'nw2':
                            $mUpload->sheet_nw2=$modelUp->id;
                            break;
                        case 'nw3':
                            $mUpload->sheet_nw3=$modelUp->id;
                            break;
                        case 'nw4':
                            $mUpload->sheet_nw4=$modelUp->id;
                            break;
                        case 'stid':
                            $mUpload->sheet_studentid=$modelUp->id;
                            break;
                        default:
                            echo "error";
                    }
                    if(!$mUpload->save(false,NULL))
                        throw new CHttpException(405,'User profile error');
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
            'model' => $modelUp,
            'uploaded' => $uploaded,
            'dir' => $dir,//TODO(ziko):change this
            'fileName' => $fileName,
        ));

    }
}
