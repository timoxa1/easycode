<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\helpers\Html;
?>

<?php
$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-5">
<div>
    <h1>Category</h1>
    <?php foreach($categories as $category):?>
       <?php $params = ['post/all', 'category_id' => $category->id]; ?>
        <?= Html::a($category->name, ['post/all', 'category_id' => $category->id], ['class' => 'btn btn-primary']) ?>

    <?php endforeach;?>
    <hr />

<div>
    <?php foreach($posts as $post):?>

    <?= "<br />"?>


    <h1><?= $post->title ?> </h1>
    <?= $post->category->name ?>


    <p> <?= $post->intro_text?></p>
    <?= $post->date_creation?>


    <?= "<br />"?>
    <hr />
    <h2><a href="<?= Url::to(['post/post', 'id' => $post->id])?>"><?= "Читать дальше"?></a><h2>
            <?php endforeach;?>

</div>

</div>
        <?= LinkPager::widget(['pagination' => $pagination])?>
        </div>
    </div>