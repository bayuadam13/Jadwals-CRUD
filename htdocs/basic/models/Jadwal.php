<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jadwal".
 *
 * @property int $no
 * @property string $agenda
 * @property string $tanggal
 * @property string $tempat
 * @property string $keterangan
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jadwal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agenda', 'tanggal', 'tempat', 'keterangan'], 'required'],
            [['tanggal'], 'safe'],
            [['keterangan'], 'string'],
            [['agenda', 'tempat'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'agenda' => 'Agenda',
            'tanggal' => 'Tanggal',
            'tempat' => 'Tempat',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @inheritdoc
     * @return JadwalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JadwalQuery(get_called_class());
    }
}
