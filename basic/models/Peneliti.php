<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peneliti".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $jumlah_paten
 * @property integer $jumlah_paper
 * @property integer $id_departemen
 *
 * @property Departemen $idDepartemen
 */
class Peneliti extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peneliti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'jumlah_paten', 'jumlah_paper', 'id_departemen'], 'required'],
            [['jumlah_paten', 'jumlah_paper', 'id_departemen'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['id_departemen'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::className(), 'targetAttribute' => ['id_departemen' => 'id']],
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
            'jumlah_paten' => 'Jumlah Paten',
            'jumlah_paper' => 'Jumlah Paper',
            'id_departemen' => 'Id Departemen',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDepartemen()
    {
        return $this->hasOne(Departemen::className(), ['id' => 'id_departemen']);
    }
}
