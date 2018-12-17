<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\HtmlPurifier;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
?>
<h1>Ваши записи (<?= Yii::$app->user->identity->username; ?>)</h1>



    
<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
 
            'text_id',
            'name:ntext',
            'sname:ntext',
            'textarea:ntext',
            //'category_image:ntext',
            // 'created_at',
            // 'updated_at',
 
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

