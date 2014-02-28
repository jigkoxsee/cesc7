<?php
$this->breadcrumbs=array(
    'Uploads'=>array('index'),
    'Photo',
);
$this->header="Upload Photo";

$this->menu=array();
?>

<?php echo CHtml::beginForm('','post',array('enctype'=>'multipart/form-data'))?>
<div class="col-sm-10">
<?php echo CHtml::error($model, 'file')?>
<?php echo CHtml::activeFileField($model, 'file',array('class'=>'well'))?>
</div>
<div class="col-sm-2" style="text-align: center">
<?php echo CHtml::submitButton('อัพไฟล์',array('class'=>'btn btn-primary'))?>
</div>
<?php echo CHtml::endForm()?>