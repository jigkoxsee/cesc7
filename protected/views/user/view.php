<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	//array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'uid'=>$model->username)),
	//array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->username),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->username; ?></h1>

<?php
	echo $_SESSION["isNotSuperuser"];
	if($_SESSION["isNotSuperuser"]=='false'){
		$this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'uid' ,
				//'username' ,
				'camp',
				'email' ,
				'regisTime' ,
				'gender' ,
				'surname' ,
				'nickname' ,
				'age' ,
				'birthdate' ,
				'address' ,
				'phone_home' ,
				'phone_mobile' ,
				'school' ,
				'branch' ,
				'gpa' ,
				'class' ,
				'region' ,
				'allergy' ,
				'allergy_drug' ,
				'allergy_food' ,
				'camp',
				'sheet_parent' ,
				'sheet_gen1' ,
				'sheet_gen2' ,
				'sheet_gen3' ,
				'sheet_rb1' ,
				'sheet_rb2' ,
				'sheet_rb3' ,
				'sheet_rb4' ,
				'sheet_nw1' ,
				'sheet_nw2' ,
				'sheet_nw3' ,
				'sheet_nw4' ,
				'sheet_studentid' ,
		        'verifyCode',
		        'regisip',
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
		        'disease',
		        'thai_id',
		        'other_pic',
		        'filestatus',
		        'student_pic',
			),
		));
	}else{
		echo "ERROR";
	}
	//$_SESSION["isNotSuperuser"]='true';
?>
