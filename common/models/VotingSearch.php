<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Voting;

/**
 * VotingSearch represents the model behind the search form of `common\models\Voting`.
 */
class VotingSearch extends Voting
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'studnumber'], 'integer'],
            [['candidate', 'group', 'why'], 'safe'],
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
        $query = Voting::find();

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
            'studnumber' => $this->studnumber,
        ]);

        $query->andFilterWhere(['like', 'candidate', $this->candidate])
            ->andFilterWhere(['like', 'group', $this->group])
            ->andFilterWhere(['like', 'why', $this->why]);

        return $dataProvider;
    }
}
