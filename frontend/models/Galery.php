<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "galery".
 *
 * @property integer $id
 * @property string $photo
 * @property integer $childid
 */
class Galery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'galery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo', 'childid'], 'required'],
            [['childid'], 'integer'],
            [['photo'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'childid' => 'Childid',
        ];
    }
}
