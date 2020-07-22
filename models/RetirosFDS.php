<?php

namespace app\models;

use Yii;
use app\models\Ciudad;

/**
 * This is the model class for table "RetirosFDS".
 *
 * @property int $Id
 * @property int|null $Codigo
 * @property string $Fecha_inicio
 * @property string $Fecha_fin
 * @property string|null $Direccion
 * @property int $Id_ciudad
 * @property string|null $Nombre_ciudad
 * 
 * @property Ciudad $ciudad
 */
class RetirosFDS extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'RetirosFDS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Codigo', 'Id_ciudad'], 'integer'],
            [['Fecha_inicio', 'Fecha_fin', 'Id_ciudad'], 'required'],
            [['Fecha_inicio', 'Fecha_fin'], 'safe'],
            [['Direccion'], 'string', 'max' => 45],
            [['Codigo'], 'unique'],
            //[['Nombre_ciudad'],'string'],
            [['Id_ciudad'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['Id_ciudad' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Codigo' => 'Codigo',
            'Fecha_inicio' => 'Fecha Inicio',
            'Fecha_fin' => 'Fecha Fin',
            'Direccion' => 'Direccion',
            'Id_ciudad' => 'Ciudad',
            'ciudad.Nombre' => 'Ciudad',
            //'Nombre_ciudad' => 'Nombre_Ciudad',
        ];
    }

    /**
     * Gets query for [[Ciudad]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCiudad()
    {
        return $this->hasOne(Ciudad::className(), ['Id' => 'Id_ciudad']);
    }    
}
