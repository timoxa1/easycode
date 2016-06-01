<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Brend;
use app\models\Motor;
use app\models\Year;
use skeeks\yii2\ckeditor\CKEditorWidget;
use skeeks\yii2\ckeditor\CKEditorPresets;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'brend_id')->dropDownList(ArrayHelper::map(Brend::find()->all(),'id', 'name')) ?>

    <?= $form->field($model, 'motor_id')->dropDownList(ArrayHelper::map(Motor::find()->all(),'id', 'name')) ?>

    <?= $form->field($model, 'year_id')->dropDownList(ArrayHelper::map(Year::find()->all(),'id', 'name')) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(CKEditorWidget::className(), [
        'options' => ['rows' => 6],
        'preset' => CKEditorPresets::FULL
    ]) ?>

    <?= $form->field($model, 'date_creation')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
