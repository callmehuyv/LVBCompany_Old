<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "station".
 *
 * @property string $station_id
 * @property string $station_name
 * @property string $station_position
 * @property string $line_id
 */
class Station extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['station_name', 'station_position', 'line_id'], 'required'],
            [['line_id'], 'integer'],
            [['station_name', 'station_position'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'station_id' => 'Station ID',
            'station_name' => 'Station Name',
            'station_position' => 'Station Position',
            'line_id' => 'Line ID',
        ];
    }
}
