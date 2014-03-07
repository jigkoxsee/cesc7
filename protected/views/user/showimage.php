<?php
    echo $filename;
    $path =  Yii::getPathOfAlias('application.uploads'). '/';
    if (file_exists($path. $filename))
    {
        $file=@file_get_contents($path. $filename);
        if($file)
        {
            Yii::app()->request->sendFile($filename,$file);
        }else{
            throw new CHttpException(403,'Forbidden.');
        }
    } else {
        echo "File not found!";
    }

?>