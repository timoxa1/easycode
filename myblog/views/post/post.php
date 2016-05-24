<?php
use yii\helpers\Url;
?>
<?php
$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
<h1>Posts</h1>

<?php foreach($posts as $post):?>

    <?= "<br />"?>
    <h1><a href="<?= Url::to(['post/one', 'id' => $post->id]) ?>"><?= $post->title ?></a></h1>
    <?= $post->img?>
    <p> <?= $post->intro_text?></p>
    <?= $post->date_creation?>
    <?= "<br />"?>
    <?= "id Автора ". $post->users_id ?>
    <?= "<br />"?>
    <h2><a href="<?= Url::to(['post/post', 'id' => $post->id])?>"><?= "Читать дальше"?></a><h2>
<?php endforeach;?>
</div>
