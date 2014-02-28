<?php
/* @var $this UserController */
/* @var $model User */
if(!($model->username==Yii::app()->user->id))
    $this->redirect(array('update','uid'=>Yii::app()->user->name));


$this->breadcrumbs=array(
    'Users'=>array('index'),
    'Update',
);

$this->menu=array();
$this->header="Edit User #".Yii::app()->user->name;
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
