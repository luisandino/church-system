<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paises".
 *
 * @property int $Id
 * @property string $Codigo
 * @property string $Nombre
 * @property string $Fecha_creacion
 *
 * @property Ciudad[] $ciudads
 */
class Paises extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Paises';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Codigo', 'Nombre'], 'required'],
            //[['Fecha_creacion'], 'safe'],
            [['Codigo'], 'string', 'max' => 2],
            [['Nombre'], 'string', 'max' => 100],
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
            'Nombre' => 'Nombre',
            'Fecha_creacion' => 'Fecha Creacion',
        ];
    }

    /**
     * Gets query for [[Ciudads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCiudads()
    {
        return $this->hasMany(Ciudad::className(), ['Id_paises' => 'Id']);
    }
}
