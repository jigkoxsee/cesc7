<?php
/* @var $this UserController */
/* @var $model User */
$this->setPageTitle(Yii::app()->name .' - สมัครเข้าค่าย');
$this->breadcrumbs=array(
    'Users'=>array('index'),
    'Create',
);

$this->menu=array();

$this->renderPartial('_signup', array('model'=>$model));
?>


