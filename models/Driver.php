<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property string $driver_id
 * @property string $driver_name
 * @property string $driver_birthday
 * @property integer $driver_phone
 * @property string $driver_address
 * @property string $driver_avatar
 * @property string $vehicle_id
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'drivers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['driver_name', 'driver_birthday', 'driver_phone', 'driver_address', 'driver_avatar', 'vehicle_id'], 'required'],
            [['driver_birthday'], 'safe'],
            [['driver_phone', 'vehicle_id'], 'integer'],
            [['driver_name', 'driver_address', 'driver_avatar'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'driver_id' => 'Driver ID',
            'driver_name' => 'Driver Name',
            'driver_birthday' => 'Driver Birthday',
            'driver_phone' => 'Driver Phone',
            'driver_address' => 'Driver Address',
            'driver_avatar' => 'Driver Avatar',
            'vehicle_id' => 'Vehicle ID',
        ];
    }
}
