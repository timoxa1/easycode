<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Brend;

/* @var $this yii\web\View */
/* @var $model app\models\Model */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="model-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brend_id')->dropDownList(ArrayHelper::map(Brend::find()->all(),'id', 'name')) ?>

    <?= $form->field($model, 'img')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
