<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Userposts;

/**
 * PostSearch represents the model behind the search form of `app\models\Userposts`.
 */
class PostSearch extends Userposts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'sname', 'email', 'phone', 'textarea', 'user'], 'safe'],
            [['text_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Userposts::find()->orderBy('text_id DESC')
            ->where(['user'=>\Yii::$app->user->identity->username]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'text_id' => $this->text_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'sname', $this->sname])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'textarea', $this->textarea])
            ->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
