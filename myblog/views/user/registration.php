<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>
<?php
$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    <?= $form->field($model, 'last_name')
        ->textInput(['placeholder'=>'Фамилия']) ?>
    <?= $form->field($model, 'name')
        ->textInput(['placeholder'=>'Имя']) ?>
    <?= $form->field($model, 'email')
        ->textInput(['placeholder'=>'Email']) ?>
    <?= $form->field($model, 'password')
        ->passwordInput(['placeholder'=>'Пароль']) ?>
    <?= $form->field($model, 'password_again')
        ->passwordInput(['placeholder'=>'Повторите пароль']) ?>
    <?= Html::submitButton('sign up',['class' => 'btn btn-primary','name' => 'contact-button']) ?>
<?php ActiveForm::end([]); ?>

