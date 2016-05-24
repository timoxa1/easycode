<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>
<?php
$this->title = 'Registration';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Registration</h1>
    <div class="row">
    <div class="col-lg-5">
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'lastname')?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'password')->passwordInput(['autofocus' => true])?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button', 'autocomplete' => 'off']) ?>
    </div>

<?php ActiveForm::end(); ?>
        </div>
    </div>
