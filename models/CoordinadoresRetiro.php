<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "CoordinadoresRetiro".
 *
 * @property int $Id
 * @property int $Id_personas
 * @property int $Id_retiros_FDS
 * @property string|null $Fecha_creacion
 */
class CoordinadoresRetiro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'CoordinadoresRetiro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Id_personas', 'Id_retiros_FDS'], 'required'],
            [['Id', 'Id_personas', 'Id_retiros_FDS'], 'integer'],
            [['Fecha_creacion'], 'safe'],
            [['Id', 'Id_personas', 'Id_retiros_FDS'], 'unique', 'targetAttribute' => ['Id', 'Id_personas', 'Id_retiros_FDS']],
            [['Id_personas'], 'exist', 'skipOnError' => true, 'targetClass' => Personas::className(), 'targetAttribute' => ['Id_personas' => 'Id']],
            [['Id_retiros_FDS'], 'exist', 'skipOnError' => true, 'targetClass' => Retirosfds::className(), 'targetAttribute' => ['Id_retiros_FDS' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Id_personas' => 'Personas',
            'Id_retiros_FDS' => 'Retiros Fds',
            'Fecha_creacion' => 'Fecha Creacion',
        ];
    }
}
