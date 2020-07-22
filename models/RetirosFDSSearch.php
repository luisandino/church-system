<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RetirosFDS;


/**
 * RetirosFDSSearch represents the model behind the search form of `app\models\RetirosFDS`.
 */
class RetirosFDSSearch extends RetirosFDS
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Codigo', 'Id_ciudad'], 'integer'],
            [['Fecha_inicio', 'Fecha_fin', 'Direccion',], 'safe'],
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
        //$query = RetirosFDS::find();
        $query= RetirosFDS::find()->select('RetirosFDS.Id, RetirosFDS.Codigo, RetirosFDS.Fecha_inicio, 
            RetirosFDS.Fecha_fin, RetirosFDS.Id_Ciudad, RetirosFDS.Direccion, ciudad.Nombre Nombre_ciudad')->
            innerJoinWith('ciudad','RetirosFDS.Id_ciudad = ciudad.Id');

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
            'Codigo' => $this->Codigo,
            'Fecha_inicio' => $this->Fecha_inicio,
            'Fecha_fin' => $this->Fecha_fin,
            'Id_ciudad' => $this->Id_ciudad,
            'ciudad.Nombre' => $this->Nombre_ciudad,
        ]);

        $query->andFilterWhere(['like', 'Direccion', $this->Direccion]);


        return $dataProvider;
    }
}
