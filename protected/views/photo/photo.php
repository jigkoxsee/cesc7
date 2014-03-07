
<?php
	$this->breadcrumbs=array(
	 'Uploads'=>array('index'),
	 'Photo',
	);

	$this->menu=array(
	 array('label'=>'List Upload', 'url'=>array('index')),
	 array('label'=>'Manage Upload', 'url'=>array('admin')),
	);
	?>

	<h1>Upload Photo</h1>

	<?php if($uploaded):?>
	<p>File was uploaded. Check <?php echo $dir."\\".$fileName ?>.</p>
	<?php endif ?>
	<?php echo CHtml::beginForm('','post',array('enctype'=>'multipart/form-data'))?>
	<?php echo CHtml::error($model, 'file')?>
	<?php echo CHtml::activeFileField($model, 'file')?>
	<?php echo CHtml::submitButton('Upload')?>
	<?php echo CHtml::endForm()
?>
