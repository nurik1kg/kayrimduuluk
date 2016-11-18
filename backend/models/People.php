<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "people".
 *
 * @property integer $id
 * @property string $name_kg
 * @property string $name_ru
 * @property string $name_en
 * @property string $birthday
 * @property string $content_kg
 * @property string $content_ru
 * @property string $content_en
 * @property string $logo
 * @property string $image
 */
class People extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $imageFile1;
    public $imageFile2;
    public static function tableName()
    {
        return 'people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_kg', 'name_ru', 'name_en', 'birthday', 'content_kg', 'content_ru', 'content_en', 'logo', 'image'], 'required'],
            [['birthday'], 'safe'],
            [['content_kg', 'content_ru', 'content_en'], 'string'],
            [['name_kg', 'name_ru', 'name_en', 'logo', 'image'], 'string', 'max' => 100],
            [['imageFile1','imageFile2'], 'image',],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_kg' => 'Аты Kg',
            'name_ru' => 'Аты Ru',
            'name_en' => 'Аты En',
            'birthday' => 'Туулган күнү',
            'content_kg' => 'Текст Kg',
            'content_ru' => 'Текст Ru',
            'content_en' => 'Текст En',
            'logo' => 'Кичи сүрөт',
            'image' => 'Чоң сүрөт',
        ];
    }
}
