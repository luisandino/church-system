<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "CanalMovimiento".
 *
 * @property int $Id
 * @property string $Nombre
 * @property string $Fecha_creacion
 */
class CanalMovimiento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CanalMovimiento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre'], 'required'],
            [['Fecha_creacion'], 'safe'],
            [['Nombre'], 'string', 'max' => 50],
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
}
