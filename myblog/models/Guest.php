<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "guest".
 *
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string $home_page
 * @property string $text
 */
class Guest extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'text'], 'required', 'message' => 'Поля обизательные к заполнению '],
            ['email', 'email', 'message' => 'Некоректный e-mail адрес !'],
            [['text'], 'string'],
            [['home_page'], 'string'],
            [['name', 'email'], 'string', 'max' => 255],
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
            'email' => 'Email',
            'home_page' => 'Home Page',
            'text' => 'Text',
        ];
    }
}
