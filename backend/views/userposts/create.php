<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userposts */

$this->title = 'Создать запись';
$this->params['breadcrumbs'][] = ['label' => 'Ваши записи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userposts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
