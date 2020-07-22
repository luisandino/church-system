<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CoordinadoresRetiro;

/**
 * CoordinadoresRetiroSearch represents the model behind the search form of `app\models\CoordinadoresRetiro`.
 */
class CoordinadoresRetiroSearch extends CoordinadoresRetiro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Id_personas', 'Id_retiros_FDS'], 'integer'],
            [['Fecha_creacion'], 'safe'],
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
        $query = CoordinadoresRetiro::find();

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
            'Id' => $this->Id,
            'Id_personas' => $this->Id_personas,
            'Id_retiros_FDS' => $this->Id_retiros_FDS,
            'Fecha_creacion' => $this->Fecha_creacion,
        ]);

        return $dataProvider;
    }
}
