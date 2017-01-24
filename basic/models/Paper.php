<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paper".
 *
 * @property integer $id
 * @property string $nama
 * @property string $lembaga
 * @property string $bidang_ilmu
 */
class Paper extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paper';
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
