<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "TipoRelacion".
 *
 * @property int $Id
 * @property string|null $Nombre
 * @property string|null $Fecha_creacion
 */
class TipoRelacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TipoRelacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
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
