<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comunidades".
 *
 * @property int $Id
 * @property string $Nombre
 * @property string $Fecha_creacion
 * @property int $Id_ciudad
 *
 * @property Ciudad $ciudad
 * @property Integrantescomunidad[] $integrantescomunidads
 */
class Comunidades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Comunidades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'Id_ciudad'], 'required'],
            [['Fecha_creacion'], 'safe'],
            [['Id_ciudad'], 'integer'],
            [['Nombre'], 'string', 'max' => 100],
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
            'Fecha_creacion' => 'Fecha Creacion',
            'Id_ciudad' => 'Ciudad',
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

    /**
     * Gets query for [[Integrantescomunidads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIntegrantescomunidads()
    {
        return $this->hasMany(Integrantescomunidad::className(), ['Id_comunidades' => 'Id']);
    }
}
