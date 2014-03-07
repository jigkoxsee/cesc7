<?php /* @var $this Controller */ 
$model2=null;
if(!Yii::app()->user->isGuest)
    $model2=$this->loadModel(Yii::app()->user->id);//load data into Model
?>
<!DOCTYPE HTML> 
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="language" content="th" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script> 
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <style>
    @font-face {
    font-family: 'WDB_Bangna';
    src: url('<?php echo Yii::app()->request->baseUrl; ?>/css/font/WDB_Bangna.eot');
    src: url('<?php echo Yii::app()->request->baseUrl; ?>/css/font/WDB_Bangna.eot?#iefix') format('embedded-opentype'),
         url('<?php echo Yii::app()->request->baseUrl; ?>/css/font/WDB_Bangna.woff') format('woff'),
         url('<?php echo Yii::app()->request->baseUrl; ?>/css/font/WDB_Bangna.ttf') format('truetype'),
         url('<?php echo Yii::app()->request->baseUrl; ?>/css/font/WDB_Bangna.svg') format('svg');
    font-weight: normal;
    font-style: normal;
    }
    
    .navbar-fixed-top
    {
        max-height:160px;
    }
    body
    {
        font-family:"WDB_Bangna";
        background-color:#a3d4f0;
    }   

    .panel-heading a,span
    {
        font-size:1.4em;
    }

    .panel-body
    {
        font-size:1.3em;
    }
    h1,h2,h3
    {
        font-family:"WDB_Bangna" !important;
    }

    .navbar-nav>li
    {
        border-bottom:solid #f8f8f8 4px;
        font-size:1.5em;
    }
    .navbar-nav>li:hover>a 
    {
        border-bottom:solid #2980b9 4px;
        background-color:#f8f8f8;
        color:#2980b9 !important;
    }

    li.active>a
    {
        background-color:#f8f8f8 !important;
        border-bottom:solid #2980b9 4px;
        color:#2980b9 !important;
    }
    .open>a
    {
        border-bottom:solid #2980b9 4px;
    }
    .dropdown-menu
    {
        width:100%;
    }
    .dropdown-menu li
    {
        font-size:1.3em;
    }
    .dropdown-menu li:hover>a
    {
        color:#2980b9;
    }
    </style>
</head>
<body style=" padding-top: 150px; " id="testhash">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="navbar-brand" >
                    <?php echo CHtml::image("/images/logoCE.png","",$htmlOptions=array('style'=>'width:100px; height:100px;'))?>
                    <?php
                        if(!Yii::app()->user->isGuest){
                            $headers = get_headers('http://graph.facebook.com/'.Yii::app()->user->id.'/picture?width=100&height=100',1);
                            echo CHtml::image($headers['Location'],"", $htmlOptions=array('class'=>'img-thumbnail') );
                        }
                    ?></div>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <h1 style="font-size:1.8em;">
    	<strong>
	    <?php
	    	echo $this->header;

            echo "<abbr title=\"หากต้องการเปลี่ยนสาขาสามารถแจ้งได้ที่แฟนเพจจ้า\">";
	    	if(!Yii::app()->user->isGuest&&$model2!=null){
	    		$camp=$model2->camp;
		        if($camp=="Robot"){
		            echo " <small>(Robot)</small>";
		        }else if($camp=="Network"){
		            echo " <small>(Network)</small>";
		        }
	    	}
            echo "</abbr>";


	    ?>
		</strong></h1>
    <h2 style="font-size:1.6em;"><?php if(!Yii::app()->user->isGuest&&$model2!=null){
    		if($model2->filestatus==0){
    			echo "<p class=\"text-danger\">เอกสารยังไม่สมบูรณ์ &#x2716;</p>";
    			//&#x2716;
    		}else{
    			echo "<p class=\"text-success\">เอกสารยังสมบูรณ์ &#10004;</p>";
    			//<p class="text-danger">ยังไม่ได้ Upload</p>
    			//.success
    		}
    		/*
    		☐ (0x2610  in Unicode hexadecimal [HTML decimal: &#9744;]): an empty (unchecked) checkbox
			☑ (0x2611  [HTML decimal: &#9745;]): the checked version of the previous checkbox
			✓ (0x2713  [HTML decimal: &#10003;])
			✔ (0x2714  [HTML decimal: &#10004;])
    		*/

    	} ?></h2>
        <?php

        if(!Yii::app()->user->isGuest && $model2!=null){
            $this->widget('zii.widgets.CMenu',array(
                //'activeCssClass'=>'btn btn-primary',
                'items'=>array(
                    array('label'=>'หน้าแรก', 'url'=>array('/site/index')),
                    //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                    //array('label'=>'Contact', 'url'=>array('/site/contact')),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                    //array('label'=>'Regis', 'url'=>array('/user/create'), 'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'ข้อมูลส่วนตัว', 'url'=>array('/user/index'), 'visible'=>!Yii::app()->user->isGuest,),

                    array('label'=>'แก้ไขข้อมูล',  'url'=>array('/user/update', 'uid'=>$model2->username),        'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'ดาวน์โหลดเอกสาร', 'url'=>'#',                                    'visible'=>!Yii::app()->user->isGuest,'items'=>array(
                    array('label'=>'ใบสมัคร', 'url'=>array('pdf'), 'linkOptions'=>array('target'=>'_blank'),                               'visible'=>!Yii::app()->user->isGuest),
                    array('label'=>'คำถาม', 'url'=>($model2->camp=="Robot"?'/Doc/RobotQuiz.pdf':'/Doc/NetworkQuiz.pdf'),  'linkOptions'=>array('target'=>'_blank'),  'visible'=>!Yii::app()->user->isGuest),
                    //('.Yii::app()->user->name.')
                ),'itemOptions'=>array('class'=>'dropdown'), 'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown' ,'target'=>'_blank'), 'submenuOptions'=>array('class'=>'dropdown-menu')),
                    array('label'=>'Logout ',       'url'=>array('/site/logout'),                           'visible'=>!Yii::app()->user->isGuest), 
                    //('.Yii::app()->user->name.')
                ),
                'htmlOptions'=>array('class'=>'nav navbar-nav cescul'),
            ));
        }else{
            $this->widget('zii.widgets.CMenu',array(
                //'activeCssClass'=>'btn btn-primary',
                'items'=>array(
                    array('label'=>'Home', 'url'=>array('/site/index')),
                    //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                    //array('label'=>'Contact', 'url'=>array('/site/contact')),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                ),
                'htmlOptions'=>array('class'=>'nav navbar-nav'),
            ));
        }
        ?>
    </div><!-- /.navbar-collapse -->
</nav>

<div class="container" style="padding-top:80px;">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">

        <div class="panel panel-info">
        
 
            <div class="panel-heading hidden">
                                  
                    <?php if(isset($this->breadcrumbs)):?>
                        <?php
                        	$this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); 
                        ?>
                    <?php endif?>

                
            </div>

            <div class="panel-body">
                <?php echo $content; ?>
            </div>

        </div>
    </div>

</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46162880-1', 'cesmartcamp.com');
  ga('send', 'pageview');

</script>
</body>
</html>
