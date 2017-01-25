<?php

namespace app\controllers;

use Yii;
use app\models\Sdm;
use app\models\SdmSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use dosamigos\google\maps\LatLng;
use dosamigos\google\maps\services\DirectionsWayPoint;
use dosamigos\google\maps\services\TravelMode;
use dosamigos\google\maps\overlays\PolylineOptions;
use dosamigos\google\maps\services\DirectionsRenderer;
use dosamigos\google\maps\services\DirectionsService;
use dosamigos\google\maps\overlays\InfoWindow;
use dosamigos\google\maps\overlays\Marker;
use dosamigos\google\maps\Map;
use dosamigos\google\maps\services\DirectionsRequest;
use dosamigos\google\maps\overlays\Polygon;
use dosamigos\google\maps\layers\BicyclingLayer;

/**
 * SdmController implements the CRUD actions for Sdm model.
 */
class SdmController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Sdm models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SdmSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $coord = new LatLng(['lat' => -2.245933, 'lng' => 119.481006 ]);
        $map = new Map([
            'center' => $coord,
            'zoom' => 5,
            'scrollwheel' => false,
            'mapTypeControl' => false,
            'scaleControl' => false,
            'draggable' => true,
        ]);

        $map->width = '100%';
        $map->height = 400;

        // Lets add a marker now
        $marker = new Marker([
            'position' => $coord,
            'title' => 'My Home Town',
            //'icon'=>'@web/images/icon-budget.png',
        ]);

        // Provide a shared InfoWindow to the marker
        $marker->attachInfoWindow(
            new InfoWindow([
                'content' => '<p>Sulawesi <a href="'.\yii\helpers\Url::to(['/sdm/list']).'">(Click Here)</a></p>'
            ])
        );

        // Add marker to the map
        $map->addOverlay($marker);

        // Lets add a marker now 2
        $coord2 = new LatLng(['lat' => -6.121435, 'lng' => 106.774124    ]);

        $marker = new Marker([
            'position' => $coord2,
            'title' => 'My Home Town',
            //'icon'=>'@web/images/icon-budget.png',
        ]);

        // Provide a shared InfoWindow to the marker
        $marker->attachInfoWindow(
            new InfoWindow([
                'content' => '<p>Jakarta <a href="'.\yii\helpers\Url::to(['/sdm/list']).'">(Click Here)</a></p>'
            ])
        );

        // Add marker to the map
        $map->addOverlay($marker);

        // Lets add a marker now 3
        $coord3 = new LatLng(['lat' => -8.409518, 'lng' => 	115.188919    ]);

        $marker = new Marker([
            'position' => $coord3,
            'title' => 'My Home Town',
            //'icon'=>'@web/images/icon-budget.png',
        ]);

        // Provide a shared InfoWindow to the marker
        $marker->attachInfoWindow(
            new InfoWindow([
                'content' => '<p>Bali <a href="'.\yii\helpers\Url::to(['/sdm/list']).'">(Click Here)</a></p>'
            ])
        );

        // Add marker to the map
        $map->addOverlay($marker);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'map'=>$map,
        ]);
    }

    public function actionList()
    {
        $searchModel = new SdmSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionProfile($id)
    {
       return $this->render('profile', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Displays a single Sdm model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Sdm model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sdm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Sdm model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Sdm model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sdm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sdm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sdm::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
