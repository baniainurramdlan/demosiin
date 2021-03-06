<?php

namespace app\controllers;

use Yii;
use app\models\Lembaga;
use app\models\LembagaSearch;
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
 * LembagaController implements the CRUD actions for Lembaga model.
 */
class LembagaController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all Lembaga models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new LembagaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $coord = new LatLng(['lat' => -2.245933, 'lng' => 119.481006]);
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
       $coord1 = new LatLng(['lat' => -1.609972,  'lng' => 103.607254]);
        
        $marker = new Marker([
            'position' => $coord1,
            'title' => 'My Home Town',
                //'icon'=>'@web/images/icon-budget.png',
        ]);

        // Provide a shared InfoWindow to the marker
        $marker->attachInfoWindow(
                new InfoWindow([
            'content' => '<p>Jambi <a href="'.\yii\helpers\Url::to(['/lembaga/list', 'id'=>3]).'">(Click Here)</a></p>'
                ])
        );

        // Add marker to the map
        $map->addOverlay($marker);

        // Lets add a marker now 2
        $coord2 = new LatLng(['lat' => -6.914744,  'lng' =>107.609810]);

        $marker = new Marker([
            'position' => $coord2,
            'title' => 'My Home Town',
                //'icon'=>'@web/images/icon-budget.png',
        ]);

        // Provide a shared InfoWindow to the marker
        $marker->attachInfoWindow(
                new InfoWindow([
            'content' => '<p>Bandung <a href="'.\yii\helpers\Url::to(['/lembaga/list', 'id'=>3]).'">(Click Here)</a></p>'
                ])
        );

        // Add marker to the map
        $map->addOverlay($marker);

        // Lets add a marker now 3
        $coord3 = new LatLng(['lat' => 	-3.336583,	'lng' => 127.099457 ]);

        $marker = new Marker([
            'position' => $coord3,
            'title' => 'My Home Town',
                //'icon'=>'@web/images/icon-budget.png',
        ]);

        // Provide a shared InfoWindow to the marker
        $marker->attachInfoWindow(
                new InfoWindow([
            'content' => '<p>Maluku <a href="'.\yii\helpers\Url::to(['/lembaga/list', 'id'=>3]).'">(Click Here)</a></p>'
                ])
        );

        // Add marker to the map
        $map->addOverlay($marker);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'map' => $map,
        ]);
    }

    public function actionList($id) {
        $searchModel = new \app\models\DepartemenSearch();
        $searchModel->id_lembaga=$id;
        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('list', [
                    'model' => $this->findModel($id),
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionDepartemen($id_lembaga, $id_departemen) {
        
        $searchModel = new \app\models\PenelitiSearch();
        $searchModel->id_departemen=$id_departemen;
        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('departemen', [
                    'model' => \app\models\Departemen::findOne($id_departemen),
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                    'id_lembaga' => $id_lembaga,
        ]);
    }

    /**
     * Displays a single Lembaga model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Lembaga model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Lembaga();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Lembaga model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
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
     * Deletes an existing Lembaga model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lembaga model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Lembaga the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Lembaga::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
