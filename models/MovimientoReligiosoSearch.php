<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MovimientoReligioso;

/**
 * MovimientoReligiosoSearch represents the model behind the search form of `app\models\MovimientoReligioso`.
 */
class MovimientoReligiosoSearch extends MovimientoReligioso
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id'], 'integer'],
            [['Id_religiones', 'Id_ciudad'], 'string'],
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
        $query = MovimientoReligioso::find();
        $query->select('MovimientoReligioso.Id, MovimientoReligioso.Id_religiones, MovimientoReligioso.Id_ciudad,
             MovimientoReligioso.Nombre, MovimientoReligioso.Fecha_creacion, religiones.Nombre AS Religion, 
             ciudad.Nombre as Ciudad')
            ->innerJoinWith('religiones','religiones.Id = MovimientoReligioso.Id_religiones')
            ->innerJoinWith('ciudad','ciudad.Id = MovimientoReligioso.Id_ciudad');

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
            'MovimientoReligioso.Id' => $this->Id,
            //'Fecha_creacion' => $this->Fecha_creacion,
            //'Id_religiones' => $this->Id_religiones,
            //'Id_ciudad' => $this->Id_ciudad,
        ]);

        $query->andFilterWhere(['like', 'MovimientoReligioso.Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'MovimientoReligioso.Fecha_creacion', $this->Fecha_creacion])
            ->andFilterWhere(['like', 'MovimientoReligioso.Id_religiones', $this->Id_religiones])
            ->andFilterWhere(['like', 'MovimientoReligioso.Id_ciudad', $this->Id_ciudad]);

        return $dataProvider;
    }
}
