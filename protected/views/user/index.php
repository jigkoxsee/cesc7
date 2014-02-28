<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */
$model=$this->loadModel(Yii::app()->user->id);//load data into Model
$this->breadcrumbs=array(
    'Users',
);

$this->menu=array(
    array('label'=>'Edit Profile', 'url'=>array('update', 'uid'=>$model->username)),
    array('label'=>'Download PDF', 'url'=>array('pdf')),
);

$this->header="User # ".Yii::app()->user->name;
?>


<?php
 //$fbzk = Yii::app()->facebookphpsdk->getInfo();
//substr(Yii::app()->session['fbeauth']['url'],25)
/*
<h1>Users</h1>
$this->widget('zii.widgets.CListView', array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',));*/
?>
<div class="row">
    <div class="col-sm-3">
        <p ><b>Facebook</b></p>
    </div>
    <div class=" col-sm-8 ">
        <?php echo Yii::app()->user->name; ?>
    </div>
</div>
<?php
//TODO(ziko): camp does not display

$this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'cssFile'=>'',
    'tagName'=>'div',
    'itemTemplate'=>"<div class=\"{class}\"> <div class=\"col-sm-3\"><p ><b>{label}</b></p></div> <div class=\" col-sm-8 \">{value}</div></div>",
    'itemCssClass'=>array('row'),
    'htmlOptions'=>array('class'=>'detail-view'),
    'attributes'=>array(
        //'username', //Facebook ID
        'surname',
        'nickname',
        'gender',
        'age',
        'birthdate',
        'address',
        'phone_home',
        'phone_mobile',
        'email',
        'school',
        'branch',
        'gpa',
        'class',
        'region',
        'disease',
        'allergy',
        'allergy_drug',
        'allergy_food',
        'regisTime',
        'camp',
        'bloodtype',
        'phone_mobile_network',
        'address_province',
        'address_postcode',
        'talent',
        'not_eat',
        'parent_name',
        'parent_relation',
        'parent_phone',
        'school_province',
        'camp1',
        'camp1_uni',
        'camp2',
        'camp2_uni',
        'camp3',
        'camp3_uni',
    )
,));
?>


<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>


    <div class="row">
        <?php
        echo "<div class=\"col-sm-3\"><b>".CHtml::encode($model->getAttributeLabel('sheet_parent'))."</b></div>";
        echo "<div class=\"col-sm-5\">";
        if($model->sheet_parent=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_parent));
        echo "</div>";
        echo "<div class=\"col-sm-4\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&des=pr')))."</div>";
        ?>
    </div>

    <?php
    if($model->camp=="Robot"){

        echo "<div class='row'>";
        echo "<div class=\"col-sm-3\"><b>".CHtml::encode($model->getAttributeLabel('sheet_rb1'))."</b></div>";
        echo "<div class=\"col-sm-5\">";
        if($model->sheet_rb1=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_rb1));
        echo "</div>";
        echo "<div class=\"col-sm-4\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&des=rb1')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-sm-3\"><b>".CHtml::encode($model->getAttributeLabel('sheet_rb2'))."</b></div>";
        echo "<div class=\"col-sm-5\">";
        if($model->sheet_rb2=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_rb2));
        echo "</div>";
        echo "<div class=\"col-sm-4\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&des=rb2')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-sm-3\"><b>".CHtml::encode($model->getAttributeLabel('sheet_rb3'))."</b></div>";
        echo "<div class=\"col-sm-5\">";
        if($model->sheet_rb3=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_rb3));
        echo "</div>";
        echo "<div class=\"col-sm-4\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&des=rb3')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-sm-3\"><b>".CHtml::encode($model->getAttributeLabel('sheet_rb4'))."</b></div>";
        echo "<div class=\"col-sm-5\">";
        if($model->sheet_rb4=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_rb4));
        echo "</div>";
        echo "<div class=\"col-sm-4\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&des=rb4')))."</div>";
        echo "</div>";

    }else{

        echo "<div class='row'>";
        echo "<div class=\"col-sm-3\"><b>".CHtml::encode($model->getAttributeLabel('sheet_nw1'))."</b></div>";
        echo "<div class=\"col-sm-5\">";
        if($model->sheet_nw1=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_nw1));
        echo "</div>";
        echo "<div class=\"col-sm-4\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&des=nw1')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-sm-3\"><b>".CHtml::encode($model->getAttributeLabel('sheet_nw2'))."</b></div>";
        echo "<div class=\"col-sm-5\">";
        if($model->sheet_nw2=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_nw2));
        echo "</div>";
        echo "<div class=\"col-sm-4\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&des=nw2')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-sm-3\"><b>".CHtml::encode($model->getAttributeLabel('sheet_nw3'))."</b></div>";
        echo "<div class=\"col-sm-5\">";
        if($model->sheet_nw3=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_nw3));
        echo "</div>";
        echo "<div class=\"col-sm-4\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&des=nw3')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-sm-3\"><b>".CHtml::encode($model->getAttributeLabel('sheet_nw4'))."</b></div>";
        echo "<div class=\"col-sm-5\">";
        if($model->sheet_nw4=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_nw4));
        echo "</div>";
        echo "<div class=\"col-sm-4\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&des=nw4')))."</div>";
        echo "</div>";



    }

    ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->
