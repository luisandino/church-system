<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Personas;

/**
 * PersonasSearch represents the model behind the search form of `app\models\Personas`.
 */
class PersonasSearch extends Personas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Telefono_fijo', 'Telefono_movil', 'Pareja_equipo', 'Pareja_florecida', 'Id_ciudad', 'Id_tipo_documento', 'Id_religiones', 'Id_movimiento_religioso'], 'integer'],
            [['Id_iglesias'],'string'],
            [['Nombre', 'Apellido', 'Numero_documento', 'Direccion', 'Email', 'Fecha_nacimiento'], 'safe'],
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
        $query = Personas::find();

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
            'Telefono_fijo' => $this->Telefono_fijo,
            'Telefono_movil' => $this->Telefono_movil,
            'Pareja_equipo' => $this->Pareja_equipo,
            'Pareja_florecida' => $this->Pareja_florecida,
            'Fecha_nacimiento' => $this->Fecha_nacimiento,
            //'Id_iglesias' => $this->Id_iglesias,
            'Id_ciudad' => $this->Id_ciudad,
            'Id_tipo_documento' => $this->Id_tipo_documento,
            'Id_religiones' => $this->Id_religiones,
            'Id_movimiento_religioso' => $this->Id_movimiento_religioso,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Apellido', $this->Apellido])
            ->andFilterWhere(['like', 'Numero_documento', $this->Numero_documento])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Id_iglesias', $this->Id_iglesias]);

        return $dataProvider;
    }
}
