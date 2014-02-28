<?php /* @var $this Controller */ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="language" content="th" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset-min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/animations.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styleEx.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bjqs.css">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.stellar.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('body').fadeIn();
            $('a').click(function (e) {
                window.goto = $(this).attr("href");
                $('body').fadeOut('fast', function () {
                    document.location.href = window.goto;
                });
                e.preventDefault();
            });
        });
    </script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="navbar-brand" >CESC#7</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php
        $this->widget('zii.widgets.CMenu',array(
            //'activeCssClass'=>'btn btn-primary',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                //array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                //array('label'=>'Regis', 'url'=>array('/user/create'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Profile', 'url'=>array('/user/index'), 'visible'=>!Yii::app()->user->isGuest,),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
            'htmlOptions'=>array('class'=>'nav navbar-nav'),
        ));
        ?>
    </div><!-- /.navbar-collapse -->
</nav>
<div class="container">
    <div class="col-md-10">

        <div class="panel panel-info">

            <div class="panel-heading">
                <h1><?php echo $this->header; ?></h1>
                <?php if(isset($this->breadcrumbs)):?>
                    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links'=>$this->breadcrumbs,)); ?>
                <?php endif?>
            </div>

            <div class="panel-body">
                <?php echo $content; ?>
            </div>

        </div>
    </div>

    <div class="col-md-2">
        <div class="panel panel-info <?php if(!$this->menu) echo "hidden";?>">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>$this->menu,
                    'htmlOptions'=>array('class'=>'panel-body'),
                ));
                ?>
        </div>
    </div>
</div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46162880-1', 'kmi.tl');
    ga('send', 'pageview');

</script>
</body>
</html>