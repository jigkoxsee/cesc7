<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . '/facebookphpsdk/src/facebook.php';
class FBSendNotice
{
    public $appId ;
    public $secret ;
    public $facebook ;
    public $user;


    public function eiei()//init()
    {
        $this->$facebook = new Facebook(array(
            'appId' => $this->$appId,
            'secret' => $this->$secret,
        ));
        $this->$user = $facebook->getUser();
    }

    public function getInfo($appId,$secret){
        if ($this->$user) {
            try {
                $user_profile = $this->$facebook->api('/me');
                return $user_profile;
            } catch (FacebookApiException $e) {
                error_log($e);
                $user = null;
                return null;
            }
        }
    }

    public function sendNotice($appId,$secret){

        $app_access_token = $appId . '|' . $secret;

        $response = $this->$facebook->api( '/'.Yii::app()->session['fbeauth']['url'].'/notifications', 'POST', array(

            'template' => 'You have received a new message.',

            'href' => 'RELATIVE URL',

            'access_token' => $app_access_token
        ) );

        //print_r($response);
    }
}


?>