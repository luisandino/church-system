<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "religiones".
 *
 * @property int $Id
 * @property string|null $Nombre
 * @property string|null $Fecha_creacion
 *
 * @property Movimientoreligioso[] $movimientoreligiosos
 * @property Personas[] $personas
 */
class Religiones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Religiones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fecha_creacion'], 'safe'],
            [['Nombre'], 'string', 'max' => 100],
            [['Nombre'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Nombre' => 'Nombre',
            'Fecha_creacion' => 'Fecha Creacion',
        ];
    }

    /**
     * Gets query for [[Movimientoreligiosos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovimientoreligiosos()
    {
        return $this->hasMany(Movimientoreligioso::className(), ['Id_religiones' => 'Id']);
    }

    /**
     * Gets query for [[Personas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Personas::className(), ['Id_religiones' => 'Id']);
    }
}
