<?php

namespace app\models;
use Yii;

/**
 * This is the model class for table "sponsor".
 *
 * @property integer $id
 * @property string $name
 * @property string $photo
 */
class Sponsor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $imageFile;

    public static function tableName()
    {
        return 'sponsor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'photo'], 'required'],
            [['name', 'photo'], 'string', 'max' => 255],
            [['imageFile'], 'image',]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Аты',
            'photo' => 'Photo',
        ];
    }
}
