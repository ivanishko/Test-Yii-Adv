<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use backend\models\Posts;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;


class UserpostsController extends Controller
{   
    public function actionIndex() 
    {    
     $query = Posts::find();

   
        $dataProvider = new ActiveDataProvider([
            'query' => Posts::find()->orderBy('text_id DESC')
            ->where(['user'=>Yii::$app->user->identity->username]),
            'pagination' => [
            'pageSize' => 20,
                ],
            ]);
            echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ],
        ]);
    }

}