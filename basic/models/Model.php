<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "model".
 *
 * @property string $id
 * @property string $name
 * @property string $brend_id
 *
 * @property Brend $brend
 */
class Model extends \yii\db\ActiveRecord
{
    public $img;
    const IMG_UPLOADER_FILE = 'upload/img/';
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['brend_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['brend_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brend::className(), 'targetAttribute' => ['brend_id' => 'id']],
            [['img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Marka',
            'brend_id' => 'Brend ID',
            'img' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrend()
    {
        return $this->hasOne(Brend::className(), ['id' => 'brend_id']);
    }
}
