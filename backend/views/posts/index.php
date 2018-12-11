<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Записи</h1>
<ul>
<?php foreach ($posts as $post): ?>
    <li>
        <?= Html::encode("{$post->name} ({$post->sname})") ?>:
        <?= $post->textarea ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>