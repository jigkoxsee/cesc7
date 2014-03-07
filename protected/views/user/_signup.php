<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form-horizontal" role="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',

        'enableClientValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true),
        //'enableAjaxValidation'=>false,//ziko
    )); ?>

    <?php //echo $form->errorSummary($model,"<b>กรุณาแก้ไขข้อมูลให้ถูกต้อง</b>",NULL,array('class'=>'alert alert-danger')); ?>
<?php

?>

    <!-- <div class="form-group">
        <?php   echo  CHtml::label("FBID","",array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php  echo  CHtml::label(Yii::app()->user->id,"",array('class'=>'form-control','size'=>30,'maxlength'=>64));?>
        </div>
    </div> -->

    <div class="form-group">
        <?php   echo  CHtml::label("Facebook","",array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php  echo  CHtml::label(Yii::app()->user->name,"",array('class'=>'form-control','size'=>30,'maxlength'=>64));?>
        </div>
    </div>

    <div class="form-group">
        <?php   echo $form->label($model,'email',array('class'=>'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php
                if(isset(Yii::app()->session['fbeauth']['email']))
                    $em=Yii::app()->session['fbeauth']['email'];
                else
                    $em="";
                echo $form->textField($model,'email',array('class'=>'form-control','size'=>50,'maxlength'=>150,'placeholder'=>'Email','value'=> $em ));
            ?>
        </div>
        <?php   echo $form->error($model,'email',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label($model,'age',array('class'=>'col-sm-2 control-label'));?>
        <div class="col-sm-10">
            <?php echo $form->textField($model,'age',array('class'=>'form-control',));?>
        </div>
        <?php echo $form->error($model,'age',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label($model,'gender',array('class'=>'col-sm-2 control-label'));?>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($model,'gender', array('ชาย'=>'ชาย','หญิง'=>'หญิง'),array('class'=>'form-control'));?>
        </div>
        <?php echo $form->error($model,'gender',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php //echo $form->labelEx($model,'phone_mobile',array('class'=>'col-sm-2 control-label'));?>
        <label for="inputEmail3" class="col-sm-2 control-label">มือถือ</label>
        <div class="col-sm-10">
            <?php echo $form->textField($model,'phone_mobile',array('class'=>'form-control','size'=>10,'maxlength'=>10));?>
        </div>
        <?php echo $form->error($model,'phone_mobile',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label($model,'camp',array('class'=>'col-sm-2 control-label'));?>
        <div class="col-sm-10">
            <?php echo $form->dropDownList($model,'camp', array('Robot'=>'Robot','Network'=>'Network'),array('class'=>'form-control'));?>
        </div>
        <?php echo $form->error($model,'camp',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="row buttons">
        <div class="col-sm-offset-2 col-sm-8" style="text-align: center">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->