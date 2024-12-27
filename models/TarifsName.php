<?php

namespace app\models;

use yii\db\ActiveRecord;

class TarifsName extends ActiveRecord
{
    public $name;
    public $name2;
    public $temp;
    
	public function tableName()
	{
		return 'tarifsname';
	}

    public function attributeLabels()
    {
        return [
            'name' => 'название тарифа',
            'name2' => 'второе название',
            'temp' => 'временно',
        ];
    }

    public function rules()
    {
        return [
            // name, name2, temp атрибуты обязательны
            [['name', 'name2', 'temp'], 'required'],

            // атрибут __ должен быть правильным email адресом
            ['name', 'name'],
        ];
    }
}
?>