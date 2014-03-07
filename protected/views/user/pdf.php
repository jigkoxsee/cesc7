<?php
/* @var $this UserController */

$model=$this->loadModel(Yii::app()->user->id);

$this->header="User # ".Yii::app()->user->name;
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
<div style="padding-top:-8%; padding-left:5%; padding-right:5%;">
    <table style="width: 100%; padding:5%;" align="right">
        <tr>
            <td width="82%"></td>
            <td width="18%" style="border:1px solid black; padding:1%;" align="left" colspan="2">No.  .................</td>
        </tr>
    </table>
<div style="padding-left:6%; padding-right:6%;">
    <table style="width: 100%;">
        <tr>
            <td style="text-align: center;">
                <img src="http://ziko.kmi.tl/cesc7/images/logoCE.png" class="img-circle"  height="100" width="100" style="">
            </td>
            <td style="text-align: center;">
                <h1 style="font-size:3.8em; font-weight:bold;">CE Smart Camp #7</h1>
                <span style="font-size:0.8em;" >Computer Engineering at King Mongkut's Institute of Technology Ladkrabang</span>
            </td>
        </tr>
    </table>
    <hr/>
    <h4 style="margin-left:20%; margin-top:-5px; font-weight:bold;">ใบสมัครเข้าร่วมโครงการ CE Smart Camp #7</h4>
    <h5><u><b>ข้อมูลส่วนตัว</b></u></h5>
    <div style="padding-left:5%;">
<table border="" style="width:100%;">
	<tr>
		<td style="height:0.9cm; vertical-align:bottom; font-size:14px;" colspan="5">เลขประจำตัวประชาชน:</td>
		<td colspan="4" style="border-bottom:dotted 2px black;"><?php echo $model->thai_id?></td>
		<td width="1%"></td>
		<td style="width:4cm; height:5.23cm; border:1px solid black;" rowspan="5" align="center">
            <!-- <img src="www.cesmartcamp.com/index.php?r=user/showimage&filename=<?php echo $model->student_pic; ?>" style="width:4cm; height:5.23cm;"/> -->
                    <p style="font-size:1.1em;">ติดรูปถ่ายขนาด 2 น้ิว</p>
                <br/>
                <br/>
                <br/>
                <p style="font-size:0.9em;">รูปถ่ายไม่เกิน 6 เดือน<br/> 
                   แต่งกายชุดนักเรียน<br/>
                   ไม่สวมหมวกหรือแว่นดำ
                </p>
        </td>
	</tr>
	
	<tr>
		<td style="height:0.8cm;  vertical-align:bottom; font-size:14px;" colspan="4">ชื่อ-นามสกุล:</td>
		<td colspan="5" align="center" style="border-bottom:dotted 2px black;  vertical-align:bottom;"> <?php echo $model->surname?> </td>
		<td width="1%"></td>
	</tr>
	<tr>
		<td style="height:0.8cm;  vertical-align:bottom; font-size:14px;" colspan="2">ชื่อเล่น:</td>
		<td colspan="" style="border-bottom:dotted 2px black;" > </td>
		<td colspan="2" align="center" style="vertical-align:bottom; border-bottom:dotted 2px black;"> <?php echo $model->nickname?> </td>
		<td colspan="3" align="center" style="vertical-align:bottom; font-size:16px;">วัน/เดือน/ปี เกิด:</td>
		<td align="center" style="border-bottom:dotted 2px black; vertical-align:bottom"> <?php echo $model->birthdate?> </td>
		<td width="1%"></td>
	</tr>
	<tr>
		<td width="3%" style="height:0.8cm; margin-right:-5px;  vertical-align:bottom; font-size:14px;">อายุ:</td>
		<td width="1%" style="border-bottom:dotted 2px black;"></td>
		<td width="3%" style="border-bottom:dotted 2px black;"></td>
		<td width="5%"style="border-bottom:dotted 2px black;"></td>
		<td width="12%" style="border-bottom:dotted 2px black; vertical-align:bottom;"><?php echo $model->age?></td>
		<td width="10%" align="center" style="vertical-align:bottom; font-size:14px;">ศาสนา:</td>
		<td width="7%" style="border-bottom:dotted 2px black;"></td>
		<td width="3%" style="border-bottom:dotted 2px black;"></td>
		<td width="28%" style="border-bottom:dotted 2px black; vertical-align:bottom;"><?php echo $model->region?></td>
		<td width="1%"></td>
		
	</tr>
	<tr>
		<td style="height:0.9cm; font-size:14px; vertical-align:bottom;" colspan="3">หมู่โลหิต:</td>
		<td style="border-bottom:dotted 2px black;"></td>
		<td align="center" style="vertical-align:bottom; border-bottom:dotted 2px black;"><?php echo $model->bloodtype?></td>
		<td colspan="2" align="center" style="vertical-align:bottom; font-size:16px;">โทรศัพท์บ้าน:</td>
		<td colspan="2" align="center" style="border-bottom:dotted 2px black; vertical-align:bottom;"><?php echo $model->phone_home?></td>
		<td width="1%"></td>
	</tr>
</table>

<table style="width:100%; margin-top:10px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:15%; vertical-align:bottom;">โทรศัพท์มือถือ:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:50%; vertical-align:bottom;"><?php echo $model->phone_mobile?></td>
	<td style="font-size:14px; width:10%; vertical-align:bottom;">เครือข่าย:</td>
	<td align="center" style="border-bottom:dotted 2px black; vertical-align:bottom;"><?php echo $model->phone_mobile_network?></td>
 </tr>
</table>

<table style="width:100%; margin-top:10px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:5%; vertical-align:bottom;">ที่อยู่:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:95%; vertical-align:bottom;"><?php echo $model->address?></td>
 </tr>
</table>

<table style="width:100%; margin-top:10px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:10%; vertical-align:bottom;">จังหวัด:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:30%; vertical-align:bottom;"><?php echo $model->address_province?></td>
	<td style="font-size:14px; width:10%; vertical-align:bottom;">E-mail:</td>
	<td align="center" style="border-bottom:dotted 2px black; vertical-align:bottom;"><?php echo $model->email?></td>
 </tr>
</table>

<table style="width:100%; margin-top:10px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:15%; vertical-align:bottom;">ความสามารถพิเศษ:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:85%; vertical-align:bottom;"><?php echo $model->talent?></td>
 </tr>
</table>

<table style="width:100%; margin-top:10px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:15%; vertical-align:bottom;">โรคประจำตัว:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:85%; vertical-align:bottom;"><?php echo $model->disease?></td>
 </tr>
</table>

<table style="width:100%; margin-top:10px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:15%; vertical-align:bottom;">อาหารที่ไม่รับประทาน:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:85%; vertical-align:bottom;"><?php echo $model->not_eat?></td>
 </tr>
</table>

<table style="width:100%; margin-top:10px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:15%; vertical-align:bottom;">อาหาร/ยา/สิ่งที่แพ้:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:85%; vertical-align:bottom;"><?php echo $model->allergy_food?> <?php echo $model->allergy_drug?> <?php echo $model->allergy?> </td>
 </tr>
</table>

<h5  style="padding-top:5px; padding-left:-26px"><u><b>ข้อมูลผู้ปกครอง(สามารถติดต่อได้ในกรณีฉุกเฉิน)</b></u></h5>
<table style="width:100%; margin-top:10px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:15%; vertical-align:bottom;">ชื่อ-นามสกุล:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:85%; vertical-align:bottom;"><?php echo $model->parent_name?></td>
 </tr>
</table>
<table style="width:100%; margin-top:10px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:15%; vertical-align:bottom;">มีความเกี่ยวข้องเป็น:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:35%; vertical-align:bottom;"><?php echo $model->parent_relation?></td>
	<td style="font-size:14px; width:15%; vertical-align:bottom;">เบอร์โทรศัพท์:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:35%; vertical-align:bottom;"><?php echo $model->parent_phone?></td>
 </tr>
</table>


<h5 style="padding-top:5px; padding-left:-26px"><u><b>ข้อมูลการศึกษา</b></u></h5>

<table style="width:100%; margin-top:5px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:10%; vertical-align:bottom;">โรงเรียน:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:40%; vertical-align:bottom;"><?php echo $model->school?></u></td>
	<td style="font-size:14px; width:10%; vertical-align:bottom;">จังหวัด:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:40%; vertical-align:bottom;"><?php echo $model->school_province?></td>
 </tr>
</table>

<table style="width:100%; margin-top:5px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:10%; vertical-align:bottom;">ระดับชั้น:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:41%; vertical-align:bottom;"><?php echo $model->class?></u></td>
	<td style="font-size:14px; width:10%; vertical-align:bottom;">เกรดเฉลี่ย:</td>
	<td align="center" style="border-bottom:dotted 2px black; width:39%; vertical-align:bottom;"><?php echo $model->gpa?></td>
 </tr>
</table>

<h5 style="padding-top:5px; padding-left:-26px;"><u><b>การเข้าอบรม</b></u></h5>
<table style="width:100%; margin-top:5px;">
 <tr height="0.8cm">
	<td style="font-size:14px; width:7%; vertical-align:bottom;">สาขา:</td>
	<td align="center" style="font-size:14px; width:93%; vertical-align:bottom; border-bottom:dotted 2px black;"><?php echo $model->camp?></u></td>
 </tr>
</table>

<h5 style="padding-top:5px; padding-left:-26px;"><u><b>การสมัครเข้าร่วมหรือสมัครค่ายหรือสมัครค่ายฝึกอบรมทางวิชาการอื่นๆ</b></u></h5>
<table style="width:100%; margin-top:5px;">
 <tr height="1cm" style="margin-top:5px;">
    <td style="font-size:14px; width:3%; vertical-align:bottom; border:solid 1px black;"><?php if( $model->camp1!="" || $model->camp2!="" || $model->camp3!=""){ echo("&#10003;");} ?></td>
	<td style="font-size:14px; width:47%; vertical-align:bottom;"> เคยเข้าฝึกอบรม</u></td>
    <td style="font-size:14px; width:3%; vertical-align:bottom; border:solid 1px black;"><?php if( $model->camp1=="" && $model->camp2=="" && $model->camp3==""){ echo("&#10003;");} ?></td>
    <td style="font-size:14px; width:47%; vertical-align:bottom;">  &nbsp;ไม่เคยเข้าฝึกอบรม</u></td>
 </tr>
</table>

<table style="width:100%; margin-top:5px;">
 <tr height="1cm" style="margin-top:5px;">
	<td style="font-size:16px; width:7%; vertical-align:bottom;">1.ค่าย</td>
	<td align="center" style="font-size:16px; width:40%; vertical-align:bottom; border-bottom:dotted 2px black;"><?php echo $model->camp1?></td>
    <td style="font-size:16px; width:10%; vertical-align:bottom;">สถาบัน/มหาวิทยาลัย</td>
	<td align="center" style="font-size:14px; width:43%; vertical-align:bottom; border-bottom:dotted 2px black;"><?php echo $model->camp1_uni?></td>	
 </tr>
</table>
<table style="width:100%; margin-top:5px;">
 <tr height="1cm" style="margin-top:5px;">
	<td style="font-size:16px; width:7%; vertical-align:bottom;">2.ค่าย</td>
	<td align="center" style="font-size:16px; width:40%; vertical-align:bottom; border-bottom:dotted 2px black;"><?php echo $model->camp2?></td>
    <td style="font-size:16px; width:10%; vertical-align:bottom;">สถาบัน/มหาวิทยาลัย</td>
	<td align="center" style="font-size:14px; width:43%; vertical-align:bottom; border-bottom:dotted 2px black;"><?php echo $model->camp2_uni?></td>	
 </tr>
</table>
<table style="width:100%; margin-top:5px;">
 <tr height="1cm" style="margin-top:5px;">
	<td style="font-size:16px; width:7%; vertical-align:bottom;">3.ค่าย</td>
	<td align="center" style="font-size:16px; width:40%; vertical-align:bottom; border-bottom:dotted 2px black;"><?php echo $model->camp3?></td>
    <td style="font-size:16px; width:10%; vertical-align:bottom;">สถาบัน/มหาวิทยาลัย</td>
	<td align="center" style="font-size:14px; width:43%; vertical-align:bottom; border-bottom:dotted 2px black;"><?php echo $model->camp3_uni?></td>	
 </tr>
</table>
<!-- <table style="width:100%; margin-top:13px;">
 <tr height="1cm" style="margin-top:5px;">
	<td style="color:white; font-size:14px; width:7%; vertical-align:bottom;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 </tr>
  <tr height="1cm" style="margin-top:5px;">
	<td style="color:white; font-size:14px; width:7%; vertical-align:bottom;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
 </tr>
</table> -->
</div>
</div>
</div>
<!--
</br>
</br>
<div style="padding-top:-8%; padding-left:5%; padding-right:5%;">
    <table style="width: 100%; padding:5%;" align="right">
        <tr>
            <td width="82%"></td>
            <td width="18%" style="border:1px solid black; padding:1%;" align="left" colspan="2">No.  .................</td>
        </tr>
    </table>
<div style="padding-left:6%; padding-right:6%;">
    <table style="width: 100%;">
        <tr>
            <td style="text-align: center;">
                <img src="http://ziko.kmi.tl/cesc7/images/logoCE.png" class="img-circle"  height="100" width="100" style="">
            </td>
            <td style="text-align: center;">
                <h1 style="font-size:3.8em; font-weight:bold;">CE Smart Camp #7</h1>
                <span style="font-size:0.8em;" >Computer Engineering at King Mongkut's Institute of Technology Ladkrabang</span>
            </td>
        </tr>
    </table>
    <hr/>
    <h4 style="margin-left:20%; margin-top:-5px; font-weight:bold;">ใบสมัครเข้าร่วมโครงการ CE Smart Camp #7</h4>
    <h5><u><b>สำหรับผู้ปกครอง</b></u></h5>
    <div style="padding-left:5%;">
<table border="" style="width:100%;">
	<tr>
            <td style="height:0.8cm;  vertical-align:bottom; font-size:15px; width:8%;">ข้าพเจ้า</td>
            <td style="height:0.8cm; vertical-align:bottom; width:3%; border-bottom:dotted 2px black;"> </td>
            <td style="border-bottom:dotted 2px black; width:50%;"></td>
            <td style="border-bottom:dotted 2px black; width:18%;"></td>
            <td style="border-bottom:dotted 2px black; width:22%;"></td>
	</tr>
        <tr>
            <td style="height:0.8cm;  vertical-align:bottom; font-size:15px;" colspan="2">ผู้ปกครองของ</td>
            <td style="border-bottom:dotted 2px black; "></td>
            <td style="vertical-align:bottom; font-size:15px;">โดยเกี่ยวข้องเป็น</td>
            <td style="border-bottom:dotted 2px black;"></td>
	</tr>
</table>
<table>
    <tr>
        <td style="height:0.8cm; vertical-align:bottom; font-size:14px; width:100%;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ได้ทราบรายละเอียดของโครงการค่าย CE Smart Camp ครั้งที่ 7 ของสาขาวิชาวิศวกรรม</td>
    </tr>
    <tr>
        <td style="height:0.8cm; vertical-align:bottom; font-size:14px; width:100%;">คอมพิวเตอร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง และอนุญาติให้ผู้สมัครเข้าร่วม</td>
    </tr>
    <tr>
        <td style="height:0.8cm; vertical-align:bottom; font-size:14px; width:100%;">กิจกรรมทางค่าย ซึ่งทางค่ายจะไม่อนุญาติให้มีการออกจากค่ายตลอดระยะเวลา 6 วัน 5 คืน ระหว่าง</td>
    </tr>
    <tr>
        <td style="height:0.8cm; vertical-align:bottom; font-size:14px; width:100%;">ระหว่างวันที่ 22-27 เมษายน 2557 และให้ช่วยดูแลเป็นพิเศษในเรื่อง.............................................</td>

    </tr>
    <tr>
        <td style="height:0.8cm; vertical-align:bottom; font-size:14px; width:100%;"><?php for($i=0;$i<=145;$i++){echo('.');}?></td>
    </tr>
    <tr>
        <td style="height:0.8cm; vertical-align:bottom; font-size:14px; width:100%;"><?php for($i=0;$i<=145;$i++){echo('.');}?></td>
    </tr>
    <tr>
        <td style="height:0.8cm; vertical-align:bottom; font-size:14px; width:100%;"><?php for($i=0;$i<=145;$i++){echo('.');}?></td>
    </tr>
</table>
</br>
</br>
</br>
<table width="100%">
    <tr>
        <td style="height:0.8cm; vertical-align:bottom; fontsize:15px; width:50%;"></td>
        <td style="height:0.8cm; vertical-align:bottom; fontsize:15px; width:18%;">ลงนามผู้ปกครอง</td>
        <td style="height:0.8cm; vertical-align:bottom; fontsize:15px; width:32%; border-bottom:dotted 2px black;"></td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td style="height:0.8cm; vertical-align:bottom; fontsize:15px; width:61%;"></td>
        <td style="height:0.8cm; vertical-align:bottom; fontsize:15px; width:1%;">(</td>
        <td style="height:0.8cm; vertical-align:bottom; fontsize:15px; width:37%; border-bottom:dotted 2px black;"></td>
        <td style="height:0.8cm; vertical-align:bottom; fontsize:15px; width:1%;">)</td>
    </tr>
</table>
<table width="100%">
    <tr>
        <td style="height:0.8cm; vertical-align:bottom; fontsize:15px; width:53%;"></td>
        <td style="height:0.8cm; vertical-align:bottom; fontsize:15px; width:46%;">วันที่............เดือน.......................ปี..................</td>
    </tr>
</table>

</div>
</div>
</div>
-->
