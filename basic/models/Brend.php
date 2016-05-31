<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brend".
 *
 * @property string $id
 * @property string $name
 *
 * @property Model[] $models
 */
class Brend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'brend';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModels()
    {
        return $this->hasMany(Model::className(), ['brend_id' => 'id']);
    }
}
