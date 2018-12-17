<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ваши записи'; 
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userposts-index">

    <h1><?= Html::encode($this->title)  ?> (<?= Yii::$app->user->identity->username;  ?>)</h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать запись', ['create'], ['class' => 'btn btn-success']) ?>

    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'text_id',
            'user:ntext',
            'name:ntext',
            'sname:ntext',
            'email:ntext',
            'phone:ntext',
            'textarea:ntext',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
