<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property integer $no
 * @property string $npm
 * @property string $nama
 * @property string $tangga_lahir
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no', 'npm', 'tangga_lahir'], 'required'],
            [['no'], 'integer'],
            [['tangga_lahir'], 'safe'],
            [['npm'], 'string', 'max' => 35],
            [['nama'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'npm' => 'Npm',
            'nama' => 'Nama',
            'tangga_lahir' => 'Tangga Lahir',
        ];
    }
}
