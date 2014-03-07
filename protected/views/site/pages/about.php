<?php
/* @var $this SiteController */
$this->layout='column2';
$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>
<center><img class = "img-responsive" style="width:40%;"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/questionLogo.png" /></center><br />
<center><b> ค่าย CE SMART CAMP คืออะไร  ?</b></center>
&nbsp &nbsp ค่าย CE Smart Camp เป็นค่ายที่เปิดโอกาสให้น้องๆระดับชั้นมัธยมศึกษาตอนปลาย ได้สัมผัสบรรยากาศของสาขาวิศวกรรมคอมพิวเตอร์และร่วมเรียนรู้เทคโนโลยีใหม่ๆที่น่าสนใจ ทั้งด้านเน็ตเวิร์ก และโรบอท พร้อมกิจกรรมสนุกสนานแบบเต็มอิ่มไปเลย
						</div>
<?php
 echo Yii::app()->user->id."\n";
 //echo Yii::app()->user->uid."\n";

?>