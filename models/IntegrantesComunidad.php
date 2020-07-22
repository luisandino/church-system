<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "IntegrantesComunidad".
 *
 * @property int $Id
 * @property int $Id_comunidades
 * @property int $Id_personas
 */
class IntegrantesComunidad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'IntegrantesComunidad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id', 'Id_comunidades', 'Id_personas'], 'required'],
            [['Id', 'Id_comunidades', 'Id_personas'], 'integer'],
            [['Id', 'Id_comunidades', 'Id_personas'], 'unique', 'targetAttribute' => ['Id', 'Id_comunidades', 'Id_personas']],
            [['Id_comunidades'], 'exist', 'skipOnError' => true, 'targetClass' => Comunidades::className(), 'targetAttribute' => ['Id_comunidades' => 'Id']],
            [['Id_personas'], 'exist', 'skipOnError' => true, 'targetClass' => Personas::className(), 'targetAttribute' => ['Id_personas' => 'Id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Id_comunidades' => 'Id Comunidades',
            'Id_personas' => 'Id Personas',
        ];
    }
}
