<?php
$this->title = 'One Post';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-5">


        <div>
            <?= "<br />"?>
            <?= $one->img?>
            <h1><?= $one->title ?></h1>
            <p> <?= $one->full_text?></p>
            <?= $one->date_creation?>
            <?= "<br />"?>
            <?= "id Автора ". $one->name_user ?>



        </div>
    </div>
</div>