<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */
$model=$this->loadModel(Yii::app()->user->id);//load data into Model
if($model==null)
    $this->redirect(array('user/create'));
$this->breadcrumbs=array(
    'Users',
);

/*$this->menu=array(
    array('label'=>'Edit Profile', 'url'=>array('update', 'uid'=>$model->username)),
    array('label'=>'Download PDF1', 'url'=>array('pdf')),
    array('label'=>'Download PDF2', 'url'=>'http://ziko.kmi.tl/cesc7/Doc/RobotQuiz.pdf'),
);*/

$this->header=Yii::app()->user->name;
?>

<div class="alert alert-info">
    <strong>ขั้นตอนการสมัคร</strong><br/>
    <ol>
        <li>กรอกข้อมูลส่วนตัวให้ครบ</li>
        <li>กด ดาวน์โหลด เพื่อโหลดใบคำถาม</li>
        <li>ตอบคำถามในใบคำถาม และใบขออนุญาตผู้ปกครงให้เรียบร้อย</li>
        <li>การส่งเอกสารสามารถทำได้ 2 ช่องทางคือ<br/>
            - อัพโหลดเอกสารใส่ลงในเว็บ<br/>
            
            - <?php echo CHtml::link('ส่งทางไปรษณีย์',array('site/page','view'=>'contact'), array('target'=>'_blank','class'=>'alert-link')); ?> (ให้พริ้นพ์ใบสมัครส่งมาด้วย)</li>
    </ol>
</div>

<h3>ข้อมูลส่วนตัว</h3>



<!-- <div class="row">
    <div class="col-sm-4">
        <p ><b>Facebook</b></p>
    </div>
    <div class=" col-sm-8 ">
        <?php //echo Yii::app()->user->name; ?>
    </div>
</div> -->
<?php
//TODO(ziko): camp does not display

$this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'cssFile'=>'',
    'tagName'=>'div',
    'itemTemplate'=>"<div class=\"{class}\"> <div class=\"col-md-offset-1 col-sm-4\"><p ><b>{label}</b></p></div> <div class=\" col-sm-7 \">{value}</div></div>",
    'itemCssClass'=>array('row'),
    'htmlOptions'=>array('class'=>'detail-view'),
    'attributes'=>array(
        //'username', //Facebook ID
        'surname',
        'nickname',
        'gender',
        'age',
        'birthdate',
        'thai_id',
        'address',
        'phone_home',
        'phone_mobile',
        'email',
        'school',
        'school_province',
        'branch',
        'gpa',
        'class',
        'region',
        'disease',
        'allergy',
        'allergy_drug',
        'allergy_food',
        //'regisTime',
        //'camp',
        'bloodtype',
        'phone_mobile_network',
        'address_province',
        'address_postcode',
        'talent',
        'not_eat',
        /*'parent_name',
        'parent_relation',
        'parent_phone',*/
        
        /*'camp1',
        'camp1_uni',
        'camp2',
        'camp2_uni',
        'camp3',
        'camp3_uni',*/
    )
,));
?>
<hr/>
<h3>ผู้ปกครอง</h3>
<div class="row">
        <?php
            
                echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('parent_name'))."</b></div>";
                echo "<div class=\"col-sm-4\">";
                echo $model->parent_name;
                echo "</div>";
            
        ?>
</div>
<div class="row">
        <?php
              
                echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('parent_relation'))."</b></div>";
                echo "<div class=\"col-sm-4\">";
                echo "  ".$model->parent_relation;
                echo "</div>";
            
        ?>
</div>

<div class="row">
        <?php
            
                echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('parent_phone'))."</b></div>";
                echo "<div class=\"col-sm-4\">";
                echo $model->parent_phone;
                echo "</div>";
            
        ?>
</div>

<hr/>

<h3>ค่ายที่เคยเข้าร่วม</h3>
<div class="row">
        <?php
            if($model->camp1!=""){
                echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('camp1'))."</b></div>";
                echo "<div class=\"col-sm-4\">";
                echo $model->camp1;
                echo "</div>";
            }
        ?>
</div>
<div class="row">
        <?php
            if($model->camp1!=""){   
                echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('camp1_uni'))."</b></div>";
                echo "<div class=\"col-sm-4\">";
                echo "  ".$model->camp1_uni;
                echo "</div>";
            }
        ?>
</div>

<div class="row">
        <?php
            if($model->camp2!=""){
                echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('camp2'))."</b></div>";
                echo "<div class=\"col-sm-4\">";
                echo $model->camp2;
                echo "</div>";
            }
        ?>
</div>
<div class="row">
        <?php
            if($model->camp2!=""){
                echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('camp2_uni'))."</b></div>";
                echo "<div class=\"col-sm-4\">";
                echo "  ".$model->camp2_uni;
                echo "</div>";
            }
        ?>
</div>

<div class="row">
        <?php
            if($model->camp3!=""){
                echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('camp3'))."</b></div>";
                echo "<div class=\"col-sm-4\">";
                echo $model->camp3;
                echo "</div>";
            }
        ?>
</div>
<div class="row">
        <?php
            if($model->camp3!=""){
                echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('camp3_uni'))."</b></div>";
                echo "<div class=\"col-sm-4\">";
                echo "  ".$model->camp3_uni;
                echo "</div>";
            }
        ?>
</div>

<hr/>


<div class="form">
<h3>เอกสารข้อมูลส่วนตัว</h3>
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
            echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('student_pic'))."</b></div>";
            echo "<div class=\"col-sm-4\">";
            if($model->student_pic=='')
                echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
            else
                echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->student_pic),array('target'=>'_blank'));
            echo "</div>";
            echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=stpic')))."</div>";
        ?>
    </div>

    <div class="row">
        <?php
            echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('other_pic'))."</b></div>";
            echo "<div class=\"col-sm-4\">";
            if($model->other_pic=='')
                echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
            else
                echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->other_pic),array('target'=>'_blank'));
            echo "</div>";
            echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=otpic')))."</div>";
        ?>
    </div>


    <div class="row">
        <?php
            echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_parent'))."</b></div>";
            echo "<div class=\"col-sm-4\">";
            if($model->sheet_parent=='')
                echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
            else
                echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_parent),array('target'=>'_blank'));
            echo "</div>";
            echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=pr')))."</div>";
        ?>
    </div>

    <div class="row">
        <?php
            echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_studentid'))."</b></div>";
            echo "<div class=\"col-sm-4\">";
            if($model->sheet_studentid=='')
                echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
            else
                echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_studentid));
            echo "</div>";
            echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=stid')))."</div>";
        ?>
    </div>
<hr/>
<h3>General Quiz</h3>
   <div class="row">
        <?php
        echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_gen1'))."</b></div>";
        echo "<div class=\"col-sm-4\">";
        if($model->sheet_gen1=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_gen1),array('target'=>'_blank'));
        echo "</div>";
        echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=gen1')))."</div>";
        ?>
    </div>

     <div class="row">
        <?php
        echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_gen2'))."</b></div>";
        echo "<div class=\"col-sm-4\">";
        if($model->sheet_gen2=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_gen2));
        echo "</div>";
        echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=gen2')))."</div>";
        ?>
    </div>

    <div class="row">
        <?php
        echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_gen3'))."</b></div>";
        echo "<div class=\"col-sm-4\">";
        if($model->sheet_gen3=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_gen3));
        echo "</div>";
        echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=gen3')))."</div>";
        ?>
    </div>





    

<hr/>


    <?php
    if($model->camp=="Robot"){
        echo "<h3>Robot Quiz</h3>";

        echo "<div class='row'>";
        echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_rb1'))."</b></div>";
        echo "<div class=\"col-sm-4\">";
        if($model->sheet_rb1=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_rb1));
        echo "</div>";
        echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=rb1')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_rb2'))."</b></div>";
        echo "<div class=\"col-sm-4\">";
        if($model->sheet_rb2=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_rb2));
        echo "</div>";
        echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=rb2')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_rb3'))."</b></div>";
        echo "<div class=\"col-sm-4\">";
        if($model->sheet_rb3=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_rb3));
        echo "</div>";
        echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=rb3')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_rb4'))."</b></div>";
        echo "<div class=\"col-sm-4\">";
        if($model->sheet_rb4=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_rb4));
        echo "</div>";
        echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=rb4')))."</div>";
        echo "</div>";

    }else{
        echo "<h3>Network Quiz</h3>";

        echo "<div class='row'>";
        echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_nw1'))."</b></div>";
        echo "<div class=\"col-sm-4\">";
        if($model->sheet_nw1=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_nw1));
        echo "</div>";
        echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=nw1')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_nw2'))."</b></div>";
        echo "<div class=\"col-sm-4\">";
        if($model->sheet_nw2=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_nw2));
        echo "</div>";
        echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=nw2')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_nw3'))."</b></div>";
        echo "<div class=\"col-sm-4\">";
        if($model->sheet_nw3=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_nw3));
        echo "</div>";
        echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=nw3')))."</div>";
        echo "</div>";


        echo "<div class='row'>";
        echo "<div class=\"col-md-offset-1 col-sm-4\"><b>".CHtml::encode($model->getAttributeLabel('sheet_nw4'))."</b></div>";
        echo "<div class=\"col-sm-4\">";
        if($model->sheet_nw4=='')
            echo "<p class=\"text-danger\">ยังไม่ได้ Upload</p>";
        else
            echo CHtml::link('ดูรูป',array('user/showimage','filename'=>$model->sheet_nw4));
        echo "</div>";
        echo "<div class=\"col-sm-3\">".CHtml::button('upload', array('class'=>'btn btn-primary  btn-sm','submit' => array('upload/photo&detail&des=nw4')))."</div>";
        echo "</div>";

    }

    ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->
