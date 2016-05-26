<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\widgets\LinkPager;


?>
<?php
$this->title = 'Гостевая книга';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-5">
        <?php $f = ActiveForm::begin(); ?>
        <?= $f->field($model, 'name') ?>
        <?= $f->field($model, 'email') ?>
        <?= $f->field($model, 'home_page') ?>
        <?= $f->field($model, 'text')->textArea(['rows' => 6]) ?>
        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>




<?php foreach($guests as $guest):?>
    <?= "<br />"?>
    <?= $guest->name?>
    <?= "<br />"?>
    <?= $guest->email?>
    <?= "<br />"?>
    <?= $guest->home_page?>
    <?= "<br />"?>
    <?= $guest->text?>
    <?= "<br />"?>
<?php endforeach;?>
        <?= LinkPager::widget(['pagination' => $pagination])?>
        </div>
    </div>
