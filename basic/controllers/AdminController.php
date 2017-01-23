<?php

namespace app\controllers;

class AdminController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        $this->layout = 'main_admin';
        
        return $this->render('index');
    }

}
