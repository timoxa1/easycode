<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $id
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $date_creation
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'last_name', 'email', 'password'], 'required'],
            [['date_creation'], 'safe'],
            [['name', 'last_name', 'email', 'password'], 'string', 'max' => 255],
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
            'last_name' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
            'date_creation' => 'Date Creation',
        ];
    }
}
