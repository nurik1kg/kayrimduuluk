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
 * @property string $date
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
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
            [['photo', 'date'], 'required'],
            [['date'], 'safe'],
            [['title_kg', 'title_ru', 'title_en'], 'string', 'max' => 255],
            [['photo'], 'string', 'max' => 100],
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
            'photo' => 'Photo',
            'date' => 'Date',
        ];
    }
}
