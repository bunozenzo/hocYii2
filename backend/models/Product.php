<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property integer $typewood_id
 * @property string $color
 * @property string $image
 * @property string $size
 * @property string $price
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'typewood_id', 'color', 'image', 'size', 'price', 'description', 'created_at', 'updated_at'], 'required',
                'message' => '{attribute} không được để trống'],
            [['typewood_id', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['color', 'price'], 'string', 'max' => 50],
            [['image'], 'string', 'max' => 100],
            [['size'], 'string', 'max' => 5],
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
            'name' => 'Tên',
            'typewood_id' => 'Loại gỗ',
            'color' => 'Màu sắc',
            'image' => 'Ảnh',
            'size' => 'Cỡ',
            'price' => 'Giá',
            'description' => 'Mô tả',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
