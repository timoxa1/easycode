<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\BaseStringHelper;
/**
 * This is the model class for table "post".
 *
 * @property string $id
 * @property string $title
 * @property string $intro_text
 * @property string $full_text
 * @property string $category_id
 * @property string $name_user
 * @property string $date_creation
 * @property string $img
 *
 * @property Category $category
 */
class Post extends \yii\db\ActiveRecord
{
    public $image;
    public $filename;
    public $string;
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
            [['title', 'intro_text', 'full_text', 'category_id', 'name_user'], 'required'],
            [['intro_text', 'full_text'], 'string'],
            [['category_id'], 'integer'],
            [['date_creation'], 'safe'],
            [['img'], 'file'],
            [['title', 'name_user', 'img'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'intro_text' => 'Intro Text',
            'full_text' => 'Full Text',
            'category_id' => 'Category ID',
            'name_user' => 'Name User',
            'date_creation' => 'Date Creation',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    public function beforeSave($insert){
        if ($this->isNewRecord) {
            //generate & upload
            $this->string = substr(uniqid('img'), 0, 12); //imgRandomString
            $this->image = UploadedFile::getInstance($this, 'img');
            $this->filename = 'static/images/' . $this->string . '.' . $this->image->extension;
            $this->image->saveAs($this->filename);

//            $this->text_preview = BaseStringHelper::truncate($this->text, 250, '...');

            //save
            $this->img = '/' . $this->filename;
        }else{
            $this->image = UploadedFile::getInstance($this, 'img');
            if($this->image){
                $this->image->saveAs(substr($this->img, 1));
            }
        }

        return parent::beforeSave($insert);
    }
}
