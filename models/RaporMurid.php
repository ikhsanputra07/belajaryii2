<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rapor_murid".
 *
 * @property integer $npm
 * @property string $nama
 * @property string $mata_kuliah
 * @property integer $nilai
 */
class RaporMurid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rapor_murid';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['npm', 'nama', 'mata_kuliah', 'nilai'], 'required'],
            [['npm', 'nilai'], 'integer'],
            [['nama'], 'string', 'max' => 30],
            [['mata_kuliah'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'npm' => 'Npm',
            'nama' => 'Nama',
            'mata_kuliah' => 'Mata Kuliah',
            'nilai' => 'Nilai',
        ];
    }
}
