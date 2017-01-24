<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paten".
 *
 * @property integer $id
 * @property string $nama
 * @property string $lembaga
 * @property string $bidang_ilmu
 */
class Paten extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paten';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'lembaga', 'bidang_ilmu'], 'required'],
            [['nama', 'lembaga', 'bidang_ilmu'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'lembaga' => 'Lembaga',
            'bidang_ilmu' => 'Bidang Ilmu',
        ];
    }
}
