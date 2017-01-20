<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "budget".
 *
 * @property integer $id
 * @property double $dana
 * @property string $sumber
 * @property string $lembaga
 */
class Budget extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'budget';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dana', 'sumber', 'lembaga'], 'required'],
            [['dana'], 'number'],
            [['sumber', 'lembaga'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dana' => 'Dana',
            'sumber' => 'Sumber',
            'lembaga' => 'Lembaga',
        ];
    }
}
