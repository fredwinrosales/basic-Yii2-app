<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maestros".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $email
 */
class Maestros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'maestros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido', 'email'], 'required'],
            [['nombre', 'apellido', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'email' => 'Email',
        ];
    }
}
