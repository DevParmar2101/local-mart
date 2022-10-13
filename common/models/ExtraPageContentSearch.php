<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ExtraPageContent;

/**
 * ExtraPageContentSearch represents the model behind the search form of `common\models\ExtraPageContent`.
 */
class ExtraPageContentSearch extends ExtraPageContent
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'show_button', 'use_for', 'status'], 'integer'],
            [['title', 'sub_title', 'description', 'image', 'child_image', 'button_title', 'button_url'], 'safe'],
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
        $query = ExtraPageContent::find();

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
            'id' => $this->id,
            'show_button' => $this->show_button,
            'use_for' => $this->use_for,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'sub_title', $this->sub_title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'child_image', $this->child_image])
            ->andFilterWhere(['like', 'button_title', $this->button_title])
            ->andFilterWhere(['like', 'button_url', $this->button_url]);

        return $dataProvider;
    }
}
