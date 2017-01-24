<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lembaga".
 *
 * @property integer $id
 * @property string $nama
 * @property string $website
 * @property integer $jumlah_departemen
 *
 * @property Departemen[] $departemens
 */
class Lembaga extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lembaga';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'website', 'jumlah_departemen'], 'required'],
            [['jumlah_departemen'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['website'], 'string', 'max' => 200],
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
            'website' => 'Website',
            'jumlah_departemen' => 'Jumlah Departemen',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartemens()
    {
        return $this->hasMany(Departemen::className(), ['id_lembaga' => 'id']);
    }
}
