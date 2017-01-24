<?php

namespace app\modules\v1\controllers;

class SdmController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\modules\v1\models\Sdm';
    public $modelClassSearch = 'app\modules\v1\models\SdmSearch';

    public function actionSearch() {
        if (!empty($_GET)) {
            $model = new $this->modelClassSearch;
            foreach ($_GET as $key => $value) {
                if (!$model->hasAttribute($key)) {
                    throw new \yii\web\HttpException(404, 'Invalid attribute:' . $key);
                }
            }
            try {
                $filter;
                $modelSearchNames = explode("\\", $this->modelClassSearch);
                $modelSearchName = $modelSearchNames[count($modelSearchNames)-1];
                foreach ($_GET as $key => $value) {
                    $filter[$modelSearchName][$key] = $value;
                }
                $provider = $model->search($filter);
            } catch (Exception $ex) {
                throw new \yii\web\HttpException(500, 'Internal server error');
            }

            if ($provider->getCount() <= 0) {
                throw new \yii\web\HttpException(404, 'No entries found with this query string');
            } else {
                return $provider;
            }
        } else {
            throw new \yii\web\HttpException(400, 'There are no query string');
        }
    }
}
