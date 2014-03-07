<?php
$this->breadcrumbs=array(
    'Uploads'=>array('index'),
    'Photo',
);
$this->header="Upload Photo";

$this->menu=array();
?>

<?php echo CHtml::beginForm('','post',array

('enctype'=>'multipart/form-data'))?>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-8">
        <?php echo CHtml::error($model, 'file')?>
        <?php echo CHtml::activeFileField($model, 

'file',array('class'=>'well'))?>
    </div>
</div>

<div class="row">
    <div class="col-sm-5">
    </div>
    <div class="col-sm-2" style="text-align:right">
        <?php echo CHtml::submitButton('อัพโหลดไฟล์',array

('class'=>'btn btn-primary upload-button'))?>
    </div>
</div>

<?php echo CHtml::endForm()?>
