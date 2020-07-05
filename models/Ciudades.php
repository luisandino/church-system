<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciudad".
 *
 * @property int $Id
 * @property string|null $Codigo
 * @property string|null $Nombre
 * @property string|null $Fecha_creacion
 * @property int $Id_paises
 *
 * @property Paises $paises
 * @property Comunidades[] $comunidades
 * @property Iglesias[] $iglesias
 * @property Movimientoreligioso[] $movimientoreligiosos
 * @property Personas[] $personas
 * @property Retirosfds[] $retirosfds
 */
class Ciudades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciudad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fecha_creacion'], 'safe'],
            [['Id_paises'], 'required'],
            [['Id_paises'], 'integer'],
            [['Codigo'], 'string', 'max' => 2],
            [['Nombre'], 'string', 'max' => 100],
            [['Codigo'], 'unique'],
            [['Nombre'], 'unique'],
            [['Id_paises'], 'exist', 'skipOnError' => true, 'targetClass' => Paises::className(), 'targetAttribute' => ['Id_paises' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Codigo' => 'Codigo',
            'Nombre' => 'Nombre',
            'Fecha_creacion' => 'Fecha Creacion',
            'Id_paises' => 'Paises',
            'paises.Nombre' => 'Pais',
        ];
    }

    /**
     * Gets query for [[Paises]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaises()
    {
        return $this->hasOne(Paises::className(), ['Id' => 'Id_paises']);
    }

    /**
     * Gets query for [[Comunidades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComunidades()
    {
        return $this->hasMany(Comunidades::className(), ['Id_ciudad' => 'Id']);
    }

    /**
     * Gets query for [[Iglesias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIglesias()
    {
        return $this->hasMany(Iglesias::className(), ['Id_ciudad' => 'Id']);
    }

    /**
     * Gets query for [[Movimientoreligiosos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovimientoreligiosos()
    {
        return $this->hasMany(Movimientoreligioso::className(), ['Id_ciudad' => 'Id']);
    }

    /**
     * Gets query for [[Personas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Personas::className(), ['Id_ciudad' => 'Id']);
    }

    /**
     * Gets query for [[Retirosfds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRetirosfds()
    {
        return $this->hasMany(Retirosfds::className(), ['Id_ciudad' => 'Id']);
    }
}
