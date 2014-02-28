<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->username), array('view', 'id'=>$data->username)); ?>
    <br />

    <?php   /*echo "<b>".CHtml::encode($data->getAttributeLabel('uid')).":</b>";
	        echo CHtml::encode($data->uid)."<br />"; */

    /*echo "<b>".CHtml::encode($data->getAttributeLabel('password')).": </b>";
    echo CHtml::encode($data->password)."<br />"; */?>

    <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
    <?php echo CHtml::encode($data->email); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('facebook')); ?>:</b>
    <?php echo CHtml::encode($data->facebook); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('regisTime')); ?>:</b>
    <?php echo CHtml::encode($data->regisTime); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
    <?php echo CHtml::encode($data->gender); ?>
    <br />


    <b><?php echo CHtml::encode($data->getAttributeLabel('surname')); ?>:</b>
    <?php echo CHtml::encode($data->surname); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nickname')); ?>:</b>
    <?php echo CHtml::encode($data->nickname); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
    <?php echo CHtml::encode($data->age); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('birthdate')); ?>:</b>
    <?php echo CHtml::encode($data->birthdate); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
    <?php echo CHtml::encode($data->address); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('phone_home')); ?>:</b>
    <?php echo CHtml::encode($data->phone_home); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('phone_mobile')); ?>:</b>
    <?php echo CHtml::encode($data->phone_mobile); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('school')); ?>:</b>
    <?php echo CHtml::encode($data->school); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('branch')); ?>:</b>
    <?php echo CHtml::encode($data->branch); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('gpa')); ?>:</b>
    <?php echo CHtml::encode($data->gpa); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('class')); ?>:</b>
    <?php echo CHtml::encode($data->class); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('region')); ?>:</b>
    <?php echo CHtml::encode($data->region); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('allergy')); ?>:</b>
    <?php echo CHtml::encode($data->allergy); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('allergy_drug')); ?>:</b>
    <?php echo CHtml::encode($data->allergy_drug); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('allergy_food')); ?>:</b>
    <?php echo CHtml::encode($data->allergy_food); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('camp')); ?>:</b>
    <?php echo CHtml::encode($data->camp); ?>
    <br />

    <?php

    echo "<b>".CHtml::encode($data->getAttributeLabel('sheet_parent')).":</b>";
    echo CHtml::encode($data->sheet_parent)."<br />";

    echo "<b>".CHtml::encode($data->getAttributeLabel('sheet_rb1')).":</b>";
    echo CHtml::encode($data->sheet_rb1)."<br />";

    echo "<b>".CHtml::encode($data->getAttributeLabel('sheet_rb2')).":</b>";
    echo CHtml::encode($data->sheet_rb2)."<br />";

    echo "<b>".CHtml::encode($data->getAttributeLabel('sheet_rb3')).":</b>";
    echo CHtml::encode($data->sheet_rb3)."<br />";

    echo "<b>".CHtml::encode($data->getAttributeLabel('sheet_rb4')).":</b>";
    echo CHtml::encode($data->sheet_rb4)."<br />";

    echo "<b>".CHtml::encode($data->getAttributeLabel('sheet_nw1')).":</b>";
    echo CHtml::encode($data->sheet_nw1)."<br />";


    echo "<b>".CHtml::encode($data->getAttributeLabel('sheet_nw2')).":</b>";
    echo CHtml::encode($data->sheet_nw2)."<br />";

    echo "<b>".CHtml::encode($data->getAttributeLabel('sheet_nw3')).":</b>";
    echo CHtml::encode($data->sheet_nw3)."<br />";

    echo "<b>".CHtml::encode($data->getAttributeLabel('sheet_nw4')).":</b>";
    echo CHtml::encode($data->sheet_nw4)."<br />";

    ?>

</div>