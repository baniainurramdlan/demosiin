<?php

namespace app\modules\v1\models;

use Yii;

/**
 * This is the model class for table "sdm".
 *
 * @property integer $id
 * @property string $nama
 * @property string $gelar
 * @property string $lembaga
 * @property string $bidang_ilmu
 */
class Sdm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sdm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'gelar', 'lembaga', 'bidang_ilmu'], 'required'],
            [['nama', 'lembaga', 'bidang_ilmu'], 'string', 'max' => 100],
            [['gelar'], 'string', 'max' => 50],
        ];
    }

    public static function primaryKey()
    {
        return ['id'];
    }
}
