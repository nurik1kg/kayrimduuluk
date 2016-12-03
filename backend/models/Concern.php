<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "concern".
 *
 * @property integer $id
 * @property string $name
 * @property string $photo
 * @property integer $count
 */
class Concern extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $imageFile;

    public static function tableName()
    {
        return 'concern';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'photo'], 'required'],
            [['count'], 'integer'],
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
            'name' => 'Name',
            'photo' => 'Photo',
            'count' => 'Count',
        ];
    }
}
