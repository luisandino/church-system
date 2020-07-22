<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ciudad;

/**
 * CiudadSearch represents the model behind the search form of `app\models\Ciudad`.
 */
class CiudadSearch extends Ciudad
{
    /**
     * {@inheritdoc}
     */

    //variable created to store the country name to be used as a search field
    //public $Nombre_pais;

    public function rules()
    {
        return [
            [['Id'], 'integer'],
            [['Codigo', 'Nombre', 'Fecha_creacion','Id_paises'], 'safe'],
            [['Nombre_pais'],'safe'],
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
        $query = Ciudad::find();
        $query->select('ciudad.Id,ciudad.Codigo,ciudad.Nombre, ciudad.Fecha_creacion,ciudad.Id_paises, paises.Nombre AS Nombre_pais');
        $query->innerJoinWith('paises','ciudad.Id_paises = paises.Id');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // $dataProvider->setSort([
        //     'attributes'=>[
        //         'Nombre_pais'=>[
        //             'asc'=>['paises.Nombre' => SORT_ASC],
        //             'desc'=>['paises.Nombre' => SORT_DESC],
        //             'label'=>'Nombre Pais'
        //         ]
        //     ]
        // ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            //innerJoinWith('paises','ciudad.Id_paises = paises.Id');
            return $dataProvider;
        }


        // grid filtering conditions
        $query->andFilterWhere([
            'ciudad.Id' => $this->Id,
            'ciudad.Fecha_creacion' => $this->Fecha_creacion,
        ]);

        $query->andFilterWhere(['like', 'ciudad.Codigo', $this->Codigo])
            ->andFilterWhere(['like', 'ciudad.Nombre', $this->Nombre])
            ->andFilterWhere(['like','paises.Nombre',$this->Id_paises]);
            

        return $dataProvider;
    }
}
