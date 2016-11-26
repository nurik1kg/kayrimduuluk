<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schools".
 *
 * @property integer $id
 * @property string $title_kg
 * @property string $title_ru
 * @property string $title_en
 * @property string $text_kg
 * @property string $text_ru
 * @property string $text_en
 * @property string $phone
 * @property string $address_kg
 * @property string $address_ru
 * @property string $address_en
 * @property string $image
 */
class Schools extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title_kg', 'title_ru', 'title_en', 'text_kg', 'text_ru', 'text_en', 'phone', 'address_kg', 'address_ru', 'address_en', 'image'], 'required'],
            [['text_kg', 'text_ru', 'text_en'], 'string'],
            [['title_kg', 'title_ru', 'title_en', 'image'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 25],
            [['address_kg', 'address_ru', 'address_en'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_kg' => 'Title Kg',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'text_kg' => 'Text Kg',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
            'phone' => 'Phone',
            'address_kg' => 'Address Kg',
            'address_ru' => 'Address Ru',
            'address_en' => 'Address En',
            'image' => 'Image',
        ];
    }
}
