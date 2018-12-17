<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Userposts */

$this->title = 'Update Userposts: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Userposts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->text_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="userposts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
