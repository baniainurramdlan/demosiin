<?php

namespace app\controllers;

use Yii;
use app\models\Sdm;
use app\models\SdmSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class AdminController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
              'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['index'],
                'rules' => [

                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],

                ],

            ],
        ];
    }
    
    public function actionIndex()
    {
        $this->layout = 'main_admin';
        
        return $this->render('index');
    }

    public function actionTimeline()
    {
        $this->layout = 'main_admin';
        
        return $this->render('timeline');
    }

    public function actionSdm()
    {

    	$searchModel = new SdmSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $this->layout = 'main_admin';
        return $this->render('sdm', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
               
    }

    public function actionCreateSdm()
    {
        $model = new Sdm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view-sdm', 'id' => $model->id]);
        } else {

        	$this->layout = 'main_admin';
            return $this->render('create-sdm', [
                'model' => $model,
            ]);
        }
    }

    public function actionView($id)
    {
    	$this->layout = 'main_admin';
        return $this->render('view-sdm', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view-sdm', 'id' => $model->id]);
        } else {
            return $this->render('update-sdm', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }



    


}
