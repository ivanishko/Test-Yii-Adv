<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Все записи</h1>
<ul>
<?php foreach ($posts as $post): ?>
    <li>
        <?= Html::encode("{$post->name} {$post->sname}({$post->email}, {$post->phone})") ?>:
        <br>
        <b><?= $post->user; ?></b>
        <br>
        <?= $post->textarea ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>