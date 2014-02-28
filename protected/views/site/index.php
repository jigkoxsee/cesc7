
    <div id="move">
        <ul class = "navigation desktop">
            <li data-slide="1">หน้าหลัก</li>
            <li data-slide="2">เกี่ยวกับค่าย</li>
            <li data-slide="3">รายละเอียด</li>
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
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><b>CE SMART CAMP #7</b></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mobile" id="bar">
            <ul id = "nav" class="nav navbar-nav">
                <a href="#" class = "btn" data-slide="1">หน้าหลัก</a>
                <a href="#" class = "btn" data-slide="2">เกี่ยวกับค่าย</a>
                <a href="#" class = "btn" data-slide="3">รายละเอียด</a>
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
	<div id = "wrapper">
		<div id = "scroller" data-stellar-background-ratio="0.5" >
			<div class="slide" id="slide1" data-slide="1" >
				<img  class = "floating img-responsive" id = "marioIsland" src="<?php echo Yii::app()->request->baseUrl; ?>/images/marioIsland.png" data-stellar-ratio="3" />
				<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1" />
				<img id = "logo" class = "img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" data-stellar-ratio="2" />
				<img id = "cloudFront" class = "img-responsive" style="right:0px !important; width:40% !important;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/bigwhitecloud.png" data-stellar-ratio="4" />
			</div>
			
			<div class="slide" id="slide2" data-slide="2">
				<div style = "position:absolute;top:20%;">
					<div  id = "text2" class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 blockText" >
					<br/>
					<center>What is CE Smart Camp ?</center> <br/>
						Welcome to CE Smart Camp 7
						open up vision, improve network and robot skills.<br/>
						กลับมาอีกครั้งกับความรู้และความสนุกสนานกับ CE Smart Camp #7 จากสาขาวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ที่จัดขึ้นสำหรับน้องๆในระดับชั้นมัธยมศึกษาตอนปลาย ได้มีโอกาสสัมผัสถึงบรรยากาศและกิจกรรมของสาขาวิศวกรรมคอมพิวเตอร์อย่างใกล้ชิด และร่วมเรียนรู้เทคโนโลยีใหม่ๆที่น่าสนใจ ทั้งด้านเน็ตเวิร์ก และโรบอท พร้อมกับสนุกสนานแบบเต็มอิ่มรับรองได้ว่างานนี้สนุกสุดยอดไปเลย!
						รายละเอียดโครงการ โครงการ CE Smart Camp #7 ในครั้งนี้จัดขึ้นระหว่างวันที่ #-# เมษายน 2556 (พักค้างแรม) รับเข้าร่วมโครงการจำนวน 80 คน โดยแบ่งเป็นการอบรม 2 ส่วน ส่วนละ 40 คน โดยเน้นทั้งทฤษฎี และได้ปฏิบัติกับอุปกรณ์จริง ซึ่งน้องๆสามารถเลือกอบรมได้ดังนี้ <br/>
						<br/><center><b class="btn btn-primary btn-lg network"  style="margin-bottom:3%;">สาย Network</b>
							<b class="btn btn-danger btn-lg robot"  style="margin-bottom:3%;margin-left:5%;">สาย Robot</b></center><br/>
					</div>
					<div id = "network" class="col-md-8 col-md-offset-2 blockText" >
					    <br/>
						ในโลกที่เราใช้คอมพิวเตอร์ในการสื่อสารกันอยู่ตลอดเวลา น้องๆเคยสงสัยไหมว่า ระบบเครือข่ายคอมพิวเตอร์นี่มันทำงานยังไงกันนะ?
ถ้าอยากรู้ล่ะก็ เชิญมาหาคำตอบกันในค่าย Network เลย
ภายในค่าย น้องๆจะได้รับความรู้ทางทฤษฎีพื้นฐานเกี่ยวกับระบบเครือข่ายคอมพิวเตอร์เบื้องต้น นอกจากนั้นแล้ว น้องๆยังจะได้เรียนรู้การทำงานและการตั้งค่าอุปกรณ์ที่ใช้ในระบบเครือข่าย ผ่านการปฏิบัติจริงโดยใช้ชุดเครื่องมือที่ทันสมัยจาก Cisco
						<br/><center><li class="btn btn-primary btn-lg backNet" >กลับ<li></center><br/>
					</div>
					<div id = "robot"  class="col-md-8 col-md-offset-2 blockText" >
						<br/>
						ในส่วนของการอบรมการเขียนโปรแกรมควบคุมหุ่นยนต์(Robot) น้องๆ จะได้เรียนรู้เกี่ยวกับกลไกการทำงานของหุ่นยนต์ แนวคิดการแก้ไขปัญหาอย่างมีระบบ และการเขียนโปรแกรมเพื่อควมคุมหุ่นยนต์เบื้องต้น ด้วยกิจกรรมสนุกๆ จากพี่ๆ ทั้งในรูปแบบทฤษฏี และปฏิบัติ น้องๆจะได้สัมผัสและทดลองจริงกับอุปกรณ์ชั้นนำ อาทิเช่น lego mindstorms, Robobuilder ฯลฯ
						<br/><center><li class="btn btn-danger btn-lg backRo" >กลับ</li></center><br/>
					</div>
			  </div>
				<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1"/>
			</div>
		
			<div class="slide" id="slide3" data-slide="3">
				<div class = "col-md-8 col-md-offset-2" >	
						<img  id="pacman" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/pacman1.png" />
						<img  id="dot1" style="left:30%;" class = "dot img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/dot.png" />
						<div style = "position:absolute;left:25%;top:10% !important;" > <b> วันสมัครค่าย </b></div>
						<img  id="dot2" style="left:60%;" class = "dot img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/dot.png" />
						<div style = "position:absolute;left:55%;top:10% !important;" > <b> ประกาศผลค่าย </b></div>
						<img  id="dot3" style="left:90%;" class = "dot img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/dot.png" />
						<div style = "position:absolute;left:85%;top:10% !important"; > <b> ช่วงเวลาค่าย </b></div>
				</div>
				<div id = "pointText" class = "pulse point" style ="position:absolute;left:40%;top:20% !important;" >
				     <center>
				     <img id = "point" class = "img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/point.png" />
					 
					    <b style = "size:40px;"  >กดที่ปุ่มสีขาวด้านบนเพื่อทำดูรายละเอียดข้อมูลนะจ้ะ</b>
				     </center>
				</div>
				<div id = "dot1Text" class = "dotText col-md-8 col-md-offset-3 blockText" style ="top:20% !important;" >
					<center><b>1 มีนาคม 2557<br />
					เปิดลงทะเบียน CE Smart Camp ครั้งที่ 7 <br/>
					 คุณสมบัติของผู้สมัคร</b><br/>

							เป็นผู้มีความสนใจด้าน Network หรือ Robot และกำลังศึกษาอยู่ในชั้นมัธยมศึกษาตอนปลาย<br/>
							นักเรียนชั้นมัธยมศึกษาปีที่ 3 ขึ้นชั้นมัธยมศึกษาปีที่ 4<br/>
							นักเรียนชั้นมัธยมศึกษาปีที่ 4 ขึ้นชั้นมัธยมศึกษาปีที่ 5<br/>
							นักเรียนชั้นมัธยมศึกษาปีที่ 5 ขึ้นชั้นมัธยมศึกษาปีที่ 6<br/>
							นักเรียนชั้นมัธยมศึกษาปีที่ 6 ขึ้นปีหนึ่ง (นิสิต/นักศึกษา)<br/>
							เอกสารที่ต้องส่ง ประกอบไปด้วย<br/>
							ใบประวัติส่วนตัว พร้อมติดรูปนักเรียน<br/>
							ใบรับรองผู้ปกครอง<br/>
							ใบตอบคำถาม (เน็ตเวิร์คหรือโรบอทอย่างใดอย่างหนึ่งตามที่น้องได้สมัครอบรมไว้)<br/>
							สำเนาบัตรนักเรียน<br/>
							สำเนาบัตรประจำตัวประชาชน<br/>
							ส่งรูปถ่ายไม่เป็นทางการขนาด 4x6 นิ้วขึ้นไป สามารถใช้ได้ทั้งภาพถ่ายเดี่ยวหรือภาพกลุ่มกับเพื่อน จำนวน 1 รูป โดยหลังรูปเขียน ชื่อ - นามสกุล, ชื่อเล่น<br/>
							ส่งมาที่ สาขาวิชาวิศวกรรมคอมพิวเตอร์ หลักสูตรวิศวกรรมคอมพิวเตอร์ คณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง ถนน ฉลองกรุง เขตลาดกระบัง กรุงเทพมหานคร รหัสไปรษณีย์ 10520 *วงเล็บมุมซอง "สมัครค่าย CE Smart Camp #6"<br/>
							ขณะนี้เราได้เพิ่มช่องทางพิเศษ ให้น้องๆสามารถแสกนแล้วส่งมาทาง Email ได้แล้วจ้า โดยสามารถส่งมาที่ cesmartcamp6@gmail.com หรือ cesmartcamp@hotmail.com จ้า<br/>
							<br/></center>
							<center> <b>ปิดรับลงทะเบียนวันที่ :  เวลา : </b></center>
				</div>
				<div id = "dot2Text" class = "dotText col-md-8 col-md-offset-3 blockText" style ="top:30% !important;" >
					<center><b> วันที่ : 10 เมษายน 2557 <br/>
					ประกาศผล CE Smart Camp ครั้งที่ 7<br/>
					</b></center>
					
				</div>
				<div id = "dot3Text" class = "dotText col-md-8 col-md-offset-3 blockText" style ="top:30% !important;" >
					<center>
						<b>
						วันที่ : 22 - 26 เมษายน 2557 <br/>
						ช่วงเวลากิจกรรมค่าย
						</b><br />
						<b>ปิดค่ายวันที่ 26 เมษายน 2557 </b>
					</center>
				</div>
				
				<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1" />
			</div>
			
			<div class="slide" id="slide4" data-slide="4">
			    <div  class = "col-md-10 col-md-offset-2 col-sm-12" data-stellar-ratio = "2">
					<div id = "map" >
						<div id = "wrapperMap">
							<div class = "col-md-6">
								<iframe style="embed{max-width: 100%;};border:2px solid #C9A865;
border-radius:25px" width = "85%" height="480" frameborder="0" scrolling="no"  src="https://maps.google.com/maps?saddr=2nd+State+Expy%2FSi+Rat+Suburban+Network+Expy&amp;daddr=13.7317558,100.767793+to:Unknown+road&amp;hl=en&amp;sll=13.730297,100.659657&amp;sspn=0.069704,0.132093&amp;geocode=FY-y0QAdzI__BQ%3BFauH0QAdMZgBBinh8kxDTmYdMTGwwyMfsgABEw%3BFQKI0QAd5LMBBg&amp;mra=mrv&amp;via=1&amp;t=m&amp;ie=UTF8&amp;ll=13.728046,100.718021&amp;spn=0.139409,0.264187&amp;output=embed"></iframe>
							</div>
							<div class = "col-md-6" >
								<br/><br/><br/><br/><br/><br/>
								<h1 style="font-size:50px;">Map and Contact</h1>								 
								<iframe  width = "70%" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fcesmartcamp&amp;width&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=529715883763582" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:258px;" allowTransparency="true"></iframe>
							</div>
						</div>
						<img id = "comprass" class = "img-responsive" src ="<?php echo Yii::app()->request->baseUrl; ?>/images/comprass.png" />
					</div>
					<img id = "openBox" class = "img-responsive" src ="<?php echo Yii::app()->request->baseUrl; ?>/images/bg3box.png"  data-stellar-ratio="3" />
				</div>
				<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1" />
				
				
			</div>
	
			<div class="slide" id="slide5" data-slide="5">
		   <div  class = "col-md-8 col-md-offset-2 col-sm-12" data-stellar-ratio = "2">	
			<div id = "kirbyDoor">
			   <div id = "wrapperKirby" >
				<div id="question">
					<center><b>คำถามที่มักถามบ่อย</b></center><br/>
							1.CE Smart Camp คืออะไร

							คือค่ายที่จัดขึ้นโดยพี่ๆนักศึกษาสาขาวิศวกรรมคอมพิวเตอร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง มีการอบรมโดยจะแบ่งผู้เข้าอบรมเป็น 2 กลุ่ม คือ กลุ่ม Robot และ Network ในการอบรมจะมีทั้งการศึกษาจากทฤษฎีและปฏิบัติกับอุปกรณ์จริง<br/>
							<br/>
							2.วัน/เวลา/สถานที่ดำเนินกิจกรรม<br/>
							<br/>
							ระยะเวลาในการเข้าค่ายตั้งแต่วันที่ 1-6 เมษายน 2556 เป็นค่ายพักค้างแรม (ไม่อนุญาติให้เดินทางไปกลับ) สถานที่ดำเนินกิจกรรมทั้งหมดจัดภายในคณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง<br/>
							
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
		   </div>
				<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1" />
				
			</div>
			
			<div class="slide" id="slide6" data-slide="6">
			<div class="bs-example">
			  <div class = "col-md-6 col-md-offset-1" >
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style = "height:400px !important;" >
				  <ol class="carousel-indicators" style = "position:absolute !important;" >
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
					<div class="item active">
					  <img data-src="http://placehold.it/350x400" alt="First slide">
					</div>
					<div class="item">
					  <img data-src="http://placehold.it/350x400" alt="Second slide">
					</div>
					<div class="item">
					  <img data-src="http://placehold.it/350x400" alt="Third slide">
					</div>
				  </div>
				  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				  </a>
				</div>
			  </div>
			<img id = "wormIsland" class = "img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/wormIsland.png" data-stellar-ratio = "3" />	
			<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1" />
			</div>
			
		</div>	
	</div>