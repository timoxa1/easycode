<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
?>

<?php foreach ($brends as $brend):?>
    <?php $params = ['post/all', 'brend_id' => $brend->id]; ?>
    <?= Html::a($brend->name, ['post/all', 'brend_id' => $brend->id], ['class' => 'btn btn-primary']) ?>
<?php endforeach;?>
<hr />


<?php foreach ($motors as $motor):?>
    <?php $params = ['post/all', 'motor_id' => $motor->id]; ?>
<!--    --><?//= Html::a($motor->name, ['post/all', 'motor_id' => $motor->id], ['class' => 'btn btn-primary']) ?>

<?php endforeach;?>

<?php foreach ($years as $year):?>
    <?php $params = ['post/all', 'motor_id' => $year->id]; ?>
    <!--    --><?//= Html::a($motor->name, ['post/all', 'motor_id' => $motor->id], ['class' => 'btn btn-primary']) ?>

<?php endforeach;?>


<div id="content">

    <?php foreach ($models as $model):?>
        <?="<br />"?>
        <h2><?="Модель Авто"?> | <?=$model->brend->name?></h2>
        <h3><?="Обем Двигателя"?> | <?=$model->motor->name?></h3>
        <h4><?="Год"?> | <?=$model->year->name?></h4>
        <h1><?=$model->title?></h1>
        <?="<br />"?>
        <?=$model->text?>
        <?="<br />"?>
        <?$model->date_creation?>
    <?php endforeach;?>
    <hr />
</div>






</div class="pagination">
<?= LinkPager::widget(['pagination' => $pagination])?>
</div>
</div>