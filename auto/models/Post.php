<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property string $id
 * @property string $title
 * @property string $text
 * @property string $date_creation
 * @property string $brend_id
 * @property string $motor_id
 * @property string $year_id
 *
 * @property Motor $motor
 * @property Brend $brend
 * @property Year $year
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'brend_id', 'motor_id', 'year_id'], 'required'],
            [['text'], 'string'],
            [['date_creation'], 'safe'],
            [['brend_id', 'motor_id', 'year_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['motor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Motor::className(), 'targetAttribute' => ['motor_id' => 'id']],
            [['brend_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brend::className(), 'targetAttribute' => ['brend_id' => 'id']],
            [['year_id'], 'exist', 'skipOnError' => true, 'targetClass' => Year::className(), 'targetAttribute' => ['year_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'date_creation' => 'Date Creation',
            'brend_id' => 'Brend ID',
            'motor_id' => 'Motor ID',
            'year_id' => 'Year ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMotor()
    {
        return $this->hasOne(Motor::className(), ['id' => 'motor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrend()
    {
        return $this->hasOne(Brend::className(), ['id' => 'brend_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYear()
    {
        return $this->hasOne(Year::className(), ['id' => 'year_id']);
    }
}
