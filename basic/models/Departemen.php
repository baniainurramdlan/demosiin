<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departemen".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $jumlah_peneliti
 * @property integer $jumlah_dokumen
 * @property integer $id_lembaga
 *
 * @property Lembaga $idLembaga
 * @property Peneliti[] $penelitis
 */
class Departemen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departemen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'jumlah_peneliti', 'jumlah_dokumen', 'id_lembaga'], 'required'],
            [['jumlah_peneliti', 'jumlah_dokumen', 'id_lembaga'], 'integer'],
            [['nama'], 'string', 'max' => 100],
            [['id_lembaga'], 'exist', 'skipOnError' => true, 'targetClass' => Lembaga::className(), 'targetAttribute' => ['id_lembaga' => 'id']],
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
            'jumlah_peneliti' => 'Jumlah Peneliti',
            'jumlah_dokumen' => 'Jumlah Dokumen',
            'id_lembaga' => 'Id Lembaga',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLembaga()
    {
        return $this->hasOne(Lembaga::className(), ['id' => 'id_lembaga']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenelitis()
    {
        return $this->hasMany(Peneliti::className(), ['id_departemen' => 'id']);
    }
}
