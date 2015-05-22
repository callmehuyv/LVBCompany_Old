<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehicle".
 *
 * @property string $vehicle_id
 * @property string $vehicle_name
 * @property string $vehicle_type
 * @property string $line_id
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_name', 'vehicle_type', 'line_id'], 'required'],
            [['line_id'], 'integer'],
            [['vehicle_name', 'vehicle_type'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vehicle_id' => 'Vehicle ID',
            'vehicle_name' => 'Vehicle Name',
            'vehicle_type' => 'Vehicle Type',
            'line_id' => 'Line ID',
        ];
    }
}
