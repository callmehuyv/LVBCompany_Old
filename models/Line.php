<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "line".
 *
 * @property string $line_id
 * @property string $line_code
 * @property string $line_start_time
 * @property string $line_end_time
 * @property string $line_map
 */
class Line extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lines';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['line_code', 'line_start_time', 'line_end_time', 'line_map'], 'required'],
            [['line_start_time', 'line_end_time'], 'safe'],
            [['line_code', 'line_map'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'line_id' => 'Line ID',
            'line_code' => 'Line Code',
            'line_start_time' => 'Line Start Time',
            'line_end_time' => 'Line End Time',
            'line_map' => 'Line Map',
        ];
    }
}
