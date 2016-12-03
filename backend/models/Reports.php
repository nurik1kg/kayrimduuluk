<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reports".
 *
 * @property integer $id
 * @property string $date
 * @property string $text_kg
 * @property string $text_ru
 * @property string $text_en
 */
class Reports extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reports';
    }

    /**
     * @inheritdoc
     */

    public $imageFiles;

    public function rules()
    {
        return [
            [['date', 'text_kg', 'text_ru', 'text_en'], 'required'],
            [['date'], 'safe'],
            [['text_kg', 'text_ru', 'text_en'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'date' => 'Дата',
            'text_kg' => 'Текст KG',
            'text_ru' => 'Текст RU',
            'text_en' => 'Текст EN',
            'imageFiles' => 'Сүрөттөр',
        ];
    }
}
