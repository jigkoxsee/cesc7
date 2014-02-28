<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;

?>
    <div id="move">
        <ul class = "navigation desktop">
            <li data-slide="1">หน้าหลัก</li>
            <li data-slide="2">รายละเอียด</li>
            <li data-slide="3">ตารางเวลา</li>
            <li data-slide="4">แผนที่&ติดต่อ </li>
            <li data-slide="5">คำถาม </li>
            <li data-slide="6">รูปกิจกรรม </li>
            <li>
                <?php
                if(Yii::app()->user->isGuest){
                    echo CHtml::link('เข้าสู่ระบบ',array('site/login'),array('id'=>'login'));
                }else{
                    echo CHtml::link('ดูโปรไฟล์',array('/user'));
                }
                ?></li>
        </ul>
    </div>

    <!--Navbar for Non-mobile Version -->
    <nav class="navbar navbar-default navbar-fixed-top mobile" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>CE SMART CAMP #7</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mobile" id="bs-example-navbar-collapse-1">
            <ul id = "nav" class="nav navbar-nav">
                <a href="#" class = "btn" data-slide="1">หน้าหลัก</a>
                <a href="#" class = "btn" data-slide="2">รายละเอียด</a>
                <a href="#" class = "btn" data-slide="3">ตารางเวลา</a>
                <a href="#" class = "btn" data-slide="4">แผนที่&ติดต่อ</a>
                <a href="#" class = "btn" data-slide="5">คำถาม</a>
                <a href="#" class = "btn" data-slide="6">รูปกิจกรรม</a>
                <?php
                if(Yii::app()->user->isGuest){
                    echo CHtml::link('เข้าสู่ระบบ',array('site/login'),array('id'=>'login'));
                }else{
                    echo CHtml::link('ดูโปรไฟล์',array('/user'));
                }
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    <!-- end -->


    <img class="cescLogo slideDown" style="margin-top: 10px" src="<?php echo Yii::app()->request->baseUrl; ?>/images/bg1cesc7.png"/>

    <div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">


        <?php
        if(Yii::app()->user->isGuest){
            echo CHtml::htmlButton('สมัครเข้าร่วมโครงการ',array('class'=>'btn btn-success btn-large','id'=>'register','href'=>'user/create'));
        }
        ?>


        <div class =" desktop">
            <img class = "floating"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloud1.png" data-stellar-ratio="3" data-stellar-vertical-offset="-55"alt="">
        <img class = "floating"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloud1.png" data-stellar-ratio="1" data-stellar-vertical-offset="-102"alt="">
        <img class = "floating"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloud2.png" data-stellar-ratio="1.5" data-stellar-vertical-offset="-53"alt="">
        <img class = "floating"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloud1.png" data-stellar-ratio="2.7" data-stellar-vertical-offset="-25"alt="">
        <img class = "floating"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloud1.png" data-stellar-ratio="3" data-stellar-vertical-offset="-55"alt="">
        <img class = "floating"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloud2.png" data-stellar-ratio="1" data-stellar-vertical-offset="-102"alt="">
        <img class = "floating"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloud1.png" data-stellar-ratio="1.5" data-stellar-vertical-offset="-53"alt="">
        <img class = "floating"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloud2.png" data-stellar-ratio="2.7" data-stellar-vertical-offset="-25"alt="">
        <!-- <img class = "floating"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/turtle.png" data-stellar-ratio="2.7" data-stellar-vertical-offset="-25"alt=""> !-->
        </div>
        <div class =" desktop">
            <div id="stage1space" ></div><!--space before ground-->
            <div id = "firstBlock"></div>
            <div id = "firststage" ></div>
            <div id = "floor1" > </div>
            <div id = "firsttosecond" ></div>
        </div>
    </div>


<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
    <div class="desktop">
        <div id = "stage2"></div>
        <div  id = "pinkhost"></div>
        <div  id = "redhost" ></div>
        <br/><br/><br/><br/><br/><br/><br/><br/>
    </div>
    <br/><br/>
    <div class = "row">
        <div id = "text2" class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 blockText" ><center>What is CE Smart Camp ?</center> <br/>
            Welcome to CE Smart Camp 7
            open up vision, improve network and robot skills.<br/>
            กลับมาอีกครั้งกับความรู้และความสนุกสนานกับ CE Smart Camp #7 จากสาขาวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ที่จัดขึ้นสำหรับน้องๆในระดับชั้นมัธยมศึกษาตอนปลาย ได้มีโอกาสสัมผัสถึงบรรยากาศและกิจกรรมของสาขาวิศวกรรมคอมพิวเตอร์อย่างใกล้ชิด และร่วมเรียนรู้เทคโนโลยีใหม่ๆที่น่าสนใจ ทั้งด้านเน็ตเวิร์ก และโรบอท พร้อมกับสนุกสนานแบบเต็มอิ่มรับรองได้ว่างานนี้สนุกสุดยอดไปเลย!
            รายละเอียดโครงการ โครงการ CE Smart Camp #7 ในครั้งนี้จัดขึ้นระหว่างวันที่ #-# เมษายน 2556 (พักค้างแรม) รับเข้าร่วมโครงการจำนวน 80 คน โดยแบ่งเป็นการอบรม 2 ส่วน ส่วนละ 40 คน โดยเน้นทั้งทฤษฎี และได้ปฏิบัติกับอุปกรณ์จริง ซึ่งน้องๆสามารถเลือกอบรมได้ดังนี้ <br/>
            <br/><center><b class="btn btn-primary btn-lg network"  style="margin-bottom:3%;">สาย Network</b>
                <b class="btn btn-danger btn-lg robot"  style="margin-bottom:3%;margin-left:5%;">สาย Robot</b></center><br/>
        </div>
        <div id = "network" class="col-md-8 col-md-offset-2 well" >
            ต่อให้ ทุ่มเท ด้วย ใจทั้งใจ จะ มอง ไป ทางใด ยัง เห็น ภาพ เธอ ใน สายตา จะ เติม ความหวาน ให้ กับ โลก นี้ ได้ ทั้ง ใบ รับรู้ บ้าง ไหม หรือ หัวใจ เธอ ไม่มี บอก ฉัน สักที แต่ ข้างใน ฟูมฟาย เป็นอะไร ไม่รู้ หัวใจ ละลาย แต่ ข้างใน มัน อิน เป็นอะไร ไม่รู้ หัวใจ มัน ฟิน

            จะ มอง ไป ทางใด ยัง เห็น ภาพ เธอ ใน สายตา แต่ ยัง ไม่ แน่ใจ ช่วย บอก ให้ มัน ชัดเจน แค่เพียง ปล่อย เวลาที่ ยัง มี ให้ หมุน ไป ออกไป ทำ อะไร อย่างใจ มัน คง เป็น ความรัก ที่ ทำให้ ตัวฉัน ยัง ยืน อยู่ ตรงนี้ รับรู้ บ้าง ไหม หรือ หัวใจ เธอ ไม่มี บอก ฉัน สักที ทำดี กี่ ครั้ง ก็ ยัง เปลี่ยน เธอ ไม่ได้ เจอะ เธอ เมื่อไหร่ ก็เลย เก๊ก ใส่ เธอ ยอม ยอม จะ ได้ มั๊ย

            แม้ว่า เหมือน ไม่มี โอกาส แม้ว่า ฉัน ต้อง พลาด อะไร มากมาย จะ ส่งสายตา ไป เพื่ออะไร ไม่มี เหตุผล

            ให้ เบอร์ กัน มา ทำไม ไม่มีความหมาย ฉัน ทำ ด้วย รัก แต่ เธอ มอง ความรัก ฉัน มีค่า บ้าง ไหม โฮ .. สิ่ง ที่ มัน ยัง คล้าย เบลอ เบลอ

            แม้ว่า เหมือน ไม่มี โอกาส แม้ว่า ฉัน ต้อง พลาด อะไร มากมาย จะ เติม ความหวาน ให้ ค วาน รัก เรา มีความหมาย แล้ว ยัง มา เดิน งง งง อย่า มา ร้อนรน ไม่เห็น รู้สึก อะไร แค่ เรา เท่านั้น นะ แค่ เธอ กับ ฉัน นะ จะ ทำให้ โลก ใบ นี้ นั้น อิจฉา ก็แค่ สงสาร แถม เงิน ให้ เดิน ควง กัน กี่ หมื่น กี่ พัน ความรัก จะ ยัง อยู่ และ มั่นคง เสมอไป โลก ใบ นี้ คง เล็ก ไป ถ้า เทียบ รัก เรา
            <center><li class="btn btn-primary btn-lg backNet" >กลับ<li></center>
        </div>
        <div id = "robot"  class="col-md-8 col-md-offset-2 well" >
            ต่อให้ ทุ่มเท ด้วย ใจทั้งใจ จะ มอง ไป ทางใด ยัง เห็น ภาพ เธอ ใน สายตา จะ เติม ความหวาน ให้ กับ โลก นี้ ได้ ทั้ง ใบ รับรู้ บ้าง ไหม หรือ หัวใจ เธอ ไม่มี บอก ฉัน สักที แต่ ข้างใน ฟูมฟาย เป็นอะไร ไม่รู้ หัวใจ ละลาย แต่ ข้างใน มัน อิน เป็นอะไร ไม่รู้ หัวใจ มัน ฟิน

            จะ มอง ไป ทางใด ยัง เห็น ภาพ เธอ ใน สายตา แต่ ยัง ไม่ แน่ใจ ช่วย บอก ให้ มัน ชัดเจน แค่เพียง ปล่อย เวลาที่ ยัง มี ให้ หมุน ไป ออกไป ทำ อะไร อย่างใจ มัน คง เป็น ความรัก ที่ ทำให้ ตัวฉัน ยัง ยืน อยู่ ตรงนี้ รับรู้ บ้าง ไหม หรือ หัวใจ เธอ ไม่มี บอก ฉัน สักที ทำดี กี่ ครั้ง ก็ ยัง เปลี่ยน เธอ ไม่ได้ เจอะ เธอ เมื่อไหร่ ก็เลย เก๊ก ใส่ เธอ ยอม ยอม จะ ได้ มั๊ย

            แม้ว่า เหมือน ไม่มี โอกาส แม้ว่า ฉัน ต้อง พลาด อะไร มากมาย จะ ส่งสายตา ไป เพื่ออะไร ไม่มี เหตุผล

            ให้ เบอร์ กัน มา ทำไม ไม่มีความหมาย ฉัน ทำ ด้วย รัก แต่ เธอ มอง ความรัก ฉัน มีค่า บ้าง ไหม โฮ .. สิ่ง ที่ มัน ยัง คล้าย เบลอ เบลอ

            แม้ว่า เหมือน ไม่มี โอกาส แม้ว่า ฉัน ต้อง พลาด อะไร มากมาย จะ เติม ความหวาน ให้ ค วาน รัก เรา มีความหมาย แล้ว ยัง มา เดิน งง งง อย่า มา ร้อนรน ไม่เห็น รู้สึก อะไร แค่ เรา เท่านั้น นะ แค่ เธอ กับ ฉัน นะ จะ ทำให้ โลก ใบ นี้ นั้น อิจฉา ก็แค่ สงสาร แถม เงิน ให้ เดิน ควง กัน กี่ หมื่น กี่ พัน ความรัก จะ ยัง อยู่ และ มั่นคง เสมอไป โลก ใบ นี้ คง เล็ก ไป ถ้า เทียบ รัก เรา
            <center><li class="btn btn-danger btn-lg backRo" >กลับ</li></center>
        </div>
    </div>
    <!-- <span class="desktop slideno">รายละเอียด</span> -->
    <!--<a class="button" data-slide="3" title=""></a> -->
</div>

<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
    <div class="desktop">
        <div id = "stage3"></div>
        <div id = "sat" ></div>
        <br/><br/><br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/><br/><br/><br/>
    </div>
        
    
   
    <div id = "text1" class = "col-md-4 col-md-offset-2 col-sm-10 col-sm-offset-1 blockText">
        <center>TIMELINES</center> <br/>
        <table class="table table-bordered table-hover">
            <tr><td>วันที่</td><td>กิจกรรม</td></tr>
            <tr> <td>15 กุมภาพันธ์ 2556</td><td>เปิดลงทะเบียน CE Smart Camp ครั้งที่ 6 ผ่านเว็บไซต์</td></tr>
            <tr><td>วันที่</td><td>กิจกรรม</td></tr>
            <tr><td>วันที่</td><td>กิจกรรม</td></tr>
            <tr><td>วันที่</td><td>กิจกรรม</td></tr>

        </table>
    </div>
    <div class = "col-md-4 col-md-offset-1 desktop" >
        <div id="kirbybox"></div>
    </div >


</div>

<div  class="slide" id = "slide4" data-slide="4" data-stellar-background-ratio="0.5">
    
    
       <div id = "missile ">
            
        </div> 
   
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    
    <div class="col-md-8 col-md-offset-2 blockText col-sm-12">
        <b> แผนที่ </b><br /><br />
        <iframe style="embed{max-width: 100%;};" width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?saddr=2nd+State+Expy%2FSi+Rat+Suburban+Network+Expy&amp;daddr=13.7317558,100.767793+to:Unknown+road&amp;hl=en&amp;sll=13.730297,100.659657&amp;sspn=0.069704,0.132093&amp;geocode=FY-y0QAdzI__BQ%3BFauH0QAdMZgBBinh8kxDTmYdMTGwwyMfsgABEw%3BFQKI0QAd5LMBBg&amp;mra=mrv&amp;via=1&amp;t=m&amp;ie=UTF8&amp;ll=13.728046,100.718021&amp;spn=0.139409,0.264187&amp;output=embed"></iframe>
    </div>
    <div class="desktop"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>
    <br/><br/><br/>
    <div class="col-md-8 col-md-offset-2 blockText col-sm-10 col-sm-offset-1">
        <center>ติดต่อเรา</center><br/>
        Facebook<br/>
        Facebook: CE Smart Camp #7<br/>
        Email<br/>
        Email: cesmartcamp@hotmail.com<br/>
        โทรศัพท์<br/>
    </div> 
    
</div>
<div class="slide" id = "slide5" data-slide="5" >
<div class="desktop">
      
	  <div  id="stardoor">
          <div class="col-md-8 col-md-offset-2 " id="question">
        <center><b>คำถามที่มักถามบ่อย</b></center><br/>
		1.CE Smart Camp คืออะไร

คือค่ายที่จัดขึ้นโดยพี่ๆนักศึกษาสาขาวิศวกรรมคอมพิวเตอร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง มีการอบรมโดยจะแบ่งผู้เข้าอบรมเป็น 2 กลุ่ม คือ กลุ่ม Robot และ Network ในการอบรมจะมีทั้งการศึกษาจากทฤษฎีและปฏิบัติกับอุปกรณ์จริง<br/>
<br/>
2.วัน/เวลา/สถานที่ดำเนินกิจกรรม<br/>
<br/>
ระยะเวลาในการเข้าค่ายตั้งแต่วันที่ 1-6 เมษายน 2556 เป็นค่ายพักค้างแรม (ไม่อนุญาติให้เดินทางไปกลับ) สถานที่ดำเนินกิจกรรมทั้งหมดจัดภายในคณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง<br/>

3.คุณสมบัติของผู้สมัคร<br/>

เป็นผู้มีความสนใจด้าน Network หรือ Robot และกำลังศึกษาอยู่ในชั้นมัธยมศึกษาตอนปลาย<br/>
นักเรียนชั้นมัธยมศึกษาปีที่ 3 ขึ้นชั้นมัธยมศึกษาปีที่ 4<br/>
นักเรียนชั้นมัธยมศึกษาปีที่ 4 ขึ้นชั้นมัธยมศึกษาปีที่ 5<br/>
นักเรียนชั้นมัธยมศึกษาปีที่ 5 ขึ้นชั้นมัธยมศึกษาปีที่ 6<br/>
นักเรียนชั้นมัธยมศึกษาปีที่ 6 ขึ้นปีหนึ่ง (นิสิต/นักศึกษา)<br/>
<br/>
4.ในการสมัครต้องส่งเอกสารอะไรบ้าง และต้องส่งไปที่ไหน<br/>
<br/>
เอกสารที่ต้องส่ง ประกอบไปด้วย<br/>
<br/>
ใบประวัติส่วนตัว พร้อมติดรูปนักเรียน<br/>
ใบรับรองผู้ปกครอง<br/>
ใบตอบคำถาม (เน็ตเวิร์คหรือโรบอทอย่างใดอย่างหนึ่งตามที่น้องได้สมัครอบรมไว้)<br/>
สำเนาบัตรนักเรียน<br/>
สำเนาบัตรประจำตัวประชาชน<br/>
ส่งรูปถ่ายไม่เป็นทางการขนาด 4x6 นิ้วขึ้นไป สามารถใช้ได้ทั้งภาพถ่ายเดี่ยวหรือภาพกลุ่มกับเพื่อน จำนวน 1 รูป โดยหลังรูปเขียน ชื่อ - นามสกุล, ชื่อเล่น<br/>
ส่งมาที่ สาขาวิชาวิศวกรรมคอมพิวเตอร์ หลักสูตรวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ถนน ฉลองกรุง เขตลาดกระบัง กรุงเทพมหานคร รหัสไปรษณีย์ 10520 *วงเล็บมุมซอง "สมัครค่าย CE Smart Camp #6"<br/>
ขณะนี้เราได้เพิ่มช่องทางพิเศษ ให้น้องๆสามารถแสกนแล้วส่งมาทาง Email ได้แล้วจ้า โดยสามารถส่งมาที่ cesmartcamp6@gmail.com หรือ cesmartcamp@hotmail.com จ้า<br/>
<br/>
5.ถ้ายังไม่ได้ทำบัตรประจำตัวประชาชน ต้องทำอย่างไร<br/>
<br/>
ใช้บัตรนักเรียนก็ได้จ้า<br/>
<br/>
6.ถ้าไม่มีเบอร์บ้าน ต้องทำอย่างไร<br/>
<br/>
กรอกเป็น 000000000 ก็ได้ครับ<br/>
<br/>
7.หากเกรดเฉลี่ยเทอมล่าสุดยังไม่ออก ใช้เกรดเฉลี่ยเทอมไหน<br/>
<br/>
เกรดเฉลี่ยของเทอมล่าสุดที่เกรดออกครับ ^^<br/>
<br/>
8.เดินทางอย่างไร<br/>
<br/>
ดูได้ ที่นี่ เลยจ้า<br/>
<br/>
9.หากกรอกผิด และกดยืนยันประวัติส่วนตัวไปแล้ว จะสามารถแก้ได้หรือเปล่า<br/>
<br/>
ได้ครับ โดยจะเขียนใหม่ที่ใบประวัติส่วนตัวที่พิมพ์ออกมาโดยตรง หรือติดต่อขอแก้ไขได้ ที่นี่ ครับ<br/>
		
		</div>
	  </div>
</div>
    <!-- MOBILE VERSION -->
    <div class="mobile">
        <br/><br/><br/><br/><br/><br/><br/>
        <div  class="col-sm-8 col-sm-offset-2 blockText">
            <center><b>คำถามที่มักถามบ่อย</b></center><br/>
		1.CE Smart Camp คืออะไร

คือค่ายที่จัดขึ้นโดยพี่ๆนักศึกษาสาขาวิศวกรรมคอมพิวเตอร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง มีการอบรมโดยจะแบ่งผู้เข้าอบรมเป็น 2 กลุ่ม คือ กลุ่ม Robot และ Network ในการอบรมจะมีทั้งการศึกษาจากทฤษฎีและปฏิบัติกับอุปกรณ์จริง<br/>
<br/>
2.วัน/เวลา/สถานที่ดำเนินกิจกรรม<br/>
<br/>
ระยะเวลาในการเข้าค่ายตั้งแต่วันที่ 1-6 เมษายน 2556 เป็นค่ายพักค้างแรม (ไม่อนุญาติให้เดินทางไปกลับ) สถานที่ดำเนินกิจกรรมทั้งหมดจัดภายในคณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง<br/>

3.คุณสมบัติของผู้สมัคร<br/>

เป็นผู้มีความสนใจด้าน Network หรือ Robot และกำลังศึกษาอยู่ในชั้นมัธยมศึกษาตอนปลาย<br/>
นักเรียนชั้นมัธยมศึกษาปีที่ 3 ขึ้นชั้นมัธยมศึกษาปีที่ 4<br/>
นักเรียนชั้นมัธยมศึกษาปีที่ 4 ขึ้นชั้นมัธยมศึกษาปีที่ 5<br/>
นักเรียนชั้นมัธยมศึกษาปีที่ 5 ขึ้นชั้นมัธยมศึกษาปีที่ 6<br/>
นักเรียนชั้นมัธยมศึกษาปีที่ 6 ขึ้นปีหนึ่ง (นิสิต/นักศึกษา)<br/>
<br/>
4.ในการสมัครต้องส่งเอกสารอะไรบ้าง และต้องส่งไปที่ไหน<br/>
<br/>
เอกสารที่ต้องส่ง ประกอบไปด้วย<br/>
<br/>
ใบประวัติส่วนตัว พร้อมติดรูปนักเรียน<br/>
ใบรับรองผู้ปกครอง<br/>
ใบตอบคำถาม (เน็ตเวิร์คหรือโรบอทอย่างใดอย่างหนึ่งตามที่น้องได้สมัครอบรมไว้)<br/>
สำเนาบัตรนักเรียน<br/>
สำเนาบัตรประจำตัวประชาชน<br/>
ส่งรูปถ่ายไม่เป็นทางการขนาด 4x6 นิ้วขึ้นไป สามารถใช้ได้ทั้งภาพถ่ายเดี่ยวหรือภาพกลุ่มกับเพื่อน จำนวน 1 รูป โดยหลังรูปเขียน ชื่อ - นามสกุล, ชื่อเล่น<br/>
ส่งมาที่ สาขาวิชาวิศวกรรมคอมพิวเตอร์ หลักสูตรวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ถนน ฉลองกรุง เขตลาดกระบัง กรุงเทพมหานคร รหัสไปรษณีย์ 10520 *วงเล็บมุมซอง "สมัครค่าย CE Smart Camp #6"<br/>
ขณะนี้เราได้เพิ่มช่องทางพิเศษ ให้น้องๆสามารถแสกนแล้วส่งมาทาง Email ได้แล้วจ้า โดยสามารถส่งมาที่ cesmartcamp6@gmail.com หรือ cesmartcamp@hotmail.com จ้า<br/>
<br/>
5.ถ้ายังไม่ได้ทำบัตรประจำตัวประชาชน ต้องทำอย่างไร<br/>
<br/>
ใช้บัตรนักเรียนก็ได้จ้า<br/>
<br/>
6.ถ้าไม่มีเบอร์บ้าน ต้องทำอย่างไร<br/>
<br/>
กรอกเป็น 000000000 ก็ได้ครับ<br/>
<br/>
7.หากเกรดเฉลี่ยเทอมล่าสุดยังไม่ออก ใช้เกรดเฉลี่ยเทอมไหน<br/>
<br/>
เกรดเฉลี่ยของเทอมล่าสุดที่เกรดออกครับ ^^<br/>
<br/>
8.เดินทางอย่างไร<br/>
<br/>
ดูได้ ที่นี่ เลยจ้า<br/>
<br/>
9.หากกรอกผิด และกดยืนยันประวัติส่วนตัวไปแล้ว จะสามารถแก้ได้หรือเปล่า<br/>
<br/>
ได้ครับ โดยจะเขียนใหม่ที่ใบประวัติส่วนตัวที่พิมพ์ออกมาโดยตรง หรือติดต่อขอแก้ไขได้
        </div>
    </div>
</div>

<div class="slide" id = "slide6" data-slide="6" >
     <img  style = "position:absolute;bottom:0;width:100%;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/island.png" />
</div>
