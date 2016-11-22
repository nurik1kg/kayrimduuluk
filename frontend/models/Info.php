<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Info".
 *
 * @property integer $id
 * @property string $text_kg
 * @property string $text_ru
 * @property string $text_en
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text_kg', 'text_ru', 'text_en'], 'required'],
            [['text_kg', 'text_ru', 'text_en'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text_kg' => 'Text Kg',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
        ];
    }
}
