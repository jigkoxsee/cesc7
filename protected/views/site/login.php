<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->header="Login";
$this->breadcrumbs=array(
	'Login',
);
?>

<?php
if (Yii::app()->user->hasFlash('error')) {
    echo '<div class="error">'.Yii::app()->user->getFlash('error').'</div>';
}
?>
<?php
//$this->widget('ext.eauth.EAuthWidget', array('action' => 'site/login'));
//echo CHtml::link('Login',array('site/login','service'=>'facebook'));//height="42" width="42"
?>
<div style="text-align: center">
    <a href="index.php?r=site/login&service=facebook#">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.png" alt="Smiley face" style="width:225px">
    </a>
<!--     <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1449083385318999";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-login-button" data-max-rows="2" data-show-faces="true"></div> -->
</div>

