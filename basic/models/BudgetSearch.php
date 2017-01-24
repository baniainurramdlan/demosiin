<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Budget;
use yii\data\ArrayDataProvider;

/**
 * BudgetSearch represents the model behind the search form about `app\models\Budget`.
 */
class BudgetSearch extends Budget
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['dana'], 'number'],
            [['sumber', 'lembaga'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Budget::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'dana' => $this->dana,
        ]);

        $query->andFilterWhere(['like', 'sumber', $this->sumber])
            ->andFilterWhere(['like', 'lembaga', $this->lembaga]);

        return $dataProvider;
    }

    public function searchGrafik()
    {
        $query = Budget::find();

        // add conditions that should always apply here

        // $dataProvider = new ActiveDataProvider([
        //     'query' => $query,
        // ]);

        $data = [
          [
            'id' => 3,
            'tahun' => 2015,
            'APBN' => 5000000,
            'apbd' => 4000000,
            'ln' => 3000000,
          ],
          [
            'id' => 2,
            'tahun' => 2016,
            'APBN' => 3000000,
            'apbd' => 2000000,
            'ln' => 500000,
          ],
            [
              'id' => 1,
              'tahun' => 2017,
              'APBN' => 8000000,
              'apbd' => 1000000,
              'ln' => 1000000,
            ],
        ];

        $dataProvider = new ArrayDataProvider([
            'allModels' => $data,
        ]);
        return $dataProvider;
    }
}
