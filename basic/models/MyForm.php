<?php
namespace app\models;

use Yii;
use yii\base\Model;

class MyForm extends Model
{
    public $name;
    public $email;
    public $homePage;
    public $text;


    public function rules()
    {
        return [

            [['name', 'email', 'text'], 'required', 'message' => 'Поля обизательные к заполнению '],
            ['email', 'email', 'message' => 'Некоректный e-mail адрес !'],

        ];
    }
}
?>