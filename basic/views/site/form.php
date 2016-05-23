<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<h1>Гостевая Книга</h1>
<h3>Добавте свое сообщения</h3>


<div class="row">
    <div class="col-lg-5">

        <?php $f = ActiveForm::begin(); ?>
        <?= $f->field($form, 'name') ?>
        <?= $f->field($form, 'email') ?>
        <?= $f->field($form, 'homePage') ?>
        <?= $f->field($form, 'text')->textArea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>

        <?php if($name){?>
                <?= $name?>
                <?= "<br/>"?>
                <?= $email?>
                <?= "<br />"?>
                <?= $homePage?>
                <?= "<br />"?>
                <?= $text?>
        <?php } ?>

        <?php ActiveForm::end(); ?>

    </div>
</div>