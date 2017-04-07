<?php

namespace net\frenzel\jobcontrol\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use net\frenzel\jobcontrol\models\Jobcontrol;

/**
 * JobcontrolSearch represents the model behind the search form of `net\frenzel\jobcontrol\models\Jobcontrol`.
 */
class JobcontrolSearch extends Jobcontrol
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fireInstance', 'fireTime', 'recovering', 'refireCount', 'created_by', 'updated_by', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['name', 'jobGroup', 'jobDetail', 'jobInstance', 'jobRunTime', 'result', 'scheduler', 'trigger', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Jobcontrol::find();

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
            'fireInstance' => $this->fireInstance,
            'fireTime' => $this->fireTime,
            'jobRunTime' => $this->jobRunTime,
            'recovering' => $this->recovering,
            'refireCount' => $this->refireCount,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'jobGroup', $this->jobGroup])
            ->andFilterWhere(['like', 'jobDetail', $this->jobDetail])
            ->andFilterWhere(['like', 'jobInstance', $this->jobInstance])
            ->andFilterWhere(['like', 'result', $this->result])
            ->andFilterWhere(['like', 'scheduler', $this->scheduler])
            ->andFilterWhere(['like', 'trigger', $this->trigger])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
