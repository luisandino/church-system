<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Iglesias;

/**
 * IglesiasSearch represents the model behind the search form of `app\models\Iglesias`.
 */
class IglesiasSearch extends Iglesias
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Telefono'], 'integer'],
            [['Nombre', 'Direccion', 'Id_ciudad','Nombre_parroco', 'Fecha_creacion'], 'safe'],
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
        $query = Iglesias::find();
        $query->select('Iglesias.Id,Iglesias.Nombre,Iglesias.Telefono, Iglesias.Id_ciudad, Iglesias.Direccion, Iglesias.Nombre_parroco, Iglesias.Fecha_creacion, ciudad.Nombre AS Ciudad');
        $query->innerJoinWith('ciudad','Iglesias.Id_ciudad = ciudad.Id');

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
            'Iglesias.Id' => $this->Id,            
            'Iglesias.Fecha_creacion' => $this->Fecha_creacion,
            //'Iglesias.Id_ciudad' => $this->Id_ciudad,
        ]);

        $query->andFilterWhere(['like', 'Iglesias.Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Iglesias.Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Iglesias.Nombre_parroco', $this->Nombre_parroco])
            ->andFilterWhere(['like','ciudad.Nombre',$this->Id_ciudad])
            ->andFilterWhere(['like','Iglesias.Telefono',$this->Telefono]);

        return $dataProvider;
    }
}
