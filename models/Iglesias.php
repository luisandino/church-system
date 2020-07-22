<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Iglesias".
 *
 * @property int $Id
 * @property string|null $Nombre
 * @property string|null $Direccion
 * @property string|null $Nombre_parroco
 * @property int|null $Telefono
 * @property string $Fecha_creacion
 * @property int $Id_ciudad
 */
class Iglesias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Iglesias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Telefono'], 'integer'],
            [['Fecha_creacion'], 'safe'],
            [['Id_ciudad'], 'required'],
            [['Nombre', 'Nombre_parroco'], 'string', 'max' => 100],
            [['Id_ciudad'],'string'],
            [['Direccion'], 'string', 'max' => 45],
            [['Nombre'], 'unique'],
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
            'Nombre' => 'Nombre',
            'Direccion' => 'Direccion',
            'Nombre_parroco' => 'Nombre Parroco',
            'Telefono' => 'Telefono',
            'Fecha_creacion' => 'Fecha Creacion',
            'Id_ciudad' => 'Ciudad',
            'ciudad.Nombre' => 'Ciudad'
        ];
    }

    public function getCiudad()
    {
        return $this->hasOne(Ciudad::className(), ['Id' => 'Id_ciudad']);
    }

}
