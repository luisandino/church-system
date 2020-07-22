<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MovimientoReligioso".
 *
 * @property int $Id
 * @property string|null $Nombre
 * @property string|null $Fecha_creacion
 * @property int $Id_religiones
 * @property int $Id_ciudad
 */
class MovimientoReligioso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'MovimientoReligioso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fecha_creacion'], 'safe'],
            [['Id_religiones', 'Id_ciudad'], 'required'],
            [['Id_religiones', 'Id_ciudad'], 'string'],
            [['Nombre'], 'string', 'max' => 100],
            [['Nombre'], 'unique'],
            [['Id_ciudad'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['Id_ciudad' => 'Id']],
            [['Id_religiones'], 'exist', 'skipOnError' => true, 'targetClass' => Religiones::className(), 'targetAttribute' => ['Id_religiones' => 'Id']],
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
            'Id_religiones' => 'Religiones',
            'Id_ciudad' => 'Ciudad',
        ];
    }

    public function getReligiones()
    {
        return $this->hasOne(Religiones::className(), ['Id' => 'Id_religiones']);
    }

    public function getCiudad()
    {
        return $this->hasOne(Ciudad::className(), ['Id' => 'Id_ciudad']);
    }
}
