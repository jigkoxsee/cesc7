
	<div id="move">
        <ul class = "navigation desktop">
            <li data-slide="1">หน้าหลัก</li>
            <li data-slide="2">เกี่ยวกับค่าย</li>
            <li data-slide="3">รายละเอียด</li>
            <li data-slide="4">แผนที่&ติดต่อ </li>
            <li data-slide="5">คำถาม </li>
            <li data-slide="6">รูปกิจกรรม </li>
			  <li data-slide="7">ผู้สนับสนุน</li>
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
				<a href="#" class = "btn" data-slide="7">ผู้สนับสนุน</a>
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
			<div class="slidePage" id="slide1" data-slide="1" >
				<img  class = "floating img-responsive" id = "marioIsland" src="<?php echo Yii::app()->request->baseUrl; ?>/images/marioIsland.png" data-stellar-ratio="3" />
				<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1" />
				<img id = "logo"  class = "img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" data-stellar-ratio="4" />
				<div  style = "font-size:30px;position:absolute;left:60%;top:30%;text-shadow: 2px 2px #7f8c8d;" data-stellar-ratio="4" >
				    ค่ายวันที่ 22 -  27 เมษายน 2557<br/> 
					<b>เปิดรับสมัครแล้ววันนี้ มาสมัครกันเลย</b><br/>
					   
				</div>
				<img id = "cloudFront" class = "img-responsive" style="position:absolute; right:0 !important; width:40% !important;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/bigwhitecloud.png" data-stellar-ratio="2" />
			</div>
			
			<div class="slidePage" id="slide2" data-slide="2">
				<div style = "position:absolute;top:1%;">
					<div  id = "text2" class="col-sm-8 col-sm-offset-3 blockText" >
					<br/>
					<center><b style = "font-size:40px;" >CE Smart Camp 7</b></center>
					<center>open up vision, improve network and robot skills.</center>
						<div class = "col-sm-6" ><br/>
						<center><img class = "img-responsive" style="width:40%;"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/questionLogo.png" /></center><br />
						<center><b> ค่าย CE SMART CAMP คืออะไร  ?</b></center>
&nbsp &nbsp ค่าย CE Smart Camp เป็นค่ายที่เปิดโอกาสให้น้องๆระดับชั้นมัธยมศึกษาตอนปลาย ได้สัมผัสบรรยากาศของสาขาวิศวกรรมคอมพิวเตอร์และร่วมเรียนรู้เทคโนโลยีใหม่ๆที่น่าสนใจ ทั้งด้านเน็ตเวิร์ก และโรบอท พร้อมกิจกรรมสนุกสนานแบบเต็มอิ่มไปเลย
						</div>
						<div class = "col-sm-6" style = "border-left:4px solid;" ><br/>
						<center><img class = "img-responsive" style="width:40%;"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/robotNetworkLogo.png" /></center><br />
						<center><b>ภาพรวมของค่าย  CE Smart Camp #7</b></center>
&nbsp &nbsp ค่าย CE Smart Camp #7 จัดขึ้นในวันที่ 22-27 เมษายน 2557 (พักค้างแรม) โดยรับน้อง ม.ปลายจำนวน 80 คนจากทั่วประเทศ แบ่งเป็นสาขาโรบอท 40 คน และสาขาเน็ตเวิร์ก 40  ซึ่งน้องๆสามารถเลือกอบรมสาขาใดก็ได้ การอบรมเน้นทั้งทฤษฎี และปฏิบัติ กับอุปกรณ์จริง
						</div>
						
						<br/><center>
						<b class="btn btn-primary btn-lg network"  style="margin-top:5%;margin-bottom:3%;">สาขา Network</b>
							<b class="btn btn-danger btn-lg robot"  style="margin-top:5%;margin-bottom:3%;margin-left:5%;">สาขา Robot</b></center>
					
					</div>
					<div id = "network" class="col-sm-8 col-sm-offset-3 blockText" >
					    <center><img class = "img-responsive" style="width:40%;"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/networkLogo.png" /></center>
					    <br/>
						ในโลกที่เราใช้คอมพิวเตอร์ในการสื่อสารกันอยู่ตลอดเวลา น้องๆเคยสงสัยไหมว่า ระบบเครือข่ายคอมพิวเตอร์นี่มันทำงานยังไงกันนะ?
ถ้าอยากรู้ล่ะก็ เชิญมาหาคำตอบกันในค่าย Network เลย
ภายในค่าย น้องๆจะได้รับความรู้ทางทฤษฎีพื้นฐานเกี่ยวกับระบบเครือข่ายคอมพิวเตอร์เบื้องต้น นอกจากนั้นแล้ว น้องๆยังจะได้เรียนรู้การทำงานและการตั้งค่าอุปกรณ์ที่ใช้ในระบบเครือข่าย ผ่านการปฏิบัติจริงโดยใช้ชุดเครื่องมือที่ทันสมัยจาก Cisco
						<br/><center><li class="btn btn-primary btn-lg backNet" >กลับ<li></center><br/>
					</div>
					<div id = "robot"  class="col-sm-8 col-sm-offset-3 blockText" >
					    <center><img class = "img-responsive" style="width:40%;"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/robotLogo.png" /></center>
						<br/>
						ในส่วนของการอบรมการเขียนโปรแกรมควบคุมหุ่นยนต์(Robot) น้องๆ จะได้เรียนรู้เกี่ยวกับกลไกการทำงานของหุ่นยนต์ แนวคิดการแก้ไขปัญหาอย่างมีระบบ และการเขียนโปรแกรมเพื่อควมคุมหุ่นยนต์เบื้องต้น ด้วยกิจกรรมสนุกๆ จากพี่ๆ ทั้งในรูปแบบทฤษฏี และปฏิบัติ น้องๆจะได้สัมผัสและทดลองจริงกับอุปกรณ์ชั้นนำ อาทิเช่น lego mindstorms, Robobuilder ฯลฯ
						<br/><center><li class="btn btn-danger btn-lg backRo" >กลับ</li></center><br/>
					</div>
			  </div>
				<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1"/>
			</div>
		
			<div class="slidePage" id="slide3" data-slide="3">
				<div class = "col-sm-8 col-sm-offset-2" >	
						<div id = "text01" style = "position:absolute;left:20%;top:10% !important;" > <b> วันสมัครค่าย </b></div>
						<div id = "text02" style = "position:absolute;left:50%;top:10% !important;" > <b> ประกาศผลค่าย </b></div>
						<div id = "text03" style = "position:absolute;left:77%;top:10% !important"; > <b> ช่วงเวลาค่าย </b></div>
						<br/><br/>
						<div>
						<img  id="pacman" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/pacman1.png" />
						<img  id="dot1" style="left:30%;" class = "dot img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/dot.png" />
						
						<img  id="dot2" style="left:60%;" class = "dot img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/dot.png" />
						
						<img  id="dot3" style="left:90%;	" class = "dot img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/dot.png" />
						</div>
				</div>
				<div id = "pointText" class = "pulse point" style ="position:absolute;left:40%;top:30% !important;" >
				     <center>
				     <img id = "point" class = "img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/point.png" />
					 
					    <b style = "text-size:40px;"  >กดที่ปุ่มสีขาวด้านบนเพื่อทำดูรายละเอียดข้อมูลนะจ้ะ</b>
				     </center>
				</div>
				<div id = "lean_overlay">
					<div class = "blockText col-sm-8 col-sm-offset-3">
						<center><b style= "font-size:2.5Vmax;" >รายละเอียดการลงทะเบียน 
							CE Smart Camp ครั้งที่ 7 </b><br/></center><br/>
							<div class="row">
								<div class = "col-sm-2">
									<center><img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/step-1.png" height="125px" width="125px" /></center>
								</div>
								<div class = "col-sm-10">
									1. คุณสมบัติของผู้สมัคร เป็นนักเรียนระดับชั้นมัธยมศึกษาตอนปลาย (ระดับ ม.3 ขึ้น ม.4 ถึง ม.5 ขึ้น ม.6) หรือเทียบเท่า ที่สนใจอบรมเกี่ยวกับ Robot หรือ Network<br/>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class = "col-sm-2">
									<center><img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/step-2.png" height="125px" width="125px" /></center>
								</div>
								<div class = "col-sm-10">
									2. คลิก"เข้าสู่ระบบ"ที่แถบเมนูด้านข้าง หลังจากนั้นคลิก"connect with facebook" หลังจากเชื่อมต่อผ่าน facebook แล้ว กรอกข้อมูลเบื้องต้นและทำการบันทึก โดยคลิกปุ่ม "Create"<br/>
									<div class="alert alert-danger"><small>ก่อนกด Create อย่าลืมเลือก สาขาที่อบรมให้ถูกต้องด้วยนะ ( แต่ถ้าหากน้องๆต้องแก้ไข้สาขาที่สมัคร แจ้งได้ที่ Fanpage เลยจ้า)</small></div>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class = "col-sm-2">
									<center><img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/step-7.png" height="125px" width="125px" /></center>
								</div>
								<div class = "col-sm-10">
									3.  เข้าสู่ระบบเพื่อกรอกข้อมูลเพิ่มเติมและโหลดไฟล์เอกสาร ได้แก่ ใบขออนุญาตผู้ปกครอง คำถามคัดเลือก(ประกอบด้วย คำถามคัดเลือกทั่วไป(General qiuz) และคำถามคัดเลือกเฉพาะสาขาที่อบรม(Robot quiz หรือ Network quiz)<br/>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class = "col-sm-2">
									<center><img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/step-3.png" height="125px" width="125px" /></center>
								</div>
								<div class = "col-sm-10">
									4. สถานะการสมัครจะสมบูรณ์เมื่อน้องกรอกข้อมูลส่วนตัวครบถ้วน และส่งเอกสารต่างๆ มาด้วยช่องทางต่อไปนี้<br/> 
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class = "col-sm-2">
									<center><img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/step-5.png" height="125px" width="125px" /></center>
								</div>
								<div class = "col-sm-10">
									5. กรณีส่งเอกสารทางเว็บ ให้สแกนหรือถ่ายรูปเอกสารและอัพโหลดขึ้นเว็บ(ไฟล์ภาพที่ไม่ชัดมีผลต่อการคัดเลือก) ได้แก่ ใบขออนุญาตผู้ปกครอง, สำเนาบัตรนักเรียนหรือบัตรประชาชน, รูปถ่ายไม่เกิน 6 เดือนแต่งการชุดนักเรียน, รูปถ่ายแบบไม่เป็นทางการของน้องๆ และคำถามคัดเลือกทุกหน้า (ยกเว้นใบสมัคร)<br/>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class = "col-sm-2">
									<center><img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/step-4.png" height="125px" width="125px" /></center>
								</div>
								<div class = "col-sm-10">
									6. กรณีส่งเอกสารทางไปรษณีย์ รวมเอกสารทั้งหมด(รวมถึงใบสมัคร) ส่งมาที่ <div class = "well" >ภาควิชาวิศวกรรมคอมพิวเตอร์ (CE SMART Camp) คณะ วิศวกรรมศาสตร์ สจล. เลขที่ 1 ซอยฉลองกรุง 1 แขวง ลาดกระบัง, เขต ลาดกระบัง กรุงเทพ 10520</div><br/>
								</div>
							</div>
							<hr/>
							<div class="row">
								<div class = "col-sm-2">
									<center><img  src="<?php echo Yii::app()->request->baseUrl; ?>/images/step-6.png" height="125px" width="125px" /></center>
								</div>
								<div class = "col-sm-10">
									7. หลังจากที่พี่ๆได้รับเอกสารจากน้องครบถ้วน หน้าโปรไฟล์ของน้องๆ จะเปลี่ยนสถานะจาก "ยังไม่ได้รับเอกสาร" เป็น "ได้รับเอกสารแล้ว"
								</div>
							</div>
							<br/>
						</div>
					</div>
				<!-- MODAL END -->
				<div id = "dot1Text" class = "dotText col-sm-8 col-sm-offset-3 blockText" style ="top:20% !important;" >
				    <!-- MODAL -->
				    
					<center><b style= "font-size:2.5Vmax;" >เปิดลงทะเบียนวันที่ 2 มีนาคม 2557 </b><br />
					รายละเอียดการลงทะเบียน และ เงื่อนไขของการลงทะเบียนน้องๆ สามารถกดปุ่มรายละเอียดเพิ่มเติมด้านล่างเพื่อแสดงรายละเอียดการสมัครได้<br />
					<button class = "btn btn-warning" id = "trigger_id" href="#" style= "font-size:2Vmax;box-shadow: 2px 2px #7f8c8d;">
					 รายละเอียดเพิ่มเติม
					</button><br />
	                	
					<center> <b>ปิดรับลงทะเบียนวันที่ : 1 เมษายน 2557 เวลา : 18:00 น.</b></center><br/>
					<u><b>ติดต่อ</b><br/></u>
					<b>พี่เตย : 0885838135</b></br>
					<b>พี่โก้ : 0876746379</b></br>
					<b>พี่ปอย : 0874023077</b><br/>
					
					
				</div>
				
				<div id = "dot2Text" class = "dotText col-sm-8 col-sm-offset-3 blockText" style ="top:20% !important;" >
					<center><b style= "font-size:2.5Vmax;"  > วันที่ : 10 เมษายน 2557 <br/>
					ประกาศผล CE Smart Camp ครั้งที่ 7<br/>
					</b></center>
					
				</div>
				<div id = "dot3Text" class = "dotText col-sm-8 col-sm-offset-3 blockText" style ="top:20% !important;" >
					<center>
						<b style= "font-size:2.5Vmax;"  >
						วันที่ : 22 - 27 เมษายน 2557 <br/>
						<!-- ช่วงเวลากิจกรรมค่าย -->
						</b><br />
						<b>ปิดค่ายวันที่ 27 เมษายน 2557 เวลา 12.00 น.</b>
					</center>
				</div>
				
				<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1" />
			</div>
			
			<div class="slidePage" id="slide4" data-slide="4">
			
			    <div  class = "col-sm-10 col-sm-offset-2 col-sm-12" >
					<div id = "map" >
						<div id = "wrapperMap">
							<div class = "col-sm-6">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d484.47783237117596!2d100.77546726543812!3d13.729184241535625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d664a24401d37%3A0xb66b4c93da07e67a!2z4LiV4Li24LiBIEVDQw!5e0!3m2!1sen!2sth!4v1393696840791" width="70%;" height="450" frameborder="0" style="border:0"  scrolling="no" ></iframe>
								</div>
							<div class = "col-sm-6" >
								<br/><br/><br/><br/><br/>
								<h1 style="font-size:3.5Vmax;text-shadow: 5px 5px 5px #888888;">Map and Contact</h1>								 
								<iframe  width = "70%" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fcesmartcamp&amp;width&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=529715883763582" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:258px;" allowTransparency="true"></iframe>
							</div>
						</div>
						<img id = "comprass" class = "img-responsive" src ="<?php echo Yii::app()->request->baseUrl; ?>/images/comprass.png" />
					</div>
					<img id = "openBox" class = "img-responsive" src ="<?php echo Yii::app()->request->baseUrl; ?>/images/bg3box.png"  data-stellar-ratio="3" />
				</div>
				<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1" />
			</div>
	
			<div class="slidePage" id="slide5" data-slide="5">
		   <div  class = "col-sm-8 col-sm-offset-2 col-sm-12" data-stellar-ratio = "2">	
			<div id = "kirbyDoor">
			   <div id = "wrapperKirby" >
				<div id="question" style = "font-size:3Vmin; text-shadow: 5px 5px 5px #888888;">
					<center><b style = "font-size:2.5Vmax;">คำถามที่มักถามบ่อย</b></center><br/>
					      
							<center>วัน/เวลา/สถานที่ดำเนินกิจกรรม<br/></center>
							<br/>
							ระยะเวลาในการเข้าค่ายตั้งแต่วันที่ 22-27 เมษายน 2557 เป็นค่ายพักค้างแรม (ไม่อนุญาตให้เดินทางไปกลับ) สถานที่ดำเนินกิจกรรมทั้งหมดจัดภายในคณะวิศวกรรมศาสตร์ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง<br/>
							<hr>
							<center>ถ้ายังไม่ได้ทำบัตรประจำตัวประชาชน ต้องทำอย่างไร<br/></center>
							<br/>
							ใช้บัตรนักเรียนก็ได้จ้า<br/>
						    <hr>
							<center>หากเกรดเฉลี่ยเทอมล่าสุดยังไม่ออก ใช้เกรดเฉลี่ยเทอมไหน<br/></center>
							<br/>
							เกรดเฉลี่ยของเทอมล่าสุดที่เกรดออกครับ ^^<br/>
							<hr>
							<center>หากกรอกผิด และกดยืนยันประวัติส่วนตัวไปแล้ว จะสามารถแก้ได้หรือเปล่า<br/></center>
							<br/>
							ได้ครับ โดยจะเขียนใหม่ผ่านระบบบนเว็บไซต์ได้เลยจ้ะ<br/>
							<hr>
				</div>
			  </div>
			</div>
		   </div>
				<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1" />
				
			</div>
			
			<div class="slidePage" id="slide6" data-slide="6" >
				<div class = "col-sm-6 col-sm-offset-2 blockText" style ="height: auto !important;min-height:300px;margin-top: 50px;">

				<center>
					<b style = "font-size:2.5Vmax;">รูปกิจกรรม</b><br/>
					<div class="masonry">
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic11.png"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic12.png"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic1.png"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic2.png"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic3.png"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic4.png"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic5.png"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic6.png"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic7.png"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic8.png"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic9.png"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic13.jpg"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic14.jpg"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic15.jpg"/></div>
							<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide3/pic16.jpg"/></div>
					</div>
				</center>
				</div>
				
			
			<img id = "wormIsland" class = "img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/wormIsland.png" data-stellar-ratio = "3" />	
			<img  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1" />
			</div>	
			
			<div class="slidePage" id="slide7" data-slide="7" style ="height: 600px !important;">
			  <div class = "col-sm-8 col-sm-offset-2 blockText" style ="height: auto !important;min-height:300px;margin-top: 50px;">
			   <center>
			    <b style = "font-size:2.5Vmax;"> ขอขอบคุณ</b><br/>
				    <!-- <div id="spon" >	 -->
							<div class="masonry">
								<div class="item w4"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon5.png"/></div>
								<div class="item w4"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon7.png"/></div>
								<div class="item w4"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon14.png"/></div>
								<div class="item w4"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon13.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon4.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon16.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon8.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon3.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon17.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon1.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon6.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon10.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon11.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon15.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon2.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon18.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon12.png"/></div>
								<div class="item w7"><img class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/spon9.png"/></div>
							</div>
					<!-- </div> -->
				</center>
			  </div>
			 <img  class = "img-responsive"  id="cloudBack" class = "img-responsive"  src="<?php echo Yii::app()->request->baseUrl; ?>/images/cloudBack.png" data-stellar-ratio="1" />
			</div>

	   <div style="
				position: absolute;
				width: 100%;
				height:150px;
				background-repeat:repeat-x;
				background-image:url('<?php echo Yii::app()->request->baseUrl; ?>/images/floor1.png');">
		</div>
	   </div>
	</div>

	
    <div id="preloader" >
    	<div id="status">
			<b style = "font-size:2.5Vmax;">WELCOME TO CE SMART CAMP #7 </b><br/>
			I'M  LOADING...<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/ajax-loader.gif"/>
		</div>
    </div>