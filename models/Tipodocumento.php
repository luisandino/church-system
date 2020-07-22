<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipodocumento".
 *
 * @property int $Id
 * @property string|null $Tipo_documento
 * @property string $Fecha_creacion
 *
 * @property Personas[] $personas
 */
class Tipodocumento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'TipoDocumento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fecha_creacion'], 'safe'],
            [['Tipo_documento'], 'string', 'max' => 45],
            [['Tipo_documento'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Tipo_documento' => 'Tipo Documento',
            'Fecha_creacion' => 'Fecha Creacion',
        ];
    }

    /**
     * Gets query for [[Personas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Personas::className(), ['Id_tipo_documento' => 'Id']);
    }
}
