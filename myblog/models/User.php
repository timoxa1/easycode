<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $id
 * @property string $last_name
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $password_again
 * @property string $sex
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
            [['last_name', 'name', 'email', 'password', 'password_again', ], 'required'],
            [['last_name', 'name', 'email', 'password', 'password_again', ], 'string', 'max' => 255],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Last Name',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'password_again' => 'Password Again',
            'sex' => 'Sex',
        ];
    }
}
