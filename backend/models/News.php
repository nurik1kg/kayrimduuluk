<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title_kg
 * @property string $title_ru
 * @property string $title_en
 * @property string $text_kg
 * @property string $text_ru
 * @property string $text_en
 * @property string $photo
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $imageFile;
    public $imageFiles;

    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text_kg', 'text_ru', 'text_en'], 'string'],
            [['photo','date'], 'required'],
            [['title_kg', 'title_ru', 'title_en'], 'string', 'max' => 255],
            [['photo'], 'string', 'max' => 100],
            [['imageFile'], 'image',],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_kg' => 'Темасы Kg',
            'title_ru' => 'Заголовок Ru',
            'title_en' => 'Title En',
            'text_kg' => 'Текст Kg',
            'text_ru' => 'Контент Ru',
            'text_en' => 'Content En',
            'date' => 'Жарыяланган күнү',
            'imageFile' => 'Башкы сүрөт',
            'imageFiles' => 'Галерея',
        ];
    }
}
