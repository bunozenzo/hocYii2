<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "typewood".
 *
 * @property integer $id
 * @property string $name
 */
class Typewood extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'typewood';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
    public function getAllTypewood(){
        $data = Typewood::find()
            -> asArray()
            ->all();
    }
}
