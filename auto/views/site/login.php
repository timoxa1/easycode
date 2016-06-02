<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\debug\models\User;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div>
    <!-- Навигация -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registration</a></li>
        <li><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Guest Book</a></li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
            <div class="site-login">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>Please fill out the following fields to login:</p>

                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'options' => ['class' => 'form-horizontal'],
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                ]) ?>

                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>

                <div class="col-lg-offset-1" style="color:#999;">
                    You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
                    To modify the username/password, please check out the code <code>app\models\User::$users</code>.
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile">
            <div class="tab-content">
                <div class="site-contact">

                        <h1>Registration</h1>

                        <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'name')->textInput(['placeholder'=>'Фамилия']) ?>
            <?= $form->field($model, 'last_name')->textInput(['placeholder'=>'Имя']) ?>
            <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email']) ?>
            <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Пароль']) ?>

            <?= Html::submitButton('sign up',['class' => 'btn btn-primary','name' => 'contact-button']) ?>
            <?php ActiveForm::end([]); ?>
                    </div>
                </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="messages">...</div>
        <div role="tabpanel" class="tab-pane" id="settings">...</div>
    </div>
</div>