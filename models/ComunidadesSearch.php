<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comunidades;

/**
 * ComunidadesSearch represents the model behind the search form of `app\models\Comunidades`.
 */
class ComunidadesSearch extends Comunidades
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Id_ciudad'], 'integer'],
            [['Nombre', 'Fecha_creacion'], 'safe'],
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
        $query = Comunidades::find();

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
            'Fecha_creacion' => $this->Fecha_creacion,
            'Id_ciudad' => $this->Id_ciudad,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre]);

        return $dataProvider;
    }
}
