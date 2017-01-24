<?php

namespace app\controllers;

use Yii;
use app\models\Lembaga;
use app\models\LembagaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class UserManajemenController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
       
        $searchModel = new LembagaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
          $this->layout = 'main_admin';
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

}
