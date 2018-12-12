<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use backend\models\Posts;

class PostsController extends Controller
{
    public function actionIndex()
    {
        $query = Posts::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $posts = $query->orderBy('text_id DESC')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'posts' => $posts,
            'pagination' => $pagination,
        ]);
    }

  public function actionUserposts()
    {
        $query = Posts::find()->orderBy('text_id DESC')
            ->where(['user'=>Yii::$app->user->identity->username]);

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);

        $posts = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('userposts', [
            'posts' => $posts,
            'pagination' => $pagination,
        ]);
    }


}