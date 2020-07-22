<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "Personas".
 *
 * @property int $Id
 * @property string $Nombre
 * @property string $Apellido
 * @property int|null $Telefono_fijo
 * @property string $Numero_documento
 * @property string|null $Direccion
 * @property string $Email
 * @property int|null $Telefono_movil
 * @property int|null $Pareja_equipo
 * @property int|null $Pareja_florecida
 * @property string $Fecha_nacimiento
 * @property int $Id_iglesias
 * @property int $Id_ciudad
 * @property int $Id_tipo_documento
 * @property int $Id_religiones
 * @property int $Id_movimiento_religioso
 */
class Personas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Personas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'Apellido', 'Numero_documento', 'Email', 'Fecha_nacimiento', 'Id_iglesias', 'Id_ciudad', 'Id_tipo_documento', 'Id_religiones', 'Id_movimiento_religioso'], 'required'],
            [['Telefono_fijo', 'Telefono_movil', 'Pareja_equipo', 'Pareja_florecida', 'Id_ciudad', 'Id_tipo_documento', 'Id_religiones', 'Id_movimiento_religioso'], 'integer'],
            [['Id_iglesias'],'string'],
            [['Fecha_nacimiento'], 'safe'],
            [['Nombre', 'Apellido'], 'string', 'max' => 50],
            [['Numero_documento'], 'string', 'max' => 20],
            [['Direccion'], 'string', 'max' => 100],
            [['Email'], 'string', 'max' => 45],
            [['Nombre', 'Apellido'], 'unique', 'targetAttribute' => ['Nombre', 'Apellido']],
            [['Email'], 'unique'],
            [['Telefono_movil'], 'unique'],
            [['Id_ciudad'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['Id_ciudad' => 'Id']],
            [['Id_iglesias'], 'exist', 'skipOnError' => true, 'targetClass' => Iglesias::className(), 'targetAttribute' => ['Id_iglesias' => 'Id']],
            [['Id_movimiento_religioso'], 'exist', 'skipOnError' => true, 'targetClass' => Movimientoreligioso::className(), 'targetAttribute' => ['Id_movimiento_religioso' => 'Id']],
            [['Id_religiones'], 'exist', 'skipOnError' => true, 'targetClass' => Religiones::className(), 'targetAttribute' => ['Id_religiones' => 'Id']],
            [['Id_tipo_documento'], 'exist', 'skipOnError' => true, 'targetClass' => Tipodocumento::className(), 'targetAttribute' => ['Id_tipo_documento' => 'Id']],
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
            'Apellido' => 'Apellido',
            'Telefono_fijo' => 'Telefono Fijo',
            'Numero_documento' => 'Numero Documento',
            'Direccion' => 'Direccion',
            'Email' => 'Email',
            'Telefono_movil' => 'Telefono Movil',
            'Pareja_equipo' => 'Pareja Equipo',
            'Pareja_florecida' => 'Pareja Florecida',
            'Fecha_nacimiento' => 'Fecha Nacimiento',
            'Id_iglesias' => 'Iglesias',
            'Id_ciudad' => 'Ciudad',
            'Id_tipo_documento' => 'Tipo Documento',
            'Id_religiones' => 'Religiones',
            'Id_movimiento_religioso' => 'Movimiento Religioso',
        ];
    }

    public function getIglesias()
    {
        return $this->hasMany(Iglesias::className(), ['Id' => 'Id_iglesias']);
    }

    public function getNombreIglesia()
    {
        return $this->iglesias->Nombre;
    }    
    
    public function getCiudad()
    {
        return $this->hasOne(Ciudad::className(), ['Id_ciudad' => 'Id']);
    }
    
    public function getTipoDocumento()
    {
        return $this->hasOne(TipoDocumento::className(), ['Id_tipo_documento' => 'Id']);
    }

    public function getReligiones()
    {
        return $this->hasMany(Religiones::className(), ['Id_religiones' => 'Id']);
    }

    public function getMovimientoreligiosos()
    {
        return $this->hasMany(Movimientoreligioso::className(), ['Id_ciudad' => 'Id']);
    }
}
