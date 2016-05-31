<?php

use yii\widgets\LinkPager;
use yii\helpers\Html;
?>
<div class="sidebar">
<?php foreach ($brends as $brend):?>

    <?php $params = ['post/all', 'brend_id' => $brend->id]; ?>
    <?= Html::a($brend->name, ['model/auto', 'brend_id' => $brend->id], ['class' => 'btn btn-primary']) ?>
    <hr />


<?php endforeach;?>
</div>

<div class="content">

<?php foreach ($models as $model):?>
    <?php if ($model->img): ?>
        <img src="<?= $model->getPathToImage() ?>" width="250px" height="250px">
        <?php endif;?>
        <h1><?=$model->name?> | <?=$model->brend->name?></h1>
    <hr />
<?php endforeach;?>
</div>






</div class="pagination">
<?= LinkPager::widget(['pagination' => $pagination])?>
</div>
</div>
