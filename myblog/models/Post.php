<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property string $id
 * @property string $img
 * @property string $title
 * @property string $intro_text
 * @property string $text
 * @property string $date_creation
 * @property integer $users_id
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
            [['title', 'intro_text', 'text'], 'required'],
            [['intro_text', 'text'], 'string'],
            [['date_creation'], 'safe'],
            [['users_id'], 'integer'],
            ['img', 'file'],
            [['img', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'title' => 'Title',
            'intro_text' => 'Intro Text',
            'text' => 'Text',
            'date_creation' => 'Date Creation',
            'users_id' => 'Users ID',
        ];
    }
}
