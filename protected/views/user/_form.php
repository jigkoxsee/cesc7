<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<div class="form-horizontal" role="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',
        //'enableAjaxValidation'=>true,
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <div class="form-group" style="text-align: center">

        <?php
        $camp=$model->camp;
        if($camp==0){
            echo "<h1>ค่าย Robot</h1>";
        }else{
            echo "<h1>ค่าย Network</h1>";
        }

        ?>
        <?php echo $form->error($model,'camp'); ?>

    </div>

    <?php echo $form->errorSummary($model); ?>

    <div class="form-group">
        <h3>ข้อมูลส่วนตัว</h3>
    </div>

    <div class="form-group">
        <?php echo  CHtml::label("Facebook","",array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php  echo  CHtml::label(Yii::app()->user->name,"",array('class'=>'form-control','size'=>60,'maxlength'=>100));?>
        </div>
    </div>

    <?php /*
    <div class="form-group">
        <?php echo $form->labelEx($model,'camp',array('class'=>'col-sm-3 control-label'));?>
        <div class="col-sm-8">
            <?php echo $form->dropDownList($model,'camp', array('Robot'=>'Robot','Network'=>'Network'),array('class'=>'form-control'));?>
        </div>
        <?php echo $form->error($model,'camp'); ?>
    </div>
    */?>

    <div class="form-group">
        <?php echo $form->labelEx($model,'surname',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'surname',array('class'=>'form-control','size'=>60,'maxlength'=>100)); ?>
        </div>
        <?php echo $form->error($model,'surname'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'nickname',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'nickname',array('class'=>'form-control','size'=>20,'maxlength'=>20)); ?>
        </div>
        <?php echo $form->error($model,'nickname'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'thai_id',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'thai_id',array('class'=>'form-control','size'=>20,'maxlength'=>17)); ?>
        </div>
        <?php echo $form->error($model,'thai_id'); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'birthdate',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php
            if(isset(Yii::app()->session['fbeauth']['birthday'])){
                if($model->birthdate=="0000-00-00"){
                    $bd=Yii::app()->session['fbeauth']['birthday'];
                    $model->birthdate=substr($bd,-4)."-".substr($bd,-7,2)."-".substr($bd,0,2);
                }
            }
                echo $form->textField($model,'birthdate',array('class'=>'datepicker form-control'));
            ?>
        </div>
        <?php echo $form->error($model,'birthdate'); ?>
    </div>

    <div class="form-group">
        <?php   echo $form->labelEx($model,'email',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php   echo $form->textField($model,'email',array('class'=>'form-control','size'=>50,'maxlength'=>150,'placeholder'=>'Email')); ?>
        </div>
        <?php   echo $form->error($model,'email',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'age',array('class'=>'col-sm-3 control-label'));?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'age',array('class'=>'form-control',));?>
        </div>
        <?php echo $form->error($model,'age',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'gender',array('class'=>'col-sm-3 control-label'));?>
        <div class="col-sm-8">
            <?php echo $form->dropDownList($model,'gender', array('ชาย'=>'ชาย','หญิง'=>'หญิง'),array('class'=>'form-control'));?>
        </div>
        <?php echo $form->error($model,'gender',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>


    <div class="form-group">
        <?php echo $form->labelEx($model,'address',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textArea($model,'address',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
        </div>
        <?php echo $form->error($model,'address',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'address_province',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'address_province',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'address_province',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'address_postcode',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'address_postcode',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'address_postcode',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'phone_home',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'phone_home',array('class'=>'form-control','size'=>10,'maxlength'=>10)); ?>
        </div>
        <?php echo $form->error($model,'phone_home',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'phone_mobile',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'phone_mobile',array('class'=>'form-control','size'=>10,'maxlength'=>10)); ?>
        </div>
        <?php echo $form->error($model,'phone_mobile',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'phone_mobile_network',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'phone_mobile_network',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'phone_mobile_network',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'school',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'school',array('class'=>'form-control','size'=>60,'maxlength'=>150)); ?>
        </div>
        <?php echo $form->error($model,'school',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'school_province',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'school_province',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'school_province',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'branch',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'branch',array('class'=>'form-control','size'=>50,'maxlength'=>50)); ?>
        </div>
        <?php echo $form->error($model,'branch',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'gpa',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'gpa',array('class'=>'form-control')); ?>
        </div>
        <?php echo $form->error($model,'gpa',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'class',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->dropDownList($model,'class', array('ม. 3 ขึ้น ม.4'=>'ม. 3 ขึ้น ม.4',
                'ม. 4 ขึ้น ม.5'=>'ม. 4 ขึ้น ม.5',
                'ม. 5 ขึ้น ม.6'=>'ม. 5 ขึ้น ม.6'),array('class'=>'form-control'));?>
        </div>
        <?php echo $form->error($model,'class',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'region',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'region',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'region',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'bloodtype',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'bloodtype',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'bloodtype',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'disease',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'disease',array('class'=>'form-control')); ?>
        </div>
        <?php echo $form->error($model,'disease',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model,'allergy',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textArea($model,'allergy',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
        </div>
        <?php echo $form->error($model,'allergy',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>



    <div class="form-group">
        <?php echo $form->labelEx($model,'allergy_drug',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textArea($model,'allergy_drug',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
        </div>
        <?php echo $form->error($model,'allergy_drug',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'allergy_food',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textArea($model,'allergy_food',array('class'=>'form-control','rows'=>6, 'cols'=>50)); ?>
        </div>
        <?php echo $form->error($model,'allergy_food',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'not_eat',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'not_eat',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'not_eat',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'talent',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'talent',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'talent',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>
<hr/>
    <h3>ข้อมูลผู้ปกครอง</h3>
    <div class="form-group">
        <?php echo $form->labelEx($model,'parent_name',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'parent_name',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'parent_name',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'parent_relation',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'parent_relation',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'parent_relation',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'parent_phone',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'parent_phone',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'parent_phone',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

<hr/>
    <h3>ค่ายที่เคยเข้าอบรม</h3>
    <div class="form-group">
        <?php echo $form->labelEx($model,'camp1',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'camp1',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'camp1',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'camp1_uni',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'camp1_uni',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'camp1_uni',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'camp2',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'camp2',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'camp2',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'camp2_uni',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'camp2_uni',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'camp2_uni',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'camp3',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'camp3',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'camp3',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'camp3_uni',array('class'=>'col-sm-3 control-label')); ?>
        <div class="col-sm-8">
            <?php echo $form->textField($model,'camp3_uni',array('class'=>'form-control',)); ?>
        </div>
        <?php echo $form->error($model,'camp3_uni',array('class'=>'col-sm-offset-2 text-danger','style'=>'margin-top: 40px;padding-left: 15px;','errorCssClass'=>'has-error','successCssClass'=>'has-success','validatingCssClass'=>'has-warning')); ?>
    </div>

    <div class="form-group" style="text-align: center">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<style>
    .ui-datepicker {font-size:64%; }
</style>
<script>
    $(function() {
        $( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true ,minDate: "-22Y", maxDate: "-12Y"});
    });
</script>