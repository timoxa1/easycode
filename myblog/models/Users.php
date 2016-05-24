<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $id
 * @property string $name
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property string $date_registration
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'lastname', 'email', 'password'], 'required', 'message' => "Поля обязатильные к заполнению"],
            [['date_registration'], 'safe'],
            ['email', 'email', 'message' => 'Некоректный e-mail адрес !'],
            [['name', 'lastname', 'email', 'password'], 'string', 'max' => 255],
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
            'lastname' => 'Lastname',
            'email' => 'Email',
            'password' => 'Password',
            'date_registration' => 'Date Registration',
        ];
    }
}
